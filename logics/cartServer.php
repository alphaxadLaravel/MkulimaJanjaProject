<?php

    // Hakikisha session ipo On kujua n nani anatumia Cart
    session_start();

    // Husisha connection ya Database kwanza
    include "connection.php";

    if(isset($_POST['add_cart'])){
        
        // pokea details kutoka katika add to cart button
        $bidhaa = $_SESSION['bidhaa'];
        $user_id = $_SESSION['user_id'];
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

        // kagua kama bidhaa hyo ipokatika cart..kama ipo update na sio kuweka tena
        $sql_check = "SELECT * FROM cart WHERE user_id ='$user_id' AND bidhaa_id='$bidhaa'";
        $check = mysqli_query($conn, $sql_check);

        $data = mysqli_fetch_assoc($check);


        if(mysqli_num_rows($check) == 1){

            $new_quantity = $data['added_quantity'] + $quantity;
            $sql_check = "UPDATE `cart` SET `added_quantity`='$new_quantity' WHERE bidhaa_id='$bidhaa' AND user_id='$user_id'";
            $check = mysqli_query($conn, $sql_check);

            echo "updated Quantity...";
            exit(header("Location: ../dashboard/cart.php"));


        }else{
            $sql = "INSERT INTO `cart`(`user_id`, `bidhaa_id`, `added_quantity`) VALUES ('$user_id','$bidhaa','$quantity')";
            mysqli_query($conn, $sql);
            echo "added successfully...";
            exit(header("Location: ../dashboard/cart.php"));

        }

      


    }

?>