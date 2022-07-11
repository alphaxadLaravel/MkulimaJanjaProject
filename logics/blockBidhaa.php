<?php

    // include oage ya connection 
    include "connection.php";

    // block bidhaa hapa
    $id = $_GET['id'];

    // badili status kuwa blocked
    $sql = "UPDATE `bidhaa` SET `status`='blocked' WHERE id='$id'";
    $check = mysqli_query($conn, $sql);

    echo "updated...".$id;

    exit(header("Location: ../admin/bidhaa.php"));


?>
