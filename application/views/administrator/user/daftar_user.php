        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
          </div>
					
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <button class="btn btn-sm btn-primary float-right" href=""><i class="fas fa-plus-square mr-2"></i>Add Data</button>
              <button class="btn btn-sm btn-success" href=""><i class="fas fa-file-excel mr-2"></i>Excel</button>
              <button class="btn btn-sm btn-danger" href=""><i class="fas fa-file-pdf mr-2"></i>PDF</button>
              <button class="btn btn-sm btn-warning" href=""><i class="fas fa-print mr-2"></i>Print</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No. Telp</th>
											<th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No. Telp</th>
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
