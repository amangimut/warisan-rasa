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
                  <!-- <a href="tambah_resep.php" class="btn btn-primary"> Tambah </a> -->
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              <form action="tambah_aksi_resep.php" method="POST" enctype="multipart/form-data">
    
              <div class="form-group">
                    <label for="nama_resep">Nama Resep</label>
                    <input type="text" class="form-control" name="nama_resep" id="nama_resep">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="bahan">Bahan</label>
                    <textarea class="form-control" name="bahan" id="bahan"></textarea>
                </div>
                <div class="form-group">
                    <label for="cara_membuat">Cara Membuat</label>
                    <textarea class="form-control" name="cara_membuat" id="cara_membuat"></textarea>
                </div>
                <div class="form-group">
                    <label for="userid">User ID</label>
                    <input type="text" class="form-control" name="userid" id="userid" value="<?= $_SESSION['userid']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>

              </div><!-- /.card-body -->
              <div class="card-footer">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i> Batal</button>  
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
                </form>
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