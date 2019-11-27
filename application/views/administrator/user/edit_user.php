        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>

		<?php echo $this->session->flashdata('message'); ?>

        <div class="col-lg-8">
        <?php echo form_open_multipart('administrator/datauser/update/' . $data->id_user);?>
            <div class="form-group row">
                <label for="nama_user" class="col-sm-2 col-form-label">Nama Toko</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama Toko" value="<?php echo $data->nama_user ?>">
                    <?php echo form_error('nama_user','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $data->email ?>">
                    <?php echo form_error('email','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="no_telp" class="col-sm-2 col-form-label">No. HP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. HP" value="<?php echo $data->no_telp ?>">
                    <?php echo form_error('no_telp','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?php echo $data->alamat ?></textarea>
                    <?php echo form_error('alamat','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                <a class="btn btn-secondary btn-icon-split" href="#">
                    <span class="icon text-white-50"><i class="fas fa-share-square"></i></span>
                    <span class="text">Close</span>
                </a>

                <button class="btn btn-primary btn-icon-split" type="submit">
                    <span class="icon text-white-50"><i class="fas fa-save"></i></span>
                    <span class="text">Update</span>
                </button>
                </div>
            </div>

        </form>
    </div>

    </div>
        <!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->

       
                    