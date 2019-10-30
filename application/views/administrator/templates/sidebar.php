<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fab fa-canadian-maple-leaf"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Custom Kit</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/Dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link pb-0" href="<?= base_url('administrator/menu/DaftarToko') ?>">
          <i class="fas fa-fw fa-shopping-basket"></i>
          <span>Daftar Toko Mitra</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('administrator/menu/DaftarToko') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Daftar User</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/menu/DaftarToko') ?>">
          <i class="fas fa-fw fa-asterisk"></i>
          <span>Kritik & Saran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Settings
      </div>

        <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link pb-0" href="charts.html">
          <i class="fas fa-fw fa-eye-slash"></i>
          <span>Ubah Password</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->