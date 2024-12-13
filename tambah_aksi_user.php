<?php
include 'koneksi.php';

$userid = $_POST['userid'];
$password = $_POST['password'];

mysqli_query($koneksi,
"INSERT INTO user
VALUES('$userid', '$password')");

header ("location:user.php");

?>