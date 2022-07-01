<?php

    // anzisah Session kujua ni nani ana cheza na profile
    session_start();

    // include connection hapa
    include "connection.php";

    // Tambua user anatumia system kwa sasa
    $user_id = $_SESSION['user_id'];


    // BAdili picha hapa
    if(isset($_POST['badili'])){

     
        $fileName = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $filesError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.',$_FILES['file']['name']);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','webp');
        if(in_array($fileActualExt,$allowed)){
            if($_FILES['file']['error'] ===  0){
                if($_FILES['file']['size'] < 100000000){            
                    
                    $fileDestination = '../profiles/'.time().$fileName;
                    move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);

                    $sql = "UPDATE `users` SET `profiles`='$fileDestination' WHERE id='$user_id'";
                    mysqli_query($conn, $sql);
            
                    exit(header("Location: ../dashboard/profile.php"));

                }else{
                    echo " <script> alert('The image uploaded is too large'); </script> ";
                }
            }else{
                echo " <script> alert('You have an error on uploading the image'); </script> ";
            }
        }else{
            echo " <script> alert('Check The image Field Please!!'); </script> ";
        }


     }


    //  BAdili password Hapa
    if(isset($_POST['neno'])){
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

        // Kagua kama Password ya kwanza ndio hyo..
        $query = "SELECT * FROM users WHERE id='$user_id' AND password='$password'";
        $check = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($check);

        if(mysqli_num_rows($check) == 1){
            $sql = "UPDATE `users` SET `password`='$password2' WHERE id='$user_id'";
            mysqli_query($conn, $sql);
    
            exit(header("Location: ../dashboard/profile.php"));
        }else{
            echo "Password ya zamani sio sahihi...";
            // exit(header("Location: ../dashboard/profile.php"));

        }

    }

    // badili namba ya simu hapa
    if(isset($_POST['simu'])){

        $simu = mysqli_real_escape_string($conn, $_POST['simu']);

        if(strlen($simu) < 10 || strlen($simu) > 10 ){
            echo "Tarakimu kumi zinatakiwa....";
        }else{
            $sql = "UPDATE `users` SET `simu`='$simu' WHERE id='$user_id'";
            mysqli_query($conn, $sql);
    
            exit(header("Location: ../dashboard/profile.php"));
        }

        

    }

?>