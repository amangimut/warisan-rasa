<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
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
                <input type="hidden" name="idresep" value="<?php echo $idresep; ?>">
    
              <div class="form-group">
                    <label for="nama_resep">Nama Resep</label>
                    <input type="text" class="form-control" name="nama_resep" id="nama_resep"
                    value="<?php echo $nama_resep; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal"
                    value="<?php echo $tanggal; ?>" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" required><?php echo $deskripsi; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="bahan">Bahan</label>
                    <textarea class="form-control" name="bahan" id="bahan" required><?php echo $bahan; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="cara_membuat">Cara Membuat</label>
                    <textarea class="form-control" name="cara_membuat" id="cara_membuat" required><?php echo $cara_membuat; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="userid">User ID</label>
                    <input type="text" class="form-control" name="userid" id="userid" value="<?php echo $userid; ?>" required>
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