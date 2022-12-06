<?php 
    session_start();
    session_destroy();
?>
<script>
    alert('Logout berhasil');
    location='../pages/Home_aebil.php';
</script>