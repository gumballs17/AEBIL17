<?php
    require '../config/connector.php';

    $id_beli = $_GET['id_beli'];
    $status = "Succes";

    $sql = "UPDATE transaksi SET status ='$status' WHERE id_beli = '$id_beli'";
    
    if (mysqli_query($connect, $sql)) {
        $id_get = $id_beli;
        $query = mysqli_query($connect, "SELECT * FROM transaksi where id_beli = '$id_get'");
        while($data = mysqli_fetch_array($query)){
            $id = $data['id_desain'];
            header("location: ../config/buy.php?id_desain=$id");
        }
    }
    
        
?>