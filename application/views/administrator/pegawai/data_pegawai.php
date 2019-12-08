        <!-- Begin Page Content -->
        <div class="container-fluid">

		<?php echo $this->session->flashdata('message'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-1">
			<div>
				<div class="float-left">
				<h6 class="font-weight-bold text-primary my-3"><?php echo $title; ?></h6>
				</div>

				<div class="float-right">
				<a class="btn btn-sm btn-primary mt-2" href="<?php echo base_url('administrator/datapegawai/insert')  ?>"><i class="fas fa-plus-circle mr-1"></i>Add Data</a>
				</div>
			</div>
			</div>
			
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<thead>
                    <tr>
						<th>No</th>
						<th>Nama Toko</th>
						<th>Email</th>
						<th>Store</th>
						<th>Gender</th>
						<th>Status</th>
						<th>Options</th>
					</tr>
					</thead>
					
                	<tfoot>
                  	<tr>
					  	<th>No</th>
						<th>Nama Toko</th>
						<th>Email</th>
						<th>Store</th>
						<th>Gender</th>
						<th>Status</th>
						<th>Options</th>
                    </tr>
					</tfoot>		
                	<tbody>
						<?php foreach($data as $num => $val) : ?>
							<tr>
								<td><?php echo ++$num; ?></td>
								<td><?php echo $val->nama_pegawai ?></td>
								<td><?php echo $val->email ?></td>
								<td><?php echo $val->nama_toko ?></td>
								<td><?php echo $val->gender_id == 1 ? "Male" : "Female" ?></td>
								<td><?php if($val->is_active == 1 ){
										echo '<span class="badge badge-success">Active</span>';
									} else{
										echo '<span class="badge badge-danger">Inactive</span>';
									}  
								?></td>
								<td>
								<a class="btn-sm btn-primary" href="#"><i class="fas fa-search"></i></a>
								<a class="btn-sm btn-warning" href="<?php echo site_url("administrator/datapegawai/update/" .$val->id_pegawai) ?>"><i class="fas fa-edit"></i></a>
								<a class="btn-sm btn-danger" href="<?php echo site_url("administrator/datapegawai/delete/" .$val->id_pegawai) ?>"><i class="fas fa-trash-alt"></i></a>
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
	  