<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tabel Data Katagori</li>
  </ol>

  <?php
      if ($this->session->flashdata('sukses')==TRUE)
       {
          echo    '<div class="alert alert-success">';
          echo    $this->session->flashdata('sukses');
          echo    '</div>';
      }
  ?>

<!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <div class="btn-group">
        <a href="<?= base_url('admin/dashboard')?>" class="btn btn-warning">Kembali</a>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#input">Tambah Data</button></div>
      </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
                <th>Kode Katagori</th>
                <th>Nama Katagori</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tfoot align="center">
            <tr>
                <th>Kode Katagori</th>
                <th>Nama Katagori</th>
                <th>Keterangan</th>
            </tr>
          </tfoot>
          <tbody align="center">
              <!--buka php  -->
              <?php foreach ($katagori as $katagori ) :  ?>                                  
                    <tr>
                      <td><?php echo $katagori->kd_katagori?></td>
                      <td><?php echo $katagori->nama ?></td>
                      <td>
                        <div class="btn-group">
                          <a href="<?php echo base_url('admin/katagori/hapus/'.$katagori->kd_katagori)?>" class="btn btn-danger">Hapus</a>
                          <a href="" data-toggle="modal" data-target="#editmodal<?php echo $katagori->kd_katagori ?>" class="btn btn-warning">Ubah</a>
                        </div>
                      </td>
                    </tr>
                      <!-- Modal edit Data -->
                      <div id="editmodal<?php echo $katagori->kd_katagori ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog ">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="formModalLabel">Edit Data Katagori</h5>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>              
                            </div>
                            <div class="modal-body">
                            <?php echo form_open(base_url('admin/katagori/ubah')); ?>
                          
                                <div class="form-group">
                                  <label for="nama">Masukan Nama Katagori :</label>
                                  <input type="hidden" name="kode" value="<?php echo $katagori->kd_katagori ?>" required>
                                  <input type="text" class="form-control" id="nama" name="nama"  value="<?php echo $katagori->nama ?>" required>
                                </div>      

                                <div class="modal-footer">
                                  <button type="submit" name="submit" class="btn btn-info">Ubah</button>              
                                </div>

                              <?php form_close(); ?>
                            </div>        
                          </div>
                        </div>
                      </div>  
              <?php endforeach; ?> 
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
      <span>Copyright ?? Your Website 2019</span>
    </div>
  </div>
</footer>
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Modal Tambah Data -->
<div id="input" class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Input Data Katagori COY Edan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>              
      </div>
      <div class="modal-body">
      

          <div class="form-group">
            <label for="nama">Masukan Nama Katagori :</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>      

          <div class="modal-footer">
              <div class="btn btn-group">
                <button type="submit" name="submit" class="btn btn-info">Simpan Goblok</button>              
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>   
              </div>             
          </div>

      </div>        
    </div>
  </div>
</div>


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
      <span aria-hidden="true">??</span>
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