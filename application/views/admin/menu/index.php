<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tabel Data Menu</li>
  </ol>

  <?php
      if ($this->session->flashdata('error')==TRUE)
      {
          echo    '<div class="alert alert-warning">';
          echo    $this->session->flashdata('error');
          echo    '</div>';
      }

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
      <div class="btn btn-group">
        <a href="<?= base_url('admin/dashboard')?>" class="btn btn-warning">Kembali</a>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#inputmodal">Tambah Data</button>
      </div> 

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" center-block>
          <thead align="center">
            <tr>
                <th>No Menu</th>
                <th>Status</th>
                <th>Nama</th>
                <th>Katagori</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody align="center">
              <!--buka php  -->
              <?php $i=1; foreach ($menu as $menu ) :  ?>                                  
                <tr>
                <?php
                if ($menu->status == 0) {
                  $a = "Not Ready";
                }else {
                  $a = "Ready";
                }
                ?>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $a?></td>
                  <td><?php echo $menu->nm_menu ?></td>
                  <td>
                    <?php 
                      echo $menu->nama
                    ?>
                  </td>
                  <td>Rp. <?php echo number_format($menu->harga,0,',','.'); ?></td>
                  <td>                                   
                    <a href="<?php echo base_url('assets/img/menu/'.$menu->gambar) ?>" class="gambar" target="_blank">
                      <img id="myImg" src="<?php echo base_url()?>assets/img/menu/<?php echo $menu->gambar ?>" alt="Menu" height="100" widht="100">
                    </a>
                  </td>
                  <td >
                    <div class="btn-group">
                      <a href="<?php echo base_url('admin/menu/hapus/'.$menu->kd_menu)?>" class="btn btn-danger" onclick="return confirm('yakin?');"><i class="fa fa-fw- fa-trash"></i></a>
                      <a href="#" class="btn btn-warning modalUbahmenu" data-toggle="modal" data-target="#editmodal<?php echo $menu->kd_menu ?>" data-id=""><i class="fa fa-edit"></i></a>
                    </div>                                   
                  </td>
                </tr>
                
                <!-- Modal Ubah Data -->
                <div id="editmodal<?php echo $menu->kd_menu ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Ubah Data Menu</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>              
                      </div>
                      <div class="modal-body">
                        <?= form_open(base_url('admin/menu/ubah'), array('enctype'=>'multipart/form-data')) ?>
                                                
                          <div class="form-group">
                              <label for="status" name="status">Status :</label>
                              <select class="form-control" id="status" name="status">
                                <option value="<?php echo $menu->status ?>" >--------</option>
                              </select>
                              <input type="hidden" value="<?php echo $menu->kd_menu ?>" name="kd_menu">
                          </div>       

                          <div class="form-group">
                            <label for="nm_menu" name="nm_menu">Nama Menu :</label>
                            <input type="text" class="form-control" value="<?php echo $menu->nm_menu ?>" name="nm_menu" autocomplete="off" required>
                          </div>

                          <div class="form-group">
                            <label for="kd_katagori">Katagori :</label>                                
                              <select class="form-control" id="kd_katagori" name="kd_katagori">
                                <?php foreach ($kata as $katagori ) :  ?>
                                  <option value="<?php echo $katagori->kd_katagori ?>">
                                    <?php echo $katagori->nama ?>
                                  </option>
                                <?php endforeach; ?>
                              </select> 
                          </div> 

                          <div class="form-group">
                            <label for="harga">Harga :</label>
                            <input type="number" class="form-control" name="harga" value="<?php echo $menu->harga?>" autocomplete="off" required>
                          </div>

                          <label for="gambar">Masukan Gambar :</label>
                          <div class="custom-file">
                            <input type="file" class="" name="gambar">
                            <!-- <label class="custom-file-label" for="customFile"><?php echo $menu->gambar?></label> -->
                            <input type="hidden"  name="old_gambar" value="<?php echo $menu->gambar?>">
                          </div>

                          <div class="modal-footer">
                            <div class="btn btn-group">
                              <button type="submit" class="btn btn-info">Simpan</button>     
                            </div>         
                          </div>

                          <?= form_close()?>
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

<!-- The Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
      <div id="caption"></div>         
    </div>
    <div class="modal-footer">
        <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
    </div>
  </div>
</div>

<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
  }
</script>

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




<!-- Modal Tambah Data -->
<div id="inputmodal" class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Input Data Menu</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>              
      </div>
      <div class="modal-body">
        <?php echo form_open(base_url('index.php/admin/menu/tambah'), array('enctype'=>'multipart/form-data')); ?>

          <div class="form-group">
              <label for="status" name="status">Status :</label>
              <select class="form-control" id="status" name="status">
                <option value=0 >--------</option>
              </select>
          </div>       

          <div class="form-group">
            <label for="nm_menu" name="nm_menu">Nama Menu :</label>
            <input type="text" class="form-control" id="nm_menu" name="nm_menu" autocomplete="off" required>
          </div>

          <div class="form-group">
              <label for="kd_katagori">Katagori :</label>
              
                <select class="form-control" id="kd_katagori" name="kd_katagori">
                  <?php foreach ($kata as $katagori ) :  ?>
                    <option value="<?php echo $katagori->kd_katagori ?>"><?php echo $katagori->nama ?></option>
                  <?php endforeach; ?>
                </select>
             

          </div> 

          <div class="form-group">
            <label for="harga">Harga :</label>
            <input type="number" class="form-control" id="harga" name="harga" autocomplete="off" required>
          </div>

          <label for="gambar">Masukan Gambar :</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar" name="gambar">
            <label class="custom-file-label" for="gambar">Choose file</label>
          </div>

          <div class="modal-footer">
            <<div class="btn btn-group">
                <button type="submit" name="submit" class="btn btn-info">Simpan</button>              
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>   
              </div>               
          </div>

          <?php echo form_close(); ?>
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