<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Data Pesanan Selesai</li>
  </ol>

<!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-body">
      <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
                <th>No Order</th>
                <th>No PC</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Total</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody align="center">
              <!--buka php  -->
              <?php foreach ($selesai->result() as $selesai ) :  
                $this->load->helper('date');
                $tgl	= date('Y-m-d');
                    if ($selesai->tanggal != $tgl) {
                      //kosong
                    }else {
              ?>                                  
                                <tr>
                                  <td><?php echo $selesai->kd_order  ?></td>
                                  <td><?php echo $selesai->no_user   ?></td>
                                  <td><?php echo $selesai->tanggal   ?></td>
                                  <td><?php echo $selesai->waktu     ?></td>
                                  <td>Rp. <?php echo number_format($selesai->total,0,',','.')   ?></td>
                                  <td >
                                  <div class="btn-group">
                                    <a href="#" class="btn btn-danger" >Selesai</a>
                                  <div>
                                  </td>
                                </tr>  
              <?php 
                    }
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