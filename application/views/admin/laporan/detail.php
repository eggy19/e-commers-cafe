<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Data Pesanan Selesai</li>
  </ol>


<!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
    <?php foreach ($order as $order ) :
              ?>  
        <div class="btn-group">
            <a href="<?= base_url('admin/laporan')?>" class="btn btn-warning">Kembali</a>
            <a href="<?php echo base_url('admin/laporan/HapusLap/'.$order->kd_order)  ?>" onclick="return confirm('Yakin ingin di hapus?')" class="btn btn-danger">Hapus</a>
            <a href="#<?php// base_url('admin/laporan')?>" class="btn btn-info">Cetak Laporan</a>
        </div>
    </div>    
    <div class="card-body">
      <div class="table-responsive">
        <table  class="table table-striped" id="" width="100%" cellspacing="0">
          <thead align="center" class="thead-dark">
            <tr>
                <th>No Order</th>
                <th>No PC</th>
                <th>Operator</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Total</th>
            </tr>
          </thead>
          <tbody align="center">
              <!--buka php  -->
                                              
                                <tr>
                                  <td><?php echo $order->kd_order  ?></td>
                                  <td><?php echo $order->no_user   ?></td>
                                  <td><?php echo $order->NIP   ?></td>
                                  <td><?php echo $order->tanggal   ?></td>
                                  <td><?php echo $order->waktu     ?></td>
                                  <td>Rp. <?php echo number_format($order->total,0,',','.')   ?></td>
                                </tr>  
              <?php 
                endforeach; ?> 
                  <!-- Tutup php  -->
          </tbody>
        </table>
        
        <h4>Tabel Detail Pesanan</h3>
        <br>

        <table class="table table-striped table-bordered"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Banyak</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ; foreach ($detail as $detail ) : ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $detail->nm_menu ?></td>
                    <td>Rp <?php echo number_format($detail->harga,0,',','.') ?></td>
                    <td><?php echo $detail->banyak ?></td>
                    <td>Rp <?php echo number_format($detail->jumlah,0,',','.') ?></td>
                </tr>
                <?php endforeach ?>
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