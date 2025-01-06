<?php
// memulai session
session_start();

// koneksi database
include 'koneksi.php';

$userid = $_POST['userid']; 
$password = $_POST['password']; 

$sql = "SELECT * FROM user WHERE userid='$userid' AND password='$password'"; 

$result = $koneksi->query($sql); 

if ($result->num_rows > 0) { 

 $_SESSION['userid'] = $userid; 

 header("Location: index.php"); 

} else { 

 echo "Login gagal. <a href='login.php'>Coba lagi</a>"; 

} 

$koneksi->close(); 
?>