<footer class="main-footer">
        <div class="pull-right hidden-xs"><b>Version</b> BETA</div>
        <strong>Copyright &copy; 2019
          <a href="https://adminlte.io">Management Project</a></strong>
      </footer>
    </div>
	<!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url('assets/administrator/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('assets/administrator/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- DataTables -->
	<script src="<?php echo base_url('assets/administrator/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('assets/administrator/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/administrator/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/administrator/'); ?>dist/js/adminlte.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo base_url('assets/administrator/'); ?>bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url('assets/administrator/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap datepicker -->
	<script src="<?php echo base_url('assets/administrator/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<!-- bootstrap color picker -->
	<script src="<?php echo base_url('assets/administrator/'); ?>bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<!-- bootstrap time picker -->
	<script src="<?php echo base_url('assets/administrator/'); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('assets/administrator/'); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap  -->
    <script src="<?php echo base_url('assets/administrator/'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url('assets/administrator/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/administrator/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('assets/administrator/'); ?>bower_components/chart.js/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets/administrator/'); ?>dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url('assets/administrator/'); ?>dist/js/demo.js"></script>

	<script>
  	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
		'paging'      : true,
		'lengthChange': false,
		'searching'   : false,
		'ordering'    : true,
		'info'        : true,
		'autoWidth'   : false
    	})

		$('.timepicker').timepicker({
      showInputs: false
    	})
		
  	})
	</script>
  </body>
</html>
