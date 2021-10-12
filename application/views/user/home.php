<!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php  echo base_url() ?>assets/img/slider/slider1.jpg);">
		<h2 class="l-text2 t-center">
			Internet Learning Cafe Luxury
		</h2>
		<p class="m-text13 t-center">
			Nikmati Makanan dan Minuman yang Nikmat
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!-- Data Katagori -->
						<h4 class="m-text14 p-b-7">
							Kategori Menu
                        </h4>
						<ul class="p-b-54">
                            <?php foreach ($katagori as $katagori) : ?>

                                <li class="p-t-4">
                                    <a href="<?php echo base_url('menus/katagori/'.$katagori->kd_katagori)?>" class="s-text13 active1">
                                        <?php echo $katagori->nama ?>
                                    </a>
                                </li>	

                            <?php endforeach; ?>						
                        </ul>    
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

					<!-- Product -->
					<div class="row">
                                
                        <?php
                        //menampilkan Product
                        foreach ($menu as $menu) : ?>

                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

                            <?php
                            // form proses belanjaan
                            echo form_open(base_url('index.php/keranjang/add'));
                            //elemen yang di bawa                            
                            echo form_hidden('id', $menu->kd_menu);
                            echo form_hidden('qty', 1);
                            echo form_hidden('price', $menu->harga);
                            echo form_hidden('name', $menu->nm_menu);
                            echo form_hidden('gambar', $menu->gambar);
                            echo form_hidden('redirect_page', str_replace('index.php','',current_url()));
                            ?>
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src = "<?php echo base_url()?>assets/img/menu/<?php echo $menu->gambar?>" alt="IMG-PRODUCT" height="330" widht="200">

                                        <div class="block2-overlay trans-0-4">

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button type="submit" value="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <span class="block2-name dis-block s-text3 p-b-5">
                                        <?php echo $menu->nm_menu ?>
                                        </span>

                                        <span class="block2-price  p-r-5">
                                           Rp <?php echo number_format($menu->harga,0,',','.'); ?>
                                        </span>
                                    </div>
                                </div>
                            <?php
                            //tutup form
                            echo form_close();                            
                            ?>
                            </div>

                        <?php endforeach;              ?>						
                    </div>
                    <?php echo $pagin; ?>					
				</div>
			</div>
		</div>
	</section>

