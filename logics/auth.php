<?php

    // Anzisha Session hapa ku track user anafanya nini
    session_start();

    // Husisha database Connection hapa
    include "connection.php";

    // Button ya kujisajili kama Muuzaji ikibonyezwa
    if(isset($_POST['seller'])){

        // pokea data zinazotoka katika form ya register hapa
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $tin = mysqli_real_escape_string($conn, $_POST['tin']);
        $jina = mysqli_real_escape_string($conn, $_POST['jina']);
        $pwd1 = mysqli_real_escape_string($conn, $_POST['pwd1']);
        $pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
        $role = mysqli_real_escape_string($conn, $_POST['role']);
        $simu = mysqli_real_escape_string($conn, $_POST['simu']);

        if($pwd1 == $pwd2){

            // Kagua katika Table ya Brellah hapa
            $sql = "SELECT * FROM brellah WHERE tin_number ='$tin' AND jina_kamili='$jina'";
            $check = mysqli_query($conn, $sql);

           if(mysqli_num_rows($check) == 1){
                // kagua kama kuna user ana username na password kama ya Jamaa
                $query = "SELECT * FROM users WHERE username ='$username'";
                $check = mysqli_query($conn, $query);
                $data = mysqli_fetch_assoc($check);

                if(mysqli_num_rows($check) >= 1){

                    echo "Jina limekwisha tumika badili..";
                    
                }else{
                    // Msajili katika Database table ya Users kama kila kitu kiko sawa
                    $sql = "INSERT INTO `users`(`jina_kamili`, `username`, `password`, 
                    `simu`, `tin_number`, `role`, `status`) VALUES ('$jina','$username','$pwd1','$simu','$tin','$role','active')";
                    mysqli_query($conn, $sql);

                    exit(header("Location: ../outside/login.php"));
                }

           }else{
                echo "TIN Number au jina havitambuliki na BRELLAH..";
           }
        }else{
            echo "Password ulizoingiza hazifanani";
        }

    }

    // Button ya kujisajili kama Member ikibonyezwa
    if(isset($_POST['member'])){

        // Pokea data zinazotoka katika form
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $jina = mysqli_real_escape_string($conn, $_POST['jina']);
        $pwd1 = mysqli_real_escape_string($conn, $_POST['pwd1']);
        $pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
        $simu = mysqli_real_escape_string($conn, $_POST['simu']);

        // compare password kama zinafanana
        if($pwd1 == $pwd2){

            // Kagua kama Mtumiaji mwingne yupo ana details kam hzo
            $query = "SELECT * FROM users WHERE username ='$username'";
            $check = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($check);

            if(mysqli_num_rows($check) >= 1){
                echo "Kuna mtumiaji ana Details kama zako...";
               

            }else{
                // Msajili katika database table ya users kama kila kitu kiko sawa
                    $sql = "INSERT INTO `users`(`jina_kamili`, `username`, `password`, 
                `simu`, `status`) VALUES ('$jina','$username','$pwd1','$simu','active')";
                mysqli_query($conn, $sql);

                exit(header("Location: ../outside/login.php"));
            }

        }else{
            echo "Password ulizoingiza hazifanani";
        }

        

    }

    // Button ya Login ikibonyezwa
    if(isset($_POST['login'])){
        
        // Pokea data kutoka katika login form
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Kagua kama data hzo zipo katika database yako
        $query = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
        $check = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($check);

        if(mysqli_num_rows($check) == 1){
          
            // kama yupo mruhusu apite katika dashboard yake ila kamata session zake
            $_SESSION['username'] = $data['username'];
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['role'] = $data['role'];

            if($data['role'] == "admin"){

                exit(header("Location: ../admin/admin_dashboard.php"));

            }else{
                exit(header("Location: ../dashboard/home.php"));

            }


        }else{
            echo "Tafadhari hakiki taarifa zako...";
        }


    }





?>