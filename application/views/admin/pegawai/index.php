  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tabel Data Pegawai</li>
      </ol>

      <?php
      if ($this->session->flashdata('sukses') == TRUE) {
        echo    '<div class="alert alert-success">';
        echo    $this->session->flashdata('sukses');
        echo    '</div>';
      }
      ?>

      <?php
      if ($this->session->flashdata('error') == TRUE) {
        echo    '<div class="alert alert-warning">';
        echo    $this->session->flashdata('error');
        echo    '</div>';
      }
      ?>

      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <div class="btn-group">
            <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-warning">Kembali</a>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambah_pegawai">Tambah Data</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>No Hp</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Jabatan</th>
                  <th>Username</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>No Hp</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Jabatan</th>
                  <th>Username</th>
                  <th>Keterangan</th>
                </tr>
              </tfoot>
              <tbody>
                <!--buka php  -->
                <?php foreach ($gawai as $gawai) :  ?>
                  <tr>
                    <td><?php echo $gawai->NIP ?></td>
                    <td><?php echo $gawai->nama ?></td>
                    <td>0<?php echo $gawai->no_hp ?></td>
                    <td><?php echo $gawai->jenkel ?></td>
                    <td><?php echo $gawai->alamat ?></td>
                    <td><?php echo $gawai->jabatan ?></td>
                    <td><?php echo $gawai->username ?></td>
                    <td align="center">
                      <div class="btn-group">
                        <a href="<?php echo base_url('admin/pegawai/hapus/' . $gawai->NIP) ?>" onclick="return confirm('Yakin ingin di hapus?')" class="btn btn-danger">Hapus</a>
                        <a href="" data-toggle="modal" data-target="#edit_pegawai<?php echo $gawai->NIP ?>" class="btn btn-warning">Ubah</a>
                      </div>
                    </td>
                  </tr>
                  <!-- Modal Edit Data -->
                  <div id="edit_pegawai<?php echo $gawai->NIP ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="formModalLabel">Input Data Pegawai</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form action="<?= base_url('admin/pegawai/ubah') ?>" method="post">

                            <div class="form-row">
                              <div class="form-group col">
                                <label for="NIP" name="NIP">NIP :</label>
                                <input type="number" name="NIP" class="form-control" value="<?php echo $gawai->NIP ?>" readonly required>
                              </div>

                              <div class="form-group col">
                                <label for="nama" name="nama">Nama :</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $gawai->nama ?>" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col">
                                <label for="no_hp" name="no_hp">No HandPhone :</label>
                                <input type="number" maxlength="13" class="form-control" name="no_hp" value="<?php echo $gawai->no_hp ?>" autocomplete="off" required>
                              </div>

                              <div class="form-group col">
                                <label for="jenkel" name="jenkel">Jenis Kelamin :</label>
                                <select class="form-control" name="jenkel">
                                  <option value="">--Pilih--</option>
                                  <option value="Pria" <?php if ($gawai->jenkel == "Pria") { ?> selected="selected" <?php } ?>>Pria</option>
                                  <option value="Wanita" <?php if ($gawai->jenkel == "Wanita") { ?> selected="selected" <?php } ?>>Wanita</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col">
                                <label for="alamat" name="alamat">Alamat :</label>
                                <textarea type="text" class="form-control" name="alamat"><?php echo $gawai->alamat ?></textarea>
                              </div>

                              <div class="form-group col">
                                <label for="jabatan" name="jabatan">Jabatan :</label>
                                <select class="form-control" name="jabatan">
                                  <option value="">--Pilih--</option>
                                  <option value="Operator" <?php if ($gawai->jabatan == "Operator") { ?> selected="selected" <?php } ?>>Operator</option>
                                  <option value="Supervisor" <?php if ($gawai->jabatan == "Supervisor") { ?> selected="selected" <?php } ?>>Supervisor</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col">
                                <label for="username" name="username">Username :</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $gawai->username ?>" autocomplete="off" required>
                              </div>

                              <div class="form-group col">
                                <label for="password" name="password">Password :</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $gawai->password ?>" autocomplete="off" required>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="btn btn-group">
                                <button type="submit" name="submit" class="btn btn-info">Ubah</button>
                              </div>
                            </div>

                          </form>
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
          <span>Copyright © Your Website 2019</span>
        </div>
      </div>
    </footer>
  </div>
  <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->



  <!-- Modal Tambah Data -->
  <div id="tambah_pegawai" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Input Data Pegawai</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/pegawai/tambah') ?>" method="post">

            <div class="form-row">

              <div class="form-group col">
                <label for="NIP" name="NIP">NIP :</label>
                <input type="number" class="form-control" id="NIP" name="NIP" autocomplete="off" pattern=".{3,}" required>
              </div>

              <div class="form-group col">
                <label for="nama" name="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                <label for="no_hp" name="no_hp">No HandPhone :</label>
                <input type="number" maxlength="13" class="form-control" id="no_hp" name="no_hp" autocomplete="off" required>
              </div>

              <div class="form-group col">
                <label for="jenkel" name="jenkel">Jenis Kelamin :</label>
                <select class="form-control" id="jenkel" name="jenkel">
                  <option>Pria</option>
                  <option>Wanita</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                <label for="alamat" name="alamat">Alamat :</label>
                <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
              </div>

              <div class="form-group col">
                <label for="jabatan" name="jabatan">Jabatan :</label>
                <select class="form-control" id="jabatan" name="jabatan">
                  <option>Operator</option>
                  <option>Supervisor</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
                <label for="username" name="username">Username :</label>
                <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
              </div>

              <div class="form-group col">
                <label for="password" name="password">Password :</label>
                <input type="text" class="form-control" id="password" name="password" autocomplete="off" required>
              </div>
            </div>
            <div class="modal-footer">
              <div class="btn btn-group">
                <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              </div>
            </div>

          </form>
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