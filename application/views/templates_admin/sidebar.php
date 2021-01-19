<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/assets_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PABRIK BUS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
       
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?php echo base_url('Dasboard_admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dasboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Dasboard_admin/data_pemesanan')  ?>" class="nav-link">
              <i class="nav-icon fas fa-align-left"></i>
              <p>
                Pemesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Dasboard_admin/data_body') ?>" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Type Body Bus
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Dasboard_admin/data_customer') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Dasboard_admin/data_bus') ?>" class="nav-link">
            <i class="nav-icon far fa-file-alt"></i>
              <p>
                 Data Bus Selesai Dibuat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Login') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>