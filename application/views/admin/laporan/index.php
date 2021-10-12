<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Data Pesanan Selesai</li>
  </ol>

<!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-body">
      <div class="card-body">
        <form action="<?= base_url('admin/laporan/filter')?>" method="post">
          <div class="col-6">
                  <div class="form-group">
                      <label>Periode Laporan</label>
                      <div class="input-group">
                          <input type="date" class="form-control" name="awal"/>
                          <div class="input-group-append">
                              <span class="input-group-text">s/d</span>
                          </div>
                          <input type="date" class="form-control" name="akhir"/> 
                          <button type="submit" class="form-control btn btn-primary">Cari</button>
                          <a href="<?= base_url('admin/laporan/cetak')?>" class="form-control btn btn-warning">Cetak Laporan</a>
                      </div>
                  </div>                
          </div>
        </form>
        
      </div>
      <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
                <th>No Order</th>
                <th>No PC</th>
                <th>Operator</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Total</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody align="center">
              <!--buka php  -->
              <?php foreach ($selesai->result() as $selesai ) :
              ?>                                  
                                <tr>
                                  <td><?php echo $selesai->kd_order  ?></td>
                                  <td><?php echo $selesai->no_user   ?></td>
                                  <td><?php echo $selesai->NIP   ?></td>
                                  <td><?php echo $selesai->tanggal   ?></td>
                                  <td><?php echo $selesai->waktu     ?></td>
                                  <td>Rp. <?php echo number_format($selesai->total,0,',','.')   ?></td>
                                  <td><a href="<?php echo base_url('admin/laporan/detaillaporan/'.$selesai->kd_order)?>">Detail</a></td>
                                </tr>  
              <?php 
                endforeach; ?> 
                  <!-- Tutup php  -->
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


