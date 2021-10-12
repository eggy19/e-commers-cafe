<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">

				<?php
					if ($this->session->flashdata('sukses'))
					{
						echo '<div class="alert alert-warning">';
						echo $this->session->flashdata('sukses');
						echo '</div>';
					}
				?>
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2" width="20%">MENU</th>
							<th class="column-3">HARGA</th>
							<th class="column-4 p-l-40">Quantity</th>
							<th class="column-4" >SUB TOTAL</th>
							<th class="column-5" >KETERANGAN</th>
						</tr>
						
							

						<?php 					
							$i=1;
							foreach($keranjang as $keranjang) {
								$kd_menu = $keranjang['id'];
								$menu = $this->Menu_model->getMenuById($kd_menu);
								//form update						
								echo form_open(base_url('index.php/keranjang/update'));
								
						?>

						<tr class="table-row">
							<td class="column-1">
								<a href="#">
									<div class="cart-img-product b-rad-4 o-f-hidden" >
											<img src="<?php echo base_url('assets/img/menu/'.$menu->gambar)?>" alt="IMG-PRODUCT">																		
									</div>
								</a>
							</td>
							<input type="hidden" name="id" value="<?php echo $keranjang['rowid']?>">
							<td class="column-2"><?php echo $keranjang['name']?></td>
							<td class="column-3">Rp. <?php echo number_format($keranjang['price'],'0',',','.')?></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button id="btnkurang" class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="qty<?php echo $i++?>" value="<?php echo $keranjang['qty']?>" readonly>

									<button id="btnadd" class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">Rp.
								<?php
										echo number_format($keranjang['subtotal'],'0',',','.');								
								?>
							</td>
							<td class="column-5">
							<div class="btn btn-group">
								<a href="<?php echo base_url('index.php/keranjang/hapus/'.$keranjang['rowid'])?>" class="btn btn-danger">Hapus</a>
							</div>
							</td>
						</tr>

						<?php 
							} //closing foreach						
						?>

					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="<?php echo base_url('menus')?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						tambah
					</a>
				</div>
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<h4 class="m-text25 p-b-24">
						<a href="<?php echo base_url('keranjang/getip')?>">IP COBA</a>					
					</h4>
				</div>
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Update</button>
				</div>
					<?php 
							echo 
							form_close();
					?>
			</div>

				<?php
					$this->load->helper('string');
					$this->load->helper('date');
					$kd_pesanan =  strtoupper(random_string('alnum', 6)).date('dm');
					$tgl	= date('d-m-Y');
					$jam	= date('h:m:s')
				?>
				
				<?php
					
				echo form_open(base_url('index.php/checkout'));
							
				?>


			<!-- Jquery Uang kembalian -->
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/autoNumeric/autoNumeric.js')?>"></script>
			<script>
				$(document).ready(function () {
					// Format mata uang.				

					$('#uang').keyup(function () { 
						var bayar	=	parseInt($('#uang').val());
						var total	=	parseInt($('#total').val());
						var balik	=	parseInt($('#payback').val());
						var kembalian	=	bayar - total;

						if (bayar < total) {
							kembalian = 0;
							$('label').text(kembalian);
						}else{
							$('label').text(kembalian);
						}						
					});
					
				});
			</script>
			<!-- Total -->
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div">
					<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60">
						<h5 class="m-text20 p-b-24">
								Total Belanjaan
						</h5>
					<div class="size10 trans-0-4 m-t-10 m-b-10">
						<h4 class="m-text35 p-b-24">
						Rp	<?php $total_keranjang = number_format($this->cart->total(),'0',',','.');
									echo $total_keranjang;
							?>
						 
						</h4>
							
					</div>
					</div>

					
					<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<!-- Kode Orderan -->
						<span class="s-text18 w-size19 w-full-sm">
							Kode Pesanan
						</span>

						<div class="w-size20 w-full-sm">
							<div class="size13 bo4 m-b-22">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="kd_pesanan"  value="<?php echo $kd_pesanan?>" readonly requared>
								<span class="s-text8 p-b-23">
									Tanggal : <?php echo $tgl.' '.$jam?>
								</span>
							</div>
							<p class="s-text8 p-b-23">
								Masukan jumlah uang tunai anda <br>
								untuk pembayaran transaksi ini.
							</p>							
						</div>
						<br>
					<!-- Masukan Jumlah Uang -->
						<span class="s-text18 w-size19 w-full-sm">
							Jumlah Uang
						</span>

						<div class="w-size20 w-full-sm">							

							<div class="size13 bo4 m-b-22">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="number" id="uang" name="uang"  placeholder="Uang anda sebesar" required>
								
							</div>
						</div>
						<!-- Masukan Nama Anda-->
						<span class="s-text18 w-size19 w-full-sm">
							Nama Anda
						</span>

						<div class="w-size20 w-full-sm">							
							<div class="size13 bo4 m-b-22">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="text" id="nama" name="nama" placeholder="Masukan nama anda" required>
							</div>
						</div>
					</div>					
					

					<!--  -->
					<div class="flex-w flex-sb-m p-t-26 p-b-30">
						<span class="m-text22 w-size19 w-full-sm">
							Total:
						</span>								
						<span class="m-text21 w-size20 w-full-sm">							 
							<h4> Rp.
								<?php 
									echo $total_keranjang;
								?>	
							</h4>
							<input type="hidden" id="total" value="<?php echo $this->cart->total()?>">
						</span>
					</div>

					<div class="flex-w flex-sb p-t-15 p-b-20">
						<span class="m-text22 w-size19 w-full-sm">
							Kembali :
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							Rp. <label id="payback">0</label>
						</span>
					</div>   

					<div class="size15 trans-0-4">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="cek_out">
							Proceed to Checkout
						</button>
					</div>
					<?php form_close(); ?>
				</div>
				
			</div>
			
			
			
		</div>
	</section>