
<body>
<br>
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>

                    <?= $this->session->flashdata('message'); ?>

                <form class="user" method="post" action="<?= base_url('Auth/login'); ?>">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email" autocomplete="off" value="<?= set_value('email') ?>" placeholder="Enter Email">
                    <?= form_error('username','<small class="text-danger pl-3">','</small>' ); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" autocomplete="off" placeholder="Password">
                    <?= form_error('password','<small class="text-danger pl-3">','</small>' ); ?>
                  </div>
                  <button class="btn btn-primary btn-user btn-block" type="submit">
                    Login
                  </button >
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url('Auth/registration'); ?>">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
</body>