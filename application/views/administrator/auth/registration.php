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
              <form class="user">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" autocomplete="off" placeholder="Full Name">
				</div>
				<div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" autocomplete="off" placeholder="Email Address">
				</div>
				<div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" autocomplete="off" placeholder="Username">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="username" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="username" placeholder="Repeat Password">
                  </div>
				</div>
				<div class="form-group">
                  <input type="text" class="form-control form-control-user" id="fk_id_level" name="fk_id_level" autocomplete="off" placeholder="Role" readonly>
                </div>
                <button href="login.html" class="btn btn-primary btn-user btn-block">
				  Register Account
				</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url() ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('Welcome') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
