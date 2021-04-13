<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url ('home_admin')?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MASJID AL GHIFARI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url ('home_admin')?>">
          <i class="fas fa-mosque"></i>
          <span>Beranda</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-money-bill-wave-alt"></i>
            <span>Keuangan</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <i class="far fa-money-check-edit"></i>
              <h6 class="collapse-header">Sub Keuangan:</h6>
              <a class="collapse-item" href="<?php echo base_url('index.php/admin/Keuangan_harian_v')?>">Laporan Keuangan Harian</a>
              <a class="collapse-item" href="<?php echo base_url('index.php/admin/Keuangan_bulanan_v')?>">Laporan Keuangan Bulanan</a>
            </div>
          </div>
        </li>
        
        <!-- Nav Item - Pages Collapse Menu -->
       <!--  <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Login Screens:</h6>
              <a class="collapse-item" href="login.html">Login</a>
              <a class="collapse-item" href="register.html">Register</a>
              <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
              <a class="collapse-item" href="404.html">404 Page</a>
              <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
          </div>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/foto_v')?>">
           <i class="fas fa-image"></i>
           <span>Foto Kegiatan</span></a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Kegiatan_insidental_v')?>">
           <i class="far fa-newspaper"></i>
           <span>Kegiatan Insidental</span></a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Kegiatan_rutin_v')?>">
           <i class="far fa-newspaper"></i>
           <span>Kegiatan Rutin</span></a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Jadwal_v')?>">
           <i class="far fa-newspaper"></i>
           <span>Jadwal Sholat</span></a>
         </li>
        
         <li class="nav-item">
          <a class="nav-link" href="<?= base_url('index.php/admin/Pengumuman_v')?>">
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/admin/Artikel_v')  ?>">
              <i class="far fa-newspaper"></i>
              <span>Artikel</span></a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/admin/Imam_v')  ?>">
              <i class="fas fa-praying-hands"></i>
              <span>Imam Sholat</span></a>
            </li>

             <!-- Nav Item - Tables -->
             <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
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

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>

                  
                  <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                          <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin keluar dari sistem?</div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                            <a id="btn-logout"class="btn btn-primary" href="<?= site_url('auth/logout')?>">Ya, saya yakin</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script >
                      function logoutConfirm(url){
                        $('#btn-logout').attr('href', url);
                        $('#logoutModal').modal();
                      }
                    </script>

                  </ul>

                </nav>
