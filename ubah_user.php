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
              <li class="breadcrumb-item active">User</li>
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
                  User
                </h3>
                <div class="card-tools">
                  <a href="tambah_user.php" class="btn btn-primary"> Tambah </a>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="ubah_aksi_user.php">
                <?php
                include 'koneksi.php';
                $userid = $_GET ['userid'];
                $data = mysqli_query($koneksi,"SELECT * FROM user WHERE userid='$userid'");

                while($d = mysqli_fetch_array($data)){
                    $password = $d['password'];
                }
                ?>
                <input type="hidden" name="userid" value="<?php echo $row['userid']; ?>">
    
              <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password"
                    value="<?php echo $row['password']; ?>" required>
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