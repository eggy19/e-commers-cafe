<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $judul?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			background-image:url(http://localhost/project/ILC_LUXURY/assets/img/slider/bg.jpg);
		}
	</style>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/login')?>/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login')?>/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div style="background-image:url('http://localhost/project/ILC_LUXURY/assets/img/slider/bg.jpg')">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

			<?php 				
				//nontif gagal login
				if ($this->session->flashdata('warning')
                    ) {
                        echo    '<div class="alert alert-danger">';
                        echo    $this->session->flashdata('warning');
                        echo    '</div>';
                    }

				//nontif lgout
				if ($this->session->flashdata('sukses')==TRUE) {
				echo '<div class="alert alert-success';
				echo $this->session->flashdata('sukses');
				echo '</div>';
				}
			?>

				<form class="login100-form validate-form" action="<?php echo base_url('index.php/login/proses')?>" method="post" >
					<span class="login100-form-title p-b-26">
						Login Pemesanan
					</span>
					<span class="login100-form-title p-b-48">
						<img src="<?php echo base_url()?>assets/img/icons/luxury.png" alt="IMG-LOGO" widht="200" height="40">
					</span>

					<div class="wrap-input100 validate-input" data-validate="Masukan Usrname dgn benar">
						<input class="input100" type="text" name="no_user" placeholder="Masukan Nomor Komputer Anda" >
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="login">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login')?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login')?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login')?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('assets/login')?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login')?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login')?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url('assets/login')?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login')?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login')?>/js/main.js"></script>
</div>
</body>
</html>