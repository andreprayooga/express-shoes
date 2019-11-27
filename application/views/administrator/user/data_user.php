		<!-- Begin Page Content -->
		<div class="container-fluid">

		<?php echo $this->session->flashdata('message'); ?>
					
		  <!-- DataTales Example -->
		  <div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
			</div>
			<div class="card-body">
			  <div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				  <thead>
					<tr>
						<th>No</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Status</th>
						<th>Options</th>
					</tr>
				  </thead>
				  <tfoot>
					<tr>
					  	<th>No</th>
					  	<th>Full Name</th>
					  	<th>Email</th>
						<th>Phone</th>
						<th>Status</th>
						<th>Options</th>
					</tr>
				  </tfoot>
				  <tbody>
				  <?php foreach($data as $num => $val) : ?>
							<tr>
								<td><?php echo ++$num; ?></td>
								<td><?php echo $val->nama_user ?></td>
								<td><?php echo $val->email ?></td>
								<td><?php echo $val->no_telp  ?></td>
								<td><?php if($val->is_active == 1 ){
										echo '<span class="badge badge-pill badge-success">Active</span>';
									} else{
										echo '<span class="badge badge-pill badge-danger">Inactive</span>';
									}  
								?></td>
								<td>
								<a class="btn-sm btn-primary" href="#"><i class="fas fa-search"></i></a>
								<a class="btn-sm btn-warning" href="<?php echo site_url("administrator/datauser/update/" .$val->id_user) ?>"><i class="fas fa-edit"></i></a>
								<a class="btn-sm btn-danger" href="<?php echo site_url("administrator/datauser/delete/" .$val->id_user) ?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?> 
				  </tbody>
				</table>
			  </div>
			</div>
		  </div>

		</div>
		<!-- /.container-fluid -->

	  </div>
	  <!-- End of Main Content -->
