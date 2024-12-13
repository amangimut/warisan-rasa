<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep</title>
</head>
<body>
    <a href="resep.php">Kembali</a>
    <br>
    <form action="tambah_aksi_resep.php" method="POST">
    <table>
        <tr>
            <td>ID Resep</td>
            <td>
                <input type="text" name="idresep">
            </td>
        </tr>
        <tr>
            <td>Nama Resep</td>
            <td>
                <input type="text" name="nama_resep">
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>
                <input type="date" name="tanggal">
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>
                <input type="text" name="deskripsi">
            </td>
        </tr>
        <tr>
            <td>Bahan</td>
            <td>
                <input type="text" name="bahan">
            </td>
        </tr>
        <tr>
            <td>Cara Membuat</td>
            <td>
                <input type="text" name="cara_membuat">
            </td>
        </tr>
        <tr>
            <td>User ID</td>
            <td>
                <input type="text" name="userid">
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