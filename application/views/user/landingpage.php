

<div class="container1-page">
	<!-- Slide1 -->
	<section class="slide1 rs1-slick1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url()?>assets/img/slider/landing1.jpg);">
					<div class="wrap-content-slide1 size24 flex-col-c-m p-l-15 p-r-15 p-t-120 p-b-170">
						<h2 class="caption1-slide1 xl-text3 t-center bo15 p-b-3 animated visible-false m-b-25" data-appear="fadeInUp">
							Welcome
						</h2>

						<span class="caption2-slide1 m-text27 t-center animated visible-false m-b-30" data-appear="fadeInDown">
							Internet Learning Cafe Luxury
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="<?php echo base_url('login')?>" class="flex-c-m size2 bo-rad-23 s-text1 bgblack hov1 trans-0-4">
								- P e s a n -
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url()?>assets/img/slider/landing2.jpg);">
					<div class="wrap-content-slide1 size24 flex-col-c-m p-l-15 p-r-15 p-t-120 p-b-170">
						<h2 class="caption1-slide1 xl-text3 t-center bo15 p-b-3 animated visible-false m-b-25" data-appear="rotateInDownLeft">
							Menu Nikmat
						</h2>

						<span class="caption2-slide1 m-text27 t-center animated visible-false m-b-30" data-appear="rotateInUpRight">
							Nikmati setiap kelezatanya
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="<?php echo base_url('login')?>" class="flex-c-m size2 bo-rad-23 s-text1 bgblack hov1 trans-0-4">
							- P e s a n -
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url()?>assets/img/slider/landing3.jpg);">
					<div class="wrap-content-slide1 size24 flex-col-c-m p-l-15 p-r-15 p-t-120 p-b-170">
						<h2 class="caption1-slide1 xl-text3 t-center bo15 p-b-3 animated visible-false m-b-25" data-appear="rollIn">
							Ughh Makyuszz
						</h2>

						<span class="caption2-slide1 m-text27 t-center animated visible-false m-b-30" data-appear="lightSpeedIn">
							NNNNNNTaaapssszzz
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="<?php echo base_url('login')?>" class="flex-c-m size2 bo-rad-23 s-text1 bgblack hov1 trans-0-4">
							- P e s a n -
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url()?>assets/user/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="<?php echo base_url()?>assets/user/js/map-custom.js"></script>
	<script src="<?php echo base_url()?>assets/user/js/main.js"></script>

</body>
</html>
