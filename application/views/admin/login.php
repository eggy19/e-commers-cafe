<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Admin</title>
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/icons/logo1.png"/>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-body">
      <h5 class="card-title text-center">Login Administrator</h5><br>

      <?php 
        //nontif error
        echo validation_errors('<div class="alert alert-success">','</div>');
        
        //nontif gagal login
        if ($this->session->flashdata('warning')==TRUE) {
          echo '<div class="alert alert-warning';
          echo 'Salah Goblok';
          echo $this->session->flashdata('warning');
          echo '</div>';
        }

        //nontif lgout
        if ($this->session->flashdata('sukses')==TRUE) {
          echo '<div class="alert alert-success';
          echo $this->session->flashdata('sukses');
          echo '</div>';
        }
      ?>
      
          <form action="<?php echo base_url('index.php/admin/login/proses');?>" method="post"></form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary form-control">Masuk</button>
            <a href="<?php echo base_url('index.php/admin/login/proses');?>">sasasas</a>
          </form>
        </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
