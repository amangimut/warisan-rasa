<?php
    include 'koneksi.php';

    $userid = $_GET['userid'];

    mysqli_query($koneksi,
    "DELETE FROM user WHERE userid='$userid'");

    header("location:user.php");
?>