<?php

    // Husisha database Connection hapa
    include "connection.php";

    // Button ya kujisajili ikibonyezwa
    if(isset($_POST['seller'])){

        // pata data zinazotoka katika form ya register hapa
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $tin = mysqli_real_escape_string($conn, $_POST['tin']);
        $jina = mysqli_real_escape_string($conn, $_POST['jina']);
        $pwd1 = mysqli_real_escape_string($conn, $_POST['pwd1']);
        $pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
        $role = mysqli_real_escape_string($conn, $_POST['role']);
        $simu = mysqli_real_escape_string($conn, $_POST['simu']);

        if($pwd1 == $pwd2){

            // Kagua katika Table ya Brellah hapa
            $sql = "SELECT * FROM brellah WHERE tin_number ='$tin'";
            $check = mysqli_query($conn, $sql);

           if(mysqli_num_rows($check) == 1){
                // kagua kama kuna user ana username na password kama ya Jamaa
                $query = "SELECT * FROM users WHERE username ='$username' AND password='$pwd1'";
                $check = mysqli_query($conn, $query);
                $data = mysqli_fetch_assoc($check);

                if(mysqli_num_rows($check) != 1){
                    
                    $sql = "INSERT INTO `users`(`jina_kamili`, `username`, `password`, 
                    `simu`, `tin_number`, `role`, `status`) VALUES ('$jina','$username','$pwd1','$simu','$tin','$role','active')";
                    mysqli_query($conn, $sql);
                }else{
                    echo "Kuna mtumiaji ana Details kama zako...";
                }
                
           }else{
                echo "TIN Number yako hatambuliki na BRELLAH..";
           }
        }else{
            echo "Password ulizoingiza hazifanani";
        }

    }





?>