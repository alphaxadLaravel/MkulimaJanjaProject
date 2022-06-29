<?php 

    // Anzisha session hapa
    session_start();

    // include oage ya connection 
    include "connection.php";

    // Akibonyeza Button ya Upload Bidhaaa
    if(isset($_POST['ongeza'])){
        // pokea bidhaa hapa kutokakatika form ya upload
        $bidhaa = mysqli_real_escape_string($conn, $_POST['bidhaa']);
        $bei = mysqli_real_escape_string($conn, $_POST['bei']);
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

        $measure1 = mysqli_real_escape_string($conn, $_POST['measure1']);
        $measure2 = mysqli_real_escape_string($conn, $_POST['measure2']);

        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $user_id = $_SESSION['id'];
        $category = $_SESSION['role'];

        $bei ="$bei";

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
                    
                    $fileDestination = '../upload/'.time().$fileName;
                    move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);

                    $sql = "INSERT INTO `bidhaa`(`user_id`, `jina_bidhaa`, `bei`, `kipimo_bei`, `maelezo`, `quantity`, `kipimo_quantity`, `category`, `picha`) 
                    VALUES ('$user_id','$bidhaa','$bei','$measure1','$description','$quantity','$measure2','$category','$fileDestination')";
                    mysqli_query($conn, $sql);
            
                    exit(header("Location: ongeza_bidhaa.php"));

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





?>