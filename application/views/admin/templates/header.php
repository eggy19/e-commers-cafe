<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> <?php echo $judul ?> </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/bootstrap.css">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/icons/logo1.png"/>
    
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/fancybox/source/jquery.fancybox.css')?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url()?>assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Jquery -->
    <script src="<?php echo base_url('assets/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/fancybox/source/jquery.fancybox.js')?>"></script>
    <script src="<?php echo base_url('assets/fancybox/lib/jquery-1.10.1.min.js')?>"></script>
    
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    
    <a class="navbar-brand mr-1" href="<?php echo base_url('admin/dashboard')?>">Internet Learning Cafe Luxury</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar spasi -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">        
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">      
      <li class="nav-item dropdown no-arrow">      
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span><?php echo $this->session->userdata('nama');  ?></span>          
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <span class="dropdown-item">Status : </span>
          <span class="dropdown-item"><?php echo $this->session->userdata('jabatan');  ?></span> 
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('index.php/admin/login/logout')?>">Logout</a>
        </div>
      </li>
    </ul>
    
  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
    <?php
      if ( $this->session->userdata('jabatan')=="Operator") {
    ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('admin/dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-comments"></i>
            <span>Pesanan</span>
            <span class="badge badge-danger"><?php echo $psnmasuk ?></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('admin')?>/pesanan/masuk">Masuk</a> 
                <a class="dropdown-item" href="<?php echo base_url('admin')?>/pesanan/selesai">Selesai</a>   
                        
          </div>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin')?>/statusmenu">
          <i class="fas fa-hamburger"></i>
            <span>Status Menu</span></a>
        </li>

    <?php
      }else if ( $this->session->userdata('jabatan')=="Supervisor"){
    ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url()?>admin/dashboard">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>admin/pegawai">
            <i class="far fa-address-card"></i>
              <!-- menu SH -->
              <span>Data Pegawai </span></a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>admin/pc">
            <i class="fas fa-desktop"></i>
              <!-- menu SH -->
              <span>Data PC </span></a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>admin/katagori">
            <i class="fas fa-book-open"></i>
              <!-- menu SH -->
              <span>Data Katagori </span></a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>admin/menu">
            <i class="fas fa-concierge-bell"></i>
              <!-- menu SH -->
              <span>Data Menu </span></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-comments"></i>
            <span>Pesanan</span>
            <span class="badge badge-danger"><?php echo $psnmasuk ?></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('admin')?>/pesanan/masuk">Masuk</a> 
                <a class="dropdown-item" href="<?php echo base_url('admin')?>/pesanan/selesai">Selesai</a>   
                        
          </div>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin')?>/statusmenu">
          <i class="fas fa-hamburger"></i>
            <span>Status Menu</span></a>
        </li>  
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>admin/laporan">
            <i class="fas fa-chart-pie"></i>
              <span>Laporan</span></a>
          </li>

    <?php  } ?>    
      
    </ul>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    $(document).ready(function(){
      setInterval(function() => {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pesanan/gettot')?>",
          data: "json",
          dataType: {},
            success: function (data) {
              alert(data.tot);
            }
        });
      }, 20000);        
    });
  </script>
    