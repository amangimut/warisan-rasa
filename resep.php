<!-- pengecekan session -->
<?php 

session_start(); 

if (!isset($_SESSION['userid'])) { 

 header("Location: login.php"); 

} 

?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Resep</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Resep</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  Resep
                </h3>
                <div class="card-tools">
                  <a href="tambah_resep.php" class="btn btn-primary"> Tambah </a>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered">
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama Resep</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM resep");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_resep']; ?></td>
                        <td class="text-center"><?php echo date('d-m-Y',strtotime($d['tanggal'])); ?></td>
                        <td class="text-center">
                          <?php 
                          if($d['foto']){ ?>
                            <img src="foto/<?php echo $d['foto'] ?>" width="auto" height="50">
                          <?php } ?>
                        </td>
                        <td class="text-center">
                            <a href="ubah_resep.php?idresep=<?= $d['idresep']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>

                            <a href="hapus_resep.php?idresep=<?= $d['idresep']; ?>" class="btn btn-danger"
                            onclick="return confirm('Anda Yakin?')"><i class="fa fa-trash"> Hapus</i></a>
                        </td>
                    </tr>

                    <?php } ?>
                </table>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include 'footer.php'; ?>
