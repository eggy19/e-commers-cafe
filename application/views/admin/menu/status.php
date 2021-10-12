<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Status Menu</li>
  </ol>

<!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
        <input type="hidden" name="tes" value="hello">
        
        </div>   
   
      <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
                <th>Kode Menu</th>
                <th>Nama</th>
                <th>Katagori</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Status</th>
            </tr>
            
          </thead>
          <tfoot align="center">
            <tr>
                <th>Kode Menu</th>
                <th>Nama</th>
                <th>Katagori</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Status</th>
            </tr>
          </tfoot>
          <tbody align="center">
              <!--buka php  -->
              <?php               
                $i=1;
                foreach ($menu as $menu ) :  
                ?>                        
                                <tr>
                                  <td>
                                    <input type="hidden" name="kd_menu" value="<?php echo $menu->kd_menu?>">
                                    <?php echo $i++?>
                                  </td>                                  
                                  <td>
                                    <input type="hidden" name="nama" value="<?php echo $menu->nm_menu?>">
                                    <?php echo $menu->nm_menu?>
                                  </td>
                                  <td>
                                    <?php echo $menu->nama?>
                                    <input type="hidden" name="katagori" value="<?php echo $menu->kd_katagori?>">
                                  </td>
                                  <td>
                                    Rp. <?php echo number_format($menu->harga,0,',','.')  ?>
                                    <input type="hidden" name="harga" value="<?php echo $menu->harga?>">
                                  </td>
                                  <td>
                                    <a href="<?php echo base_url('assets/img/menu/'.$menu->gambar) ?>" class="gambar" target="_blank">
                                      <img id="myImg" src="<?php echo base_url()?>assets/img/menu/<?php echo $menu->gambar ?>" alt="Menu" height="100" widht="100">
                                    </a>
                                    <input type="hidden" name="gambar" value="<?php echo $menu->gambar?>">
                                  </td>
                                    <td>
                                    <?php echo form_open(base_url('admin/statusmenu/update'), 'post');?>
                                  <div class="btn btn-group">
                                    <?php
                                    if ($menu->status==1) {?>                                  
                                    <a href = "<?= base_url('admin/statusmenu/update/'.$menu->kd_menu.'/0') ?>" class="btn btn-success btn-md  text-center">Ready</a>
                                    <?php } else {?>                                    
                                      <a href = "<?= base_url('admin/statusmenu/update/'.$menu->kd_menu.'/1') ?>" class="btn btn-danger btn-md  text-center"> Not Ready</a>
                                    <?php }
                                    ?>
                                  </div>
                                  <?php form_close();?>
                                  <!-- <select class="form-control" id="status" name="status">
                                    <option value="1" <?php if($menu->status == "1"){?> selected="selected"<?php } ?>>Ready</option>
                                    <option value="0" <?php if($menu->status == "0"){?> selected="selected"<?php } ?>>Not Ready</option>
                                  </select>                                       -->
                      
                                  </td>
                                </tr>
                
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