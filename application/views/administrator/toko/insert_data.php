        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>

        <div class="col-lg-8">
            <?php echo form_open_multipart('administrator/datatoko/insert'); ?>
            <div class="form-group row">
                <label for="nama_toko" class="col-sm-2 col-form-label">Nama Toko</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_toko" name="nama_toko" placeholder=""
                    value="<?php echo set_value("nama_toko") ?>">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo set_value("email") ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder=""><?php echo set_value("alamat") ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 pt-1">Logo</div>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo" name="logo">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="jam_buka" class="col-sm-2 col-form-label">Jam Buka</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jam_buka" name="jam_buka" placeholder="<?php echo date("d-m-Y H:i:s"); ?>" value="<?php echo set_value("jam_buka") ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="jam_tutup" class="col-sm-2 col-form-label">Jam Tutup</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jam_tutup" name="jam_tutup" placeholder="<?php echo date("d-m-Y"); ?>" value="<?php echo set_value("jam_tutup") ?>">
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <a class="btn btn-secondary btn-icon-split" href="<?php echo base_url('administrator/datatoko') ?>">
                        <span class="icon text-white-50"><i class="fas fa-share-square"></i></span>
                        <span class="text">Close</span>
                    </a>

                    <button type="submit" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50"><i class="fas fa-save"></i></span>
                        <span class="text">Save Changes</span>
                    </button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->