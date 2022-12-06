<?php
    session_start();
    require '../config/connector.php';

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($connect, "SELECT * from user_data where email = '$email' && password = '$password'"); #nama database
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $data=mysqli_fetch_assoc($query);
        setcookie('email', $email, time()+900, '/');
        setcookie('nama', $data['nama'], time()+900, '/');
        setcookie('username', $data['username'], time()+900, '/');

        $_SESSION['iduser']   = $usr['iduser'];
        $_SESSION['username'] = $usr['username'];
        $_SESSION['nama']     = $usr['nama'];
        $_SESSION['login']    = 1;
        $pesan = "Login berhasil, selamat datang $username";
        header('location: ../pages/Creators_aebil.php');
    }else{
        $pesan = "Login gagal, username atau password anda salah!";
    }
?>
<script>
    alert('<?php echo $pesan;?>');
    location='../pages/Login_Creator_aebil.php';
</script>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione voluptatum rem, vero, quo rerum quam fugiat eius quibusdam assumenda optio nisi numquam, eum ipsam! Labore saepe sapiente vitae dolorem.