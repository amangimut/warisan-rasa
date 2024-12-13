<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep</title>
</head>
<body>
 <a href="resep.php">Kembali</a>   
<form method="POST" action="">
    <input type="hidden" name="action" value="create_resep">
    <label>Nama Resep:</label><br>
    <input type="text" name="nama_resep" required><br>
    <label>Tanggal:</label><br>
    <input type="date" name="tanggal" required><br>
    <label>Deskripsi:</label><br>
    <textarea name="deskripsi" required></textarea><br>
    <label>Bahan:</label><br>
    <textarea name="bahan" required></textarea><br>
    <label>Cara Membuat:</label><br>
    <textarea name="cara_membuat" required></textarea><br>
    <label>User ID:</label><br>
    <input type="number" name="userid" required><br>
    <button type="submit">Create Resep</button>
</form>
</body>
</html>