
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <?php
          if ( $this->session->userdata('jabatan')=="Operator") {
        ?>

        <!-- Icon Cards-->
        <div class="row" align="center">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">            
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/pesanan/masuk') ?>">
                <div class="card-body">
                <h4><?php echo $psnmasuk ?></h4>
                  <h5 class="card-title">Pesanan Masuk</h5>
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">            
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/pesanan/selesai') ?>">
                <div class="card-body">
                <h4><?php echo $selesai ?></h4>
                  <h5 class="card-title">pesanan selesai</h5>
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">            
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/statusmenu') ?>">
                <div class="card-body">
                <h4><?php echo $menu ?></h4>
                  <h5 class="card-title">Status menu</h5>
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>          
        </div>
        

        <?php
          }else if ($this->session->userdata('jabatan')=="Supervisor") {
        ?>
        
        <!-- Icon Cards-->
          <div class="row" align="center">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">            
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/pegawai') ?>">
                  <div class="card-body">
                  <h4><?php echo $pegawai ?></h4>
                    <h5 class="card-title">DATA PEGAWAI</h5>
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-user"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">            
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/menu') ?>">
                  <div class="card-body">
                  <h4><?php echo $menu ?></h4>
                    <h5 class="card-title">DATA MENU</h5>
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-user"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">            
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/pc') ?>">
                  <div class="card-body">
                  <h4><?php echo $pc ?></h4>
                    <h5 class="card-title">DATA PC</h5>
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-user"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">            
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/katagori') ?>">
                  <div class="card-body">
                  <h4><?php echo $kata ?></h4>
                    <h5 class="card-title">DATA KATAGORI</h5>
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-user"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        </div>

          <!-- Icon Cards-->
          <div class="row" align="center">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">            
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/pesanan/masuk') ?>">
                <div class="card-body">
                <h4><?php echo $psnmasuk ?></h4>
                  <h5 class="card-title">Pesanan Masuk</h5>
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">            
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/pesanan/selesai') ?>">
                <div class="card-body">
                <h4><?php echo $selesai ?></h4>
                  <h5 class="card-title">pesanan selesai</h5>
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">            
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/statusmenu') ?>">
                <div class="card-body">
                <h4><?php echo $menu ?></h4>
                  <h5 class="card-title">Status menu</h5>
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                </div>
              </a>
            </div>
          </div> 
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">            
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/laporan') ?>">
                <div class="card-body">
                <h4>DATA</h4>
                  <h5 class="card-title">Laporan</h5>
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>          
        </div>

        <?php  } ?> 


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

