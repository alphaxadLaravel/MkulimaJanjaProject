<?php
    // 🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥 hii page ya moto sana
     
    // Hakikisha session ipo On kujua n nani anafanya Checkout
    session_start();

    // Husisha connection ya Database kwanza
    include "connection.php";

    if(isset($_POST['checkout'])){

        // Pokea Data zinazotoka katika fomu kule
        $mkoa = mysqli_real_escape_string($conn, $_POST['mkoa']);
        $wilaya = mysqli_real_escape_string($conn, $_POST['wilaya']);
        $mahali = mysqli_real_escape_string($conn, $_POST['mahali']);
        $simu = mysqli_real_escape_string($conn, $_POST['simu']);
        $branch = mysqli_real_escape_string($conn, $_POST['branch']);
        $pin = mysqli_real_escape_string($conn, $_POST['pin']);

        // Pata User ID hapa
        $user_id = $_SESSION['user_id'];

        // Pata namba ya simu ya malipo hapa
        $sql = "SELECT * FROM users WHERE id ='$user_id'";
        $check = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($check);

        // namba ya simu
        $simu_malipo =  $data['simu'];

        // Kagua namba ya malipo na kiwango cha fedha
        $sql = "SELECT * FROM money_branches WHERE phone ='$simu_malipo'";
        $kagua = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($kagua);
        $kiwango = $result['amount'];
        $pi_code = $result['password'];
        $tawi = $result['branch'];

        // Pata gharama anayotaka kulipia na compare na kiasi chake
        $sql = "SELECT sum(total_cost) AS 'costs' FROM cart WHERE cart.user_id ='$user_id'";
        $pata = mysqli_query($conn, $sql);
        $tokeo = mysqli_fetch_assoc($pata);

        $total_costs = $tokeo['costs'];

        if($total_costs  <= $kiwango){

            if($pin == $pi_code && $tawi == $branch ){
                // pata bidhaa anazotaka kununua kutoka katika cart yake
                $sql = "SELECT * FROM cart WHERE user_id ='$user_id'";
                $check = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($check)) {
                    $bidhaa = $row['bidhaa_id'];
                    $idadi = $row['added_quantity'];
                    $total = $row['total_cost'];
                    // insert katika table ya malipo
                    $sql ="INSERT INTO `malipo`(`user_id`, `mkoa`, `wilaya`, `branch`, `simu_mpokeaji`, `mahali`, `bidhaa_id`, `idadi`, `total`) VALUES ('$user_id','$mkoa','$wilaya','$branch','$simu','$mahali','$bidhaa','$idadi','$total')";
                    mysqli_query($conn, $sql);

                    // Pata Taarifa za Bidhaa, Hasa idadi iliyopo
                    $available = "SELECT * FROM bidhaa WHERE id ='$bidhaa'";
                    $kipo = mysqli_query($conn, $available);
                    $imepatikana = mysqli_fetch_assoc($kipo);
                    $kilichopo = $imepatikana['quantity'];

                    // Punguza kiasi cha bidhaa kwa kila bidhaa iliyonunuliwa
                    $new_quantity = $kilichopo - $idadi;
                    $bidhaa = "UPDATE `bidhaa` SET `quantity`='$new_quantity' WHERE id='$bidhaa'";
                    mysqli_query($conn, $bidhaa);
                }

                // Punguza kiwango cha pesa kwenye account yake
                $new_balance = $kiwango - $total_costs;
                $pesa = "UPDATE `money_branches` SET `amount`='$new_balance' WHERE phone ='$simu_malipo'";
                mysqli_query($conn, $pesa);

                // Hamisha pesa kwenda Bank katika Account ya Mkulima Janja
                $details = "SELECT * FROM bank WHERE card_number='10001000'";
                $got = mysqli_query($conn, $details);
                $money = mysqli_fetch_assoc($got);
                $kiasi = $money['amount'];

                $kiasi_kipya = $kiasi + $total_costs;
                $bank = "UPDATE `bank` SET `amount`='$kiasi_kipya' WHERE card_number='10001000'";
                mysqli_query($conn, $bank);

                // Ondoa bidhaa alizo lipa kwenye cart
                $sql = "DELETE FROM cart WHERE user_id ='$user_id'";
                mysqli_query($conn, $sql);

            }else{
                echo "Taarifa za Account hii hazipo";
            }

        }else{
            echo "kiwango chako cha pesa hakitoshi...";
        }

    }

?>