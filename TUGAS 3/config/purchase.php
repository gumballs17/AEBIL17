<?php
    require '../config/connector.php';

    $id_beli = rand();
    $id_desain = $_POST['id_desain'];
    $nama = $_POST['nama'];
    $tgl_beli = $_POST['tgl_beli'];
    $status = "Processing";

    $sql = "INSERT INTO transaksi (id_beli, id_desain, nama, tgl_beli, status) 
    VALUES ('$id_beli','$id_desain','$nama','$tgl_beli','$status')";
        
    if (mysqli_query($connect, $sql)) {
        header("location: ../pages/User_aebil.php");
        } else {
            echo "Gagal";
        }
?>
Repellendus nesciunt at suscipit nulla dicta minus blanditiis. Facilis, dolorum amet?