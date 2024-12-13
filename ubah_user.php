<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>
<body>
    <a href="user.php">Kembali</a>
    <br>
    <form method="POST" action="ubah_aksi_user.php">
        <?php
        include 'koneksi.php';
        $userid = $_GET ['userid'];
        $data = mysqli_query($koneksi,"SELECT * FROM user WHERE userid='$userid'");

        while($d = mysqli_fetch_array($data)){
            $password = $d['password'];
        }
        ?>
    <input type="hidden" name="action" value="update_user">
    <label>User ID:</label><br>
    <input type="number" name="userid" required readonly><br>
    <label>New Password:</label><br>
    <input type="password" name="password" required><br>
    <button type="submit">Update User</button>
</form>
</body>
</html>