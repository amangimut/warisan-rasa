<?php
    include 'koneksi.php';

    $idresep = $_POST['idresep'];
    $nama_resep = $_POST['nama_resep'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $bahan = $_POST['bahan'];
    $cara_membuat = $_POST['cara_membuat'];
    $userid = $_POST['userid'];

    mysqli_query($koneksi,
    "UPDATE resep SET
    nama_resep='$nama_resep',
    tanggal='$tanggal',
    deskripsi='$deskripsi',
    bahan='$bahan',
    cara_membuat='$cara_membuat',
    userid='$userid'
    WHERE idresep='$idresep'");

    header("location:resep.php");
?>