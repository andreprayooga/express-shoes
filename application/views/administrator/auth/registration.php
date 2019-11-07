<body>
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('Auth/registration') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" autocomplete="off" placeholder="Full Name" value="<?= set_value('nama_admin') ?>">
                  <?= form_error('nama_admin','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" autocomplete="off" placeholder="Email Address" value="<?= set_value('email') ?>">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" autocomplete="off" placeholder="Username" value="<?= set_value('username') ?>">
                  <?= form_error('username','<small class="text-danger pl-3">','</small>' ); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" value="<?= set_value('password') ?>">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>' ); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
<!--                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="role_id" name="role_id" autocomplete="off" placeholder="Role">
                </div> -->
                <button class="btn btn-primary btn-user btn-block" type="submit">
                Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url() ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('Auth/login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>