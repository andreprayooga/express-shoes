        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-1">
			<div>
				<div class="float-left">
				<h6 class="font-weight-bold text-primary my-3"><?php echo $title; ?></h6>
				</div>

				<div class="float-right">
				<a href="<?php echo base_url('administrator/datatoko/insert'); ?>" class="btn btn-sm btn-primary mt-2"><i class="fas fa-plus-circle mr-1"></i>Tambah Data</a>
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
						<th>No. Telp</th>
						<th>Jam Buka</th>
						<th>Jam Tutup</th>
						<th>Aksi</th>
					</tr>
					</thead>
					
                	<tfoot>
                  	<tr>
					  	<th>No</th>
						<th>Nama Toko</th>
						<th>Email</th>
						<th>No. Telp</th>
						<th>Jam Buka</th>
						<th>Jam Tutup</th>
						<th>Aksi</th>
                    </tr>
					</tfoot>
					
                	<tbody>
					  
                	</tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
