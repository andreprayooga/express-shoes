        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>

		<?php echo $this->session->flashdata('message'); ?>

        <div class="col-lg-8">
        <?php echo form_open_multipart('administrator/datapegawai/insert');?>
            <div class="form-group row">
                <label for="nama_pegawai" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Employee Name" value="<?php echo set_value('nama_pegawai') ?>">
                    <?php echo form_error('nama_pegawai','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
                    <?php echo form_error('email','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                <select id="gender_id" name="gender_id" class="form-control" >
                <option selected>Choose Gender</option>
                    <?php foreach  ($this->db->get('tb_gender')->result_array() as $num => $val) :  ?>
                    <option value="<?php echo $val['id_gender'] ?>"><?php echo $val['keterangan'] ?></option>
                    <?php endforeach; ?>
                    <?php echo form_error('gender_id','<small class="text-danger pl-3">','</small>' ); ?>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="password1" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" value="<?php echo set_value('password1') ?>">
                    <?php echo form_error('password1','<small class="text-danger pl-3">','</small>' ); ?>
                </div>

                <div class="col-sm-5">
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                    <?php echo form_error('password1','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="logo" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Store</label>
                <div class="col-sm-10">
                <select id="toko_id" name="toko_id" class="form-control" >
                    <?php foreach  ($this->db->get('tb_toko')->result_array() as $num => $val) :  ?>
                    <option selected>Choose Store</option>
                    <option value="<?php echo $val['id_toko'] ?>"><?php echo $val['nama_toko'] ?></option>
                    <?php endforeach; ?>
                    <?php echo form_error('toko_id','<small class="text-danger pl-3">','</small>' ); ?>
                </select>
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

       
                    