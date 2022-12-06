<?php
    require '../config/connector.php';

    $id_desain = $_GET['id_desain'];
    $nama_desain = $_POST['nama_desain'];
    $harga = $_POST['harga'];
    $tgl_upload = $_POST['tgl_upload'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE desain_art SET nama_desain = '$nama_desain', harga = '$harga', tgl_upload = '$tgl_upload', deskripsi = '$deskripsi' 
    WHERE id_desain = '$id_desain'";
        
    if (mysqli_query($connect, $sql)) {
        header("location: ../pages/Creators_aebil.php");
        } else {
            header("location: ../pages/Creators_aebil.php");
        }
?>
