<?php

    // include oage ya connection 
    include "connection.php";

    // block bidhaa hapa
    $id = $_GET['id'];

    // badili status kuwa blocked
    $sql = "SELECT * FROM malipo WHERE id='$id'";
    $check = mysqli_query($conn, $sql);
    $muamala = mysqli_fetch_assoc($check);

    // Chukua variable za msingi  hapa
    $muamala_id = $muamala['id'];
    $total = $muamala['total'];

    $gawio = 0.1 * $total;

    $pesa_muuzaji = $total - $gawio;

    // Pata taarifa za kiasi kilichopo na toa 
    $details = "SELECT * FROM bank WHERE card_number='10001000'";
    $got = mysqli_query($conn, $details);
    $money = mysqli_fetch_assoc($got);
    $kiasi = $money['amount'];

    // Toa kiasi cha pesa kutoka mkulima Janja
    $kiasi_kipya = $kiasi - $pesa_muuzaji;
    $bank = "UPDATE `bank` SET `amount`='$kiasi_kipya' WHERE card_number='10001000'";
    mysqli_query($conn, $bank);

    // Ongeza katika Account ya Muuzaji

    /*
        😲😲😨😨
        Sijajua Pesa inaenda wap....
        Bank Au Wap....
        Au namba ya Simu ....
        Au kuna Account za Mkulima Janja kwa hawa Wauzaji...
        🙄🙄🙄🙄🥵🥵🥵
    */

    // Update status ya muamala
    $malipo = "UPDATE malipo SET `hali`='imethibitishwa' WHERE id='$muamala_id'";
    mysqli_query($conn, $malipo);

    exit(header("Location: ../admin/miamala.php"));

?>