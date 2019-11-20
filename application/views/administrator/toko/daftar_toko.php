  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>(Data Toko dalam bentuk tabel)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Data Toko</li>
      </ol>
    </section>

    <?php echo $this->session->flashdata('message')?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Master Data</h3>
              <div class="pull-right">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-toko"><i class="fa fa-plus"></i>&nbsp; Tambah Data</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No. HP</th>
                  <th>Jam Buka</th>
                  <th>Jam Tutup</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $key => $value): ?>
                    <tr><?php echo ++$key ?></tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No. HP</th>
                  <th>Jam Buka</th>
                  <th>Jam Tutup</th>
                  <th>AKsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modals -->
  <div class="modal fade" id="modal-tambah-toko">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Toko</h4>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('administrator/datatoko/insert');?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="nama_toko">Nama Toko</label>

                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <input type="text" class="form-control" id="nama_toko" name="nama_toko" placeholder="Nama Toko" autocomplete="off" value="<?php echo set_value('nama_toko'); ?>">
                            </div>
                            <?= form_error('nama_toko','<small class="text-danger pl-3">','</small>' ); ?>
                        </div>
                    </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Email</label>

                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="email" class="form-control"  id="email" name="email" placeholder="Email Address" autocomplete="off" value="<?php echo set_value('email'); ?>">
                            </div>
                            <?= form_error('email','<small class="text-danger pl-3">','</small>' ); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" value="<?php echo set_value('alamat')  ?>">
                  </textarea>
                </div>

                <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                <label>No. Telp</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telp" autocomplete="off" value="<?php echo set_value('no_telp'); ?>">
                </div>
                <?= form_error('no_telp','<small class="text-danger pl-3">','</small>' ); ?>
              </div>
                </div>

                <div class="col-lg-6">
              <div class="form-group">
                  <label for="logo">Logo</label>

                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-image"></i>
                  </div>
                  <input type="file" id="logo" class="form-control" name="logo">
                  </div>
                </div>
                </div>
            </div>

              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Jam Buka</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="jam_buka" name="jam_buka" placeholder="No Telp" autocomplete="off" value="<?php echo set_value('jam_buka'); ?>">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>  
                  </div>
                  <?= form_error('jam_buka','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
              </div>

              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Jam Tutup</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="jam_tutup" name="jam_tutup" placeholder="No Telp" autocomplete="off" value="<?php echo set_value('jam_tutup'); ?>">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <?= form_error('jam_tutup','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="save">Save Changes</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>