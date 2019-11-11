    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-exclamation-triangle"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Express</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $url == 'Dashboard' ? "active" : ''?>">
        <a class="nav-link" href="<?= base_url('administrator/Dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Master
      </div> 

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item  <?php echo $url == 'DataToko' ? "active" : ''?>">
        <a class="nav-link pb-0" href="<?= base_url('administrator/DataToko') ?>">
          <i class="fas fa-fw fa-shopping-basket"></i>
          <span>Data Toko</span></a>
      </li>
      <li class="nav-item  <?php echo $url == 'DataUser' ? "active" : ''?>">
        <a class="nav-link" href="<?= base_url('administrator/DataUser') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data User</span></a>
      </li>

            <!-- Divider -->
      <hr class="sidebar-divider">

            <!-- Heading -->
      <div class="sidebar-heading">
        Utilities
      </div>

            <li class="nav-item <?php echo $url == 'DataPengelola' ? "active" : ''?>">
        <a class="nav-link pb-0" href="<?= base_url('administrator/DataPengelola') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Pengelola Toko</span></a>
      </li>
      <li class="nav-item <?php echo $url == 'DataPegawai' ? "active" : ''?>">
        <a class="nav-link" href="<?= base_url('administrator/DataPegawai') ?>">
          <i class="fas fa-fw fa-asterisk"></i>
          <span>Data Pegawai Toko</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Settings
      </div>

        <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo $url == 'Profile' ? "active" : ''?>">
        <a class="nav-link pb-0" href="<?= base_url('administrator/Profile') ?>">
          <i class="fas fa-fw fa-user-shield"></i>
          <span>My Profile</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Auth/logout') ?>">
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