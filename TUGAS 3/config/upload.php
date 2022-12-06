<?php
    require '../config/connector.php';

    $id_desain = rand();
    $nama_desain = $_POST['nama_desain'];
    $harga = $_POST['harga'];
    $tgl_upload = $_POST['tgl_upload'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $target = "../image/";

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target . $foto)) {
        $sql = "INSERT INTO desain_art (id_desain, nama_desain, harga, tgl_upload, deskripsi, foto) 
        VALUES ('$id_desain','$nama_desain', '$harga', '$tgl_upload', '$deskripsi', '$foto')";
        
        if (mysqli_query($connect, $sql)) {
            header("location: ../pages/Creators_aebil.php");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Gagal";
        }
?>