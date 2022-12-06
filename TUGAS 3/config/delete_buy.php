<?php
    require '../config/connector.php';

    $id_beli = $_GET['id_beli'];;
    $status = "Failed";

    $sql = "UPDATE transaksi SET status ='$status' WHERE id_beli = '$id_beli'";
    
    if (mysqli_query($connect, $sql)) {
        header("location: ../pages/Order_aebil.php");
        } else {
            header("location: ../pages/Order_aebil.php");
        }
    
        
?>