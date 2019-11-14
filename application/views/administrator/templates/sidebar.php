<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
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
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Main Navigation
      </div> 

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $url == 'Dashboard' ? "active" : ''?>">
        <a class="nav-link pb-0" href="<?= base_url('administrator/Dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

            <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?php echo $url == 'DataToko' ? "active" : ''?> || <?php echo $url == 'DataUser' ? "active" : ''?> || <?php echo $url == 'DataPengelola' ? "active" : ''?> || <?php echo $url == 'DataPegawai' ? "active" : ''?>" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-chess-queen"></i>
          <span>Master Data</span>
        </a>

        <div id="collapseUtilities" class="collapse <?php echo $url == 'DataToko' ? "show" : ''?> || <?php echo $url == 'DataUser' ? "show" : ''?> || <?php echo $url == 'DataPengelola' ? "show" : ''?> || <?php echo $url == 'DataPegawai' ? "show" : ''?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilities :</h6>
            <a class="collapse-item <?php echo $url == 'DataToko' ? "active" : ''?>" href="<?= base_url('administrator/DataToko') ?>"><i class="fas fa-fw fa-cart-arrow-down"></i>&nbsp&nbsp Data Toko</a>
            <a class="collapse-item <?php echo $url == 'DataUser' ? "active" : ''?>" href="<?= base_url('administrator/DataUser') ?>"><i class="fas fa-fw fa-users"></i>&nbsp&nbsp Data User</a>
            <a class="collapse-item <?php echo $url == 'DataPengelola' ? "active" : ''?>" href="<?= base_url('administrator/DataPengelola') ?>"><i class="fas fa-fw fa-user-cog"></i>&nbsp&nbsp Data Pengelola</a>
            <a class="collapse-item <?php echo $url == 'DataPegawai' ? "active" : ''?>" href="<?= base_url('administrator/DataPegawai') ?>"><i class="fas fa-fw fa-user-check"></i>&nbsp&nbsp Data Pegawai</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Main Menu
      </div>

                  <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo $url == 'DataLaundry' ? "active" : ''?> || <?php echo $url == 'DataService' ? "active" : ''?>">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-chess-knight"></i>
          <span>Reports</span>
        </a>
        
        <div id="collapseTwo" class="collapse <?php echo $url == 'DataLaundry' ? "show" : ''?> || <?php echo $url == 'DataService ' ? "show" : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Reports :</h6>
            <a class="collapse-item <?php echo $url == 'DataLaundry' ? "active" : ''?>" href="<?php echo base_url('administrator/DataLaundry') ?>"><i class="fas fa-fw fa-list"></i>&nbsp&nbsp Data Laundry</a>
            <a class="collapse-item <?php echo $url == 'DataService' ? "active" : ''?>" href="<?php echo base_url('administrator/DataService') ?>"><i class="fas fa-fw fa-list"></i>&nbsp&nbsp Data Service</a>
          </div>
        </div>
      </li>

        <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo $url == 'Profile' ? "active" : ''?>">
        <a class="nav-link pb-0 pt-0" href="<?= base_url('administrator/Profile') ?>">
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
