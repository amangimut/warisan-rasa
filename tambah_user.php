<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <a href="user.php">Kembali</a>
    <br>
    <form action="tambah_aksi_user.php" method="POST">
    <table>
        <tr>
            <td>User ID</td>
            <td>
                <input type="text" name="userid">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="password">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="reset" value="Batal">
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </form>
    
</body>
</html>