      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Manajemen Proyek Kelompok 8</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

        <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/administrator/vendor/jquery/jquery.min.js') ?>"></script>
  <script>
    $(".nav-item").on("click", function(e){
      $("li.nav-item").removeClass("active");
      $(this).addClass("active");
    });
  </script>
  <script src="<?= base_url('assets/administrator/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/administrator/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url ('assets/administrator/dist/js/sb-admin-2.min.js') ?>"></script>