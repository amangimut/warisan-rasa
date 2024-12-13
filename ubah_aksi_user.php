<?php
    include 'koneksi.php';

    $userid = $_POST['userid'];
    $password = $_POST['password'];

    mysqli_query($koneksi,
    "UPDATE user SET
    password='$password'
    WHERE userid='$userid'");

    header("location:user.php");
?>