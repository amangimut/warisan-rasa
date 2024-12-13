<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
<a href="tambah_user.php">Tambah</a>
    <br>
    <table cellspacing="0" border="1" align="center">
        <tr>
            <td>No.</td>
            <td>user ID</td>
            <td>Password</td>
           
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM user");
            while($d = mysqli_fetch_array($data)){
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['userid']; ?></td>
            <td><?php echo $d['password']; ?></td>
            <td>
                <a href="ubah_user.php?userid=<?= $d['userid'];?>">Ubah</a>

                <a href = "hapus_user.php?userid=<?= $d['userid'];?>"
                onclick="return confirm('Anda Yakin!')">hapus</a>
        </tr>


        <?php } ?>
</form>
</body>
</html>