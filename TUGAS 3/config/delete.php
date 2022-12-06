<?php
    require '../config/connector.php';

    $id_desain = $_GET['id_desain'];

    mysqli_query($connect, "DELETE FROM desain_art WHERE id_desain = $id_desain");
    header("location: ../pages/Order_aebil.php");
?>