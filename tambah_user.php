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
                  Admin
                </h3>
                <div class="card-tools">
                  <a href="tambah_user.php" class="btn btn-primary"> Tambah </a>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              <form action="tambah_aksi_user.php" method="POST">
    
              <div class="form-group">
                    <label for="userid">User ID</label>
                    <input type="text" class="form-control" name="userid" id="userid">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password">
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