<?php
    require '../config/connector.php';

    $id_desain = $_GET['id_desain'];
    $query = mysqli_query($connect, "SELECT * FROM desain_art where id_desain = '$id_desain'");
    while($data = mysqli_fetch_array($query)){
        $terjual = $data['terjual'];
        $harga = $data['harga'];
        if($terjual != null){
            $terjual += 1;
            $total_harga = $terjual*$harga;
            $sql = "UPDATE desain_art SET terjual = $terjual, total_harga = $total_harga
                    WHERE id_desain = '$id_desain'";
            if (mysqli_query($connect, $sql)) {
                $pesan = "Purchase Done";
                header("location: ../pages/Creators_aebil.php");
                } else {
                $pesan = "Purchase was failed";
                header("location: ../pages/Creators_aebil.php");
                }
        }else{
            $terjual = 1;
            $total_harga = $terjual*$harga;
            $sql = "UPDATE desain_art SET terjual = $terjual, total_harga = $total_harga
                    WHERE id_desain = '$id_desain'";
            if (mysqli_query($connect, $sql)) {
                $pesan = "Purchase Done";
                header("location: ../pages/Creators_aebil.php");
                } else {
                $pesan = "Purchase was failed";
                header("location: ../pages/Creators_aebil.php");
                }
        }
        header('location: ../pages/Creators_aebil.php');
    }
?>