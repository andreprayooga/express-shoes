<body>
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10  mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('user/auth/register') ?>">
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nama_user" name="nama_user" autocomplete="off" placeholder="Full Name" value="<?= set_value('nama_user') ?>">
                  <?= form_error('nama_user','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
                <div class="col-sm-4">
                  <input type="email" class="form-control form-control-user" id="email" name="email" autocomplete="off" placeholder="Email Address" value="<?= set_value('email') ?>">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" autocomplete="off" placeholder="No. HP" value="<?= set_value('no_telp') ?>">
                  <?= form_error('no_telp','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
              </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" value="<?= set_value('password') ?>">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>' ); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                    <?= form_error('password2','<small class="text-danger pl-3">','</small>' ); ?>
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Enter Address" value="<?php echo set_value('alamat'); ?>">
                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>' ); ?>
                  </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url() ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('user/auth/login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>