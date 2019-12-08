		<!-- Begin Page Content -->
		<div class="container-fluid">

		  <!-- Page Heading -->
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
		  </div>

		  <!-- Content Row -->
		  <div class="row">

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
				  <div class="row no-gutters align-items-center">
					<div class="col mr-2">
					  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pending Laundry</div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
					</div>
					<div class="col-auto">
					  <i class="fas fa-history fa-2x text-gray-300"></i>
					</div>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
				  <div class="row no-gutters align-items-center">
					<div class="col mr-2">
					  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Registration User</div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->db->get('tb_user')->num_rows(); ?></div>
					</div>
					<div class="col-auto">
					  <i class="fas fa-users fa-2x text-gray-300"></i>
					</div>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
				  <div class="row no-gutters align-items-center">
					<div class="col mr-2">
					  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Store</div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->db->get('tb_toko')->num_rows();  ?></div>
					</div>
					<div class="col-auto">
					  <i class="fas fa-project-diagram fa-2x text-gray-300"></i>
					</div>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Pending Requests Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
				  <div class="row no-gutters align-items-center">
					<div class="col mr-2">
					  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Employees</div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->db->get('tb_pegawai')->num_rows();  ?></div>
					</div>
					<div class="col-auto">
					  <i class="fas fa-user-check fa-2x text-gray-300"></i>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		  <!-- Content Row -->

		  <div class="row">

			<!-- Area Chart -->
			<div class="col-lg-6 mb-4">

				<!-- Approach -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
				</div>

				<div class="card-body">
				<div class="card mb-3" style="max-width: 450px;">
        			<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?= base_url('assets/administrator/dist/img/profile/') . $tb_admin['foto']; ?>" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?= $tb_admin['nama_admin']; ?></h5>
								<hr>
								<p class="card-text mb-0"><small>Email : <?= $tb_admin['email']; ?></small></p>
								<p class="card-text"><small class="text-muted">Admin Since : <?= date("d F Y",strtotime ($tb_admin['date_created'])); ?></small></p>
							</div>
						</div>
        			</div>
				</div>
				
				</div>
			</div>

			

			</div>
			
		  </div>

		  <!-- Content Row -->

		</div>
		<!-- /.container-fluid -->

	  </div>
	  <!-- End of Main Content -->