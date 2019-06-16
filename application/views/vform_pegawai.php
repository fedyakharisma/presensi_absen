<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><?=$tipe?>Form Pegawai</div>
      <div class="card-body">
        <form method="post">
          

          <div class="form-group">
            <div class="form-label-group">
              <select class="form-control" id="textidkategori" required="required" name="idkategori">
                   <?php foreach($list_kategori as $row) 
                    echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                    
                   {
                    echo " 
                    
                    <option value='$row[id_kategori]'>
                    $row[nama_kategori]
                  </option>
                    ";
                  }?>
                  </select>
            </div>
          </div>


          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" value="<?=isset($default['email'])? $default['email'] : ""?>" required="required">
              <label for="inputEmail">Email Pegawai</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control"  name="password" value="<?=isset($default['password'])? $default['password'] : ""?>" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>

            <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputGaji" class="form-control" placeholder="Gaji Pegawai" name="gaji" value="<?=isset($default['gaji_pegawai'])? $default['gaji_pegawai'] : ""?>" required="required">
              <label for="inputGaji">Gaji Pegawai</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="tombol_submit" style="height: 50px" ><h4>SIMPAN</h4></button>
        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

