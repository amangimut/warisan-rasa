<?php
session_start();

include 'koneksi.php';

$nama_resep = $_POST['nama_resep'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$bahan = $_POST['bahan'];
$cara_membuat = $_POST['cara_membuat'];
$userid = $_POST['userid'];

$ekstensi_diperbolehkan    = array('jpg','jpeg','png');
$nama    = $_FILES['foto']['name'];
$x        = explode('.', $nama);
$ekstensi    = strtolower(end($x));
$ukuran        = $_FILES['foto']['size'];
$file_tmp    = $_FILES['foto']['tmp_name']; 

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){ 
        move_uploaded_file($file_tmp, 'foto/'.$nama);
        mysqli_query($koneksi,"INSERT INTO resep(nama_resep,tanggal,deskripsi,bahan,cara_membuat,userid,foto) VALUES('$nama_resep','$tanggal', '$deskripsi', '$bahan', '$cara_membuat', $userid, '$nama')");
    }
    else{
        echo 'UKURAN FILE TERLALU BESAR!';
    }
}
else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!';
}

// echo $nama_resep.$tanggal.$deskripsi.$bahan.$cara_membuat.$userid.$nama;

header ("location:resep.php");

?>