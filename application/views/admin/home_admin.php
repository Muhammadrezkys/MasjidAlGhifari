                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Selamat Datang! </h4>
                    <p>Selamat Datang di Sistem Informasi Masjid Al Ghifari</p>
                    <?php if ($this->session->userdata('role_id')==1){?>
                      <p>Anda login sebagai <b>Admin Utama</b></p>
                    <?php } else if ($this->session->userdata('role_id')==2){?>
                       <p>Anda login sebagai <b>Bendahara</b></p>
                    <?php } else if ($this->session->userdata('role_id')==3){?>
                      <p>Anda login sebagai <b>Anggota Bidang Ubudiyah</b></p>
                    <?php } ?>
                    <hr>
                  </div> 
                  

                  <!-- Content Row -->
                  <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <!-- <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Kegiatan</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kegiatan;?></div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <!-- <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Artikel</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $artikel;?></div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>

                    
                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <!-- <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Pengumuman</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pengumuman;?></div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
      
                <!-- Content Row -->

                <div class="row">

                  <!-- Area Chart -->
                

                  <!-- Pie Chart -->

                </div>

                <!-- Content Row -->
                <div class="row">

                  <!-- Content Column -->
                  <div class="col-lg-6 mb-4">


              

                  </div>

                  <div class="col-lg-6 mb-4">




                  </div>
                </div>

              </div>
              <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
