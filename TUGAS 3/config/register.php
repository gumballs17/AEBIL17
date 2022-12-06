<?php
    require '../config/connector.php';

    $id = rand();
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['user'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password == $password2){
        $query = mysqli_query($connect, "INSERT INTO user_data (id, nama, username, email, password) 
        VALUES ('$id','$nama', '$username', '$email', '$password')");
    if($query){
        header('location: ../pages/Home_aebil.php');
    }else{
        echo 'password salah';
    }
    
    }
?>