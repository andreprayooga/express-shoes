        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>

		<?php echo $this->session->flashdata('message'); ?>

        <div class="col-lg-8">
        <?php echo form_open_multipart('administrator/menu/shoes/insert');?>
            <div class="form-group row">
                <label for="jenis_sepatu" class="col-sm-2 col-form-label">Jenis Sepatu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenis_sepatu" name="jenis_sepatu" placeholder="Jenis Sepatu" value="<?php echo set_value('jenis_sepatu') ?>">
                    <?php echo form_error('jenis_sepatu','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?php echo set_value('keterangan') ?>">
                    <?php echo form_error('keterangan','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>


            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                <a class="btn btn-secondary btn-icon-split" href="#">
                    <span class="icon text-white-50"><i class="fas fa-share-square"></i></span>
                    <span class="text">Close</span>
                </a>

                <button class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50"><i class="fas fa-save"></i></span>
                    <span class="text">Save</span>
                </button>
                </div>
            </div>

        </form>
    </div>

    </div>
        <!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->

       
                    