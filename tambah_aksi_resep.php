<?php
include 'koneksi.php';

$idresep = $_POST['idresep'];
$nama_resep = $_POST['nama_resep'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$bahan = $_POST['bahan'];
$cara_membuat = $_POST['cara_membuat'];
$userid = $_POST['userid'];
$foto = $_POST['foto'];

mysqli_query($koneksi,
"INSERT INTO resep
VALUES('$idresep', '$nama_resep','$tanggal', '$deskripsi', '$bahan', '$cara_membuat', '$userid', '$foto')");

header ("location:resep.php");

?>