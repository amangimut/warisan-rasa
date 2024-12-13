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
    <form method="POST" action="ubah_aksi_resep.php">
        <?php
        include 'koneksi.php';
        $idresep = $_GET ['idresep'];
        $data = mysqli_query($koneksi,"SELECT * FROM resep WHERE idresep='$idresep'");

        while($d = mysqli_fetch_array($data)){
            $nama_resep = $d['nama_resep'];
            $tanggal = $d['tanggal'];
            $deskripsi = $d['deskripsi'];
            $bahan = $d['bahan'];
            $cara_membuat = $d['cara_membuat'];
            $userid = $d['userid'];
        }
        ?>
   <input type="hidden" name="aksi" value="ubah_resep">

    <!-- ID Resep yang akan di-update -->
    <input type="hidden" name="idresep" value="<?php echo $row['idresep']; ?>">

    <!-- Input Nama Resep -->
    <label for="nama_resep">Nama Resep:</label>
    <input type="text" id="nama_resep" name="nama_resep" value="<?php echo $row['nama_resep']; ?>" required>

    <!-- Input Tanggal -->
    <label for="tanggal">Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal" value="<?php echo $row['tanggal']; ?>" required>

    <!-- Input Deskripsi -->
    <label for="deskripsi">Deskripsi:</label>
    <textarea id="deskripsi" name="deskripsi" required><?php echo $row['deskripsi']; ?></textarea>

    <!-- Input Bahan -->
    <label for="bahan">Bahan:</label>
    <textarea id="bahan" name="bahan" required><?php echo $row['bahan']; ?></textarea>

    <!-- Input Cara Membuat -->
    <label for="cara_membuat">Cara Membuat:</label>
    <textarea id="cara_membuat" name="cara_membuat" required><?php echo $row['cara_membuat']; ?></textarea>

    <!-- User ID -->
    <label for="userid">User ID:</label>
    <input type="number" id="userid" name="userid" value="<?php echo $row['userid']; ?>" required>

    <!-- Submit Button -->
    <button type="submit">Ubah Resep</button>
</form>
</body>
</html>