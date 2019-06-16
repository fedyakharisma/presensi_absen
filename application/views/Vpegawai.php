 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Absen-i</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
       
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('CrudKategori'); ?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Kategori</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('CrudPegawai'); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Pegawai</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Qr'); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Presensi</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
            <div><br></div>
            <div>
              <div class="col-md-3">
                <a href="<?php echo base_url('CrudPegawai/add'); ?>" class="btn-primary">Tambah</a> 
              </div>
            </div>
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No. </th>
                    <th>Id Pegawai</th>
                    <th>Nama Kategori</th>
                    <th>Email pegawai</th>
                    <th>Password</th>
                    <th>Gaji</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No. </th>
                    <th>Id Pegawai</th>
                    <th>Nama Kategori</th>
                    <th>Email pegawai</th>
                    <th>Password</th>
                    <th>Gaji</th>
                    <th>Opsi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  $no = 1; //untuk menampilkan no
                  foreach($list_pegawai as $row){
                    echo "
                  <tr>
                    <td>$no</td>
                    <td>$row[id_pegawai]</td>
                    <td>$row[nama_kategori]</td>
                    <td>$row[email]</td>
                    <td>$row[password]</td>
                    <td>$row[gaji_pegawai]</td>
                    <td>
                      <a href='CrudPegawai/edit/$row[id_pegawai]' class='btn-warning'>Edit</a>
                      <a href='CrudPegawai/delete/$row[id_pegawai]' class='btn-danger'>Delete</a>
                    </td>
                  </tr>
                  ";
                    $no++;
                  }
                  ?>
        
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

</body>

</html>
