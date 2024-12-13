<?php
    include 'koneksi.php';

    $idresep = $_GET['idresep'];

    mysqli_query($koneksi,
    "DELETE FROM resep WHERE idresep='$idresep'");

    header("location:resep.php");
?>