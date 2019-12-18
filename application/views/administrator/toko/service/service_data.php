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
				<button class="btn btn-sm btn-primary mt-2 mr-2" data-toggle="modal" data-target="#exampleModal"></i>Add Data</button>
				</div>
			</div>
			</div>
			
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<thead>
                    <tr>
						<th>No</th>
						<th>Store Name</th>
						<th>Service</th>
						<th>Information</th>
						<th>Options</th>
					</tr>
					</thead>
					
                	<tfoot>
                  	<tr>
					  	<th>No</th>
						<th>Store Name</th>
						<th>Service</th>
						<th>Information</th>
						<th>Options</th>
                    </tr>
					</tfoot>		
                	<tbody>
						<?php foreach($data as $num => $val) : ?>
							<tr>
								<td><?php echo ++$num; ?></td>
								<td><?php echo $val->nama_toko ?></td>
								<td><?php echo $val->jenis_service ?></td>
								<td><?php echo $val->keterangan ?></td>
								<td>
								<a class="btn-sm btn-primary" href="#"><i class="fas fa-search"></i></a>
								<a class="btn-sm btn-warning" href="<?php echo site_url("administrator/service/update/" .$val->id_service) ?>"><i class="fas fa-edit"></i></a>
								<a class="btn-sm btn-danger" href="<?php echo site_url("administrator/service/delete/" .$val->id_service) ?>"><i class="fas fa-trash-alt"></i></a>
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

      <!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Insert New Service</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form method="POST" action="<?php echo base_url('administrator/service/insert') ?>">
			            <div class="form-group row">
			                <label for="email" class="col-sm-2 col-form-label">Store</label>
			                <div class="col-sm-10">
			                    <select id="toko_id" name="toko_id" class="form-control" >
			                        <option selected>Choose Store</option>
			                        <?php foreach  ($this->db->get('tb_toko')->result_array() as $num => $val) :  ?>
			                        <option value="<?php echo $val['id_toko'] ?>"><?php echo $val['nama_toko'] ?></option>
			                        <?php endforeach; ?>
			                        <?php echo form_error('toko_id','<small class="text-danger pl-3">','</small>' ); ?>
			                    </select>
			                </div>
			            </div>

			            <div class="form-group row">
			                <label for="jenis_service" class="col-sm-2 col-form-label">Service</label>
			                <div class="col-sm-10">
			                    <input type="text" class="form-control" id="jenis_service" name="jenis_service" placeholder="Service" value="<?php echo set_value('jenis_service') ?>">
			                    <?php echo form_error('jenis_service','<small class="text-danger pl-3">','</small>' ); ?>
			                </div>
			            </div>

			            <div class="form-group row">
			                <label for="keterangan" class="col-sm-2 col-form-label">Information</label>
			                <div class="col-sm-10">
			                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Information"><?php echo set_value('keterangan') ?></textarea>
			                    <?php echo form_error('keterangan','<small class="text-danger pl-3">','</small>' ); ?>
			                </div>
			            </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <input type="submit" class="btn btn-primary" value="Submit"></button>
			      </div>
			  </form>
			    </div>
			  </div>
			</div>