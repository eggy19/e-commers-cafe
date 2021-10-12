<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Data Pesanan Masuk  </li> 
  </ol>
  
<!-- DataTables Example -->
<div class="card-deck">


  <div class="card mb-3">     
      <div class="card-body">
        <div class="btn btn-group"><a href="<?php echo base_url('admin/dashboard')?>" class="btn btn-warning">Kembali</a></div>
        <div class="table-responsive">

        <?php 
         echo form_open(base_url('admin/pesanan/proses'), ' target="_blank"'); ?>
          <table >
            <?php foreach ($kd as $kd ) :  ?> 
            <tr>
              <td>Kode Pesanan</td>
              <td>:</td>
              <td>
                <input type="hidden" name="kd_order" value="<?php echo $kd->kd_order?>">
                <?php echo $kd->kd_order?>
              </td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input type="hidden" name="nama" value="<?php echo $kd->nama?>"><?php echo $kd->nama?></td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td>:</td>
              <td><input type="hidden" name="tgl" value="<?php echo $kd->tanggal?>"><?php echo $kd->tanggal?></td>
              <td>, <input type="hidden" name="waktu" value="<?php echo  $kd->waktu?>"><?php echo  $kd->waktu?></td>
            </tr>
            <tr>
              <td>No PC</td>
              <td>:</td>
              <td><input type="hidden" name="user" value="<?php echo $kd->no_user?>"><?php echo $kd->no_user?></td>
            </tr>
            <tr>
              <td>Uang Tunai</td>
              <td>:</td>
              <td><input type="hidden" name="tunai" value="<?php echo $kd->uang_tunai?>">Rp. <?php echo number_format($kd->uang_tunai,0,',','.')?></td>
            </tr>
            <tr>              
              <td><input type="hidden" name="operator" value="<?php echo $kd->NIP?>"></td>
            </tr>
          </table>
          
          <br>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead align="center">       
              <tr>
                  <th>No</th>
                  <th>Nama Menu</th>
                  <th>Harga</th>
                  <th>Banyak</th>
                  <th>Jumlah</th>
              </tr>
              
            </thead>
            <tfoot align="center">
              <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Total</th>
                  <td> <input type="hidden" name="total" value="<?php echo $kd->total ?>"> Rp. <?php echo number_format( $kd->total,0,',','.') ?></td>
              </tr>
              <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-danger" type="submit">Proses</button>
                    </div>
                  </td>
                  <?php endforeach; ?> 
              </tr>
            </tfoot>
            <tbody align="center">
                <!--buka php  -->
                
                <?php $i=1; foreach ($order as $order ) :  
                  // $menu = $this->db->get_where('menu', array('kd_menu'=>$order->kd_menu))->row();
                  
                  ?> 

                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $order->nm_menu ?></td>
                        <td><?php echo number_format($order->harga,0,',','.') ?></td>
                        <td><?php echo $order->banyak ?></td>
                        <td>Rp. <?php echo number_format($order->jumlah,0,',','.') ?></td>
                      </tr>  
                <?php endforeach; ?> 
                    <!-- Tutup php  -->
            </tbody>
          </table>
          
        <?php form_close(); ?>

        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    
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