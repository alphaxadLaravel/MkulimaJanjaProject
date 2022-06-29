<?php

    // anzisha session kujua ni user gan anafuta bidhaa
    session_start();

    // Husisha Connection
    include "connection.php";

    // Pata id ya bidhaa unayotaka kuifuta hapa

    $bidhaa_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    $sql = "DELETE FROM cart WHERE bidhaa_id = '$bidhaa_id' AND user_id ='$user_id'";
    $check = mysqli_query($conn, $sql);

    echo " 
        <script> alert('Product Deleted successfully!!!'); window.location = 'Add.php'; </script>
    ";
    exit(header("Location: ../dashboard/cart.php"));

?>