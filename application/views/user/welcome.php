	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url('assets/img/slider/slider1.jpg')?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Internet Learning Cafe Luxury
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							super hotspot cafe
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="<?php echo base_url('menus')?>" class="flex-c-m size2 bo-rad-23 s-text1 bgblack hov1 trans-0-4">
								Pesan Sekarang
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(<?php echo base_url('assets/img/slider/slider2.jpg')?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Internet Learning Cafe Luxury
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        super hotspot cafe
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="<?php echo base_url('menus')?>" class="flex-c-m size2 bo-rad-23 s-text1 bgblack hov1 trans-0-4">
                                Pesan Sekarang
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(<?php echo base_url('assets/img/slider/slider3.jpg')?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
                        Internet Learning Cafe Luxury
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                        super hotspot cafe
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="<?php echo base_url('menus')?>" class="flex-c-m size2 bo-rad-23 s-text1 bgblack hov1 trans-0-4">
                                Pesan Sekarang
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					siap melayani anda
				</h3>
			</div>			
		</div>
	</section>

	<section class="parallax0 parallax100" style="background-image: url(<?php echo base_url('assets/img/slider/slider44.jpg')?>);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					MOC
				</span>

				<h3 class="l-text1 fs-35-sm">
					Merapi Online Corp
				</h3>
			</div>
		</div>
	</section>

	<!-- Instagram -->
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				Random Menus
			</h3>
		</div>

		<div class="flex-w">
			<!-- Block4 -->

			<?php foreach ($menu as $menu ) : ?>
				<div class="block4 wrap-pic-w">
					<img src="<?php echo base_url('assets/img/menu/'.$menu->gambar)?>" alt="IMG-INSTAGRAM" height="400">

					<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
						<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
							<span class="s-text4">
								<?php echo $menu->nm_menu?>
							</span>
						</div>
					</a>
				</div>	
			<?php endforeach ?>
			
		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Luxury Cafe
				</h4>

				<a href="#" class="s-text11 t-center">
					Jl. Kaliurang
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Merapi Online Cafe
				</h4>

				<span class="s-text11 t-center">
					Jl. Jogja-Solo, depan Ambarukmo mall
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Net City Cafe
				</h4>

				<span class="s-text11 t-center">
					Jl. Timoho
				</span>
			</div>			
		</div>

		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Dewa Net Cafe
				</h4>

				<a href="#" class="s-text11 t-center">
					Jl. Monjali
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Satria Net Cafe
				</h4>

				<span class="s-text11 t-center">
					Babarsari
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Jago Net Cafe
				</h4>

				<span class="s-text11 t-center">
					Jl. Godean
				</span>
			</div>
			
		</div>
	</section>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="<?php echo base_url('assets/user/')?>images/icons/video-16-9.jpg" alt="IMG"></div>
					<div class="video-mo-01">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/L-zglZwip6Q" frameborder="0" allowfullscreen></iframe>
							
					</div>
				</div>
			</div>
	</div>