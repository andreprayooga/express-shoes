      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input
                type="text"
                name="q"
                class="form-control"
                placeholder="Search..."
                autocomplete="off"
              />
              <span class="input-group-btn">
                <button
                  type="submit"
                  name="search"
                  id="search-btn"
                  class="btn btn-flat"
                >
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo $url == 'Dashboard' ? "active" : ''?>">
                <a href="<?php echo base_url('administrator/dashboard');  ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a>
			</li>
			<li class="<?php echo $url == 'DataToko' ? "active" : ''?>">
				<a href="<?php echo base_url('administrator/datatoko');  ?>">
				<i class="fa fa-umbrella"></i> Toko</a>
			</li>
            <li class="treeview <?php echo $url == 'DataMember' ? "active" : ''?> || <?php echo $url == 'DataPengelola' ? "active" : ''?> || <?php echo $url == 'DataPegawai' ? "active" : ''?>">
              <a href="#">
                <i class="fa fa-user"></i>
                <span> Member Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $url == 'DataMember' ? "active" : ''?>">
					<a href="<?php echo base_url('administrator/datamember'); ?>">
					<i class="fa fa-circle-o"></i> Member</a>
                </li>
                <li class="<?php echo $url == 'DataPengelola' ? "active" : ''?>">
					<a href="<?php echo base_url('administrator/datapengelola'); ?>">
					<i class="fa fa-circle-o"></i> Pengelola</a>
                </li>
                <li class="<?php echo $url == 'DataPegawai' ? "active" : ''?>">
					<a href="<?php echo base_url('administrator/datapegawai'); ?>">
					<i class="fa fa-circle-o"></i> Pegawai</a>
                </li>
              </ul>
			</li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-link"></i>
                <span>Reports</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
					<a href="pages/charts/chartjs.html">
					<i class="fa fa-history"></i>Data Laundry</a>
                </li>
                <li>
					<a href="pages/charts/morris.html">
					<i class="fa fa-history"></i>Data Service</a>
                </li>
              </ul>
            </li>
            <li>
			<li class="header">MAIN MENU</li>
			<li class="<?php echo $url == 'Profile' ? "active" : ''?>">
				<a href="<?php echo base_url('administrator/profile'); ?>">
				<i class="fa fa-cogs"></i>&nbsp; My Profile</a>
			</li>
			<li>
				<a href="pages/charts/morris.html">
				<i class="fa fa-sign-out"></i>&nbsp; Logout</a>
            </li>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>