      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          	<div class="copyright text-center my-auto">
            	<span>Copyright &copy; Manajemen Proyek Kelompok 8</span>
          	</div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>

				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="<?= base_url('Auth/logout') ?>">Logout</a>
					</div>
				</div>
			</div>
		</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/administrator/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/administrator/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Mapbox -->
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <script src="<?php echo base_url('assets/administrator/dist/js/leaflet.ajax.js')  ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/administrator/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url ('assets/administrator/dist/js/sb-admin-2.min.js') ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/administrator/vendor/chart.js/Chart.min.js') ?>"></script>
	<script src="<?= base_url('assets/administrator/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('assets/administrator/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>


  	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/administrator/dist/js/demo/chart-area-demo.js') ?>"></script>
	<script src="<?= base_url('assets/administrator/dist/js/demo/chart-pie-demo.js') ?>"></script>
	<script src="<?= base_url('assets/administrator/dist/js/demo/datatables-demo.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/administrator/datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>"></script>

	  <script type="text/javascript">
	  	$('.custom-file-input').on('change', function() {
			  let fileName = $(this).val().split('\\').pop();
			  $(this).next('.custom-file-label').addClass("selected").html(fileName);
		  });

        $(function () {
			$('#jam_buka').datetimepicker();
			$('#jam_tutup').datetimepicker();
        });

		var mymap = L.map('mapid').setView([-7.945917, 112.618320], 30);

		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 18,
			id: 'mapbox/streets-v11',
			accessToken: 'pk.eyJ1IjoiYW5kcmVwcmF5b29nYSIsImEiOiJjazJvd3B4NzkwZnp0M21wYmxqbTJlZHdiIn0.8mU4ihR8qSuqLihMdLyKCg'
		}).addTo(mymap);

		function popUp(f,l){
			var out = [];
			if (f.properties){
				for(key in f.properties){
					out.push(key+": "+f.properties[key]);
				}
				l.bindPopup(out.join("<br />"));
			}
		}	
		var jsonTest = new L.GeoJSON.AJAX(["<?php echo base_url('assets/administrator/json/indonesia-prov.geojson') ?>"],{onEachFeature:popUp}).addTo(mymap);
    </script>

</body>

</html>
