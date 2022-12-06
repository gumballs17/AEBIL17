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
        $pesan = "Login berhasil, selamat datan $username";
        header('location: ../pages/User_aebil.php');
    }else{
        $pesan = "Login gagal, username atau password anda salah!";
    }
?>
<script>
    alert('<?php echo $pesan;?>');
    location='../pages/Login_aebil.php';
</script>