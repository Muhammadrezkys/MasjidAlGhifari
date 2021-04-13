<section id="intro">

  <div class="container">
    <div class="row">
      <div class="span12">
        <!-- Place somewhere in the <body> of your page -->
          <div id="mainslider" class="flexslider"  >
            <ul class="slides">
              <li data-thumb="<?= base_url('assets/assets/img/slides/flexslider/ghifari4.jpg')?>">
                <img src="<?= base_url('assets/assets/img/slides/flexslider/ghifari4.jpg')?>" alt="" />

              </li>
              <li data-thumb="<?= base_url('assets/assets/img/slides/flexslider/ghifari5.jpg')?>">
                <img src="<?= base_url('assets/assets/img/slides/flexslider/ghifari5.jpg')?>" alt="" />

              </li>
              <li data-thumb="<?= base_url('assets/assets/img/slides/flexslider/ghifari6.jpg')?>">
                <img src="<?= base_url('assets/assets/img/slides/flexslider/ghifari6.jpg')?>" alt="" />

              </li>
              <li data-thumb="<?= base_url('assets/assets/img/slides/flexslider/ghifari7.jpg')?>">
                <img src="<?= base_url('assets/assets/img/slides/flexslider/ghifari7.jpg')?>" alt="" />

              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row-vertical">
        <div class="span12" style="margin-bottom: 10px">

          <div class="text">
            <center><h2><a href="<?= site_url('Home/Kegiatan_insidental_v')?>" style="color: black">DAFTAR KEGIATAN INSIDENTAL</a></h2>
             <ul class="portfolio-area da-thumbs">
              <?php foreach ($kegiatan as $keg) { ?>
                <li class="grid-col_inner" data-id="id-0">
                  <div class="span3">
                    <div class="image-wrapp" style="width: 250px">
                      <img src="<?= base_url(''); ?>uploads/<?= $keg->gambar ?>" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" >
                        <a href="<?= base_url('Kegiatan_insidental_control/detail_kegiatan/'. $keg->id_kegiatan)?>">
                          <div class="btn">Lihat kegiatan</div>
                        </a>
                        <div class="hidden-tablet">
                        </div>
                      </article>
                    </div>
                  </div>

                  <!--<div class="C">
                    portfolio-item
                    <div class="grid-col_inner">
                      <div class="main-cat-item">
                        <a class="item-image" href="#">
                         <div class="span5">
                          <div class="image-wrapp" style="width: 250px">
                            <img src="<?= base_url(''); ?>uploads/<?= $keg->gambar ?>" alt="Portfolio name" title="" />
                            <article class="da-animate da-slideFromRight" >
                              <a href="<?= base_url('kegiatan/detail_kegiatan/'. $keg->id_kegiatan)?>">
                                <div class="btn">Lihat Kegiatan</div>
                              </a>
                              <div class="hidden-tablet">
                              </div>
                            </article>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>-->
              </li>
            <?php } ?>
          </ul>
        </div>



      </div>
       <!--  <div class="span12" style="margin-bottom: 10px">
          <div class="text-center">
            <h2>VIDEO KAJIAN</h2>

            <iframe width="250" height="200" src="https://www.youtube.com/embed/vYTpwrUryE8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe width="250" height="200" src="https://www.youtube.com/embed/pNGjbxEk_iY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe width="250" height="200" src="https://www.youtube.com/embed/K9_fComhklQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div> -->
      </div>

      <section class="sections swatch-gray section-text-no-shadow section-inner-no-shadow section-normal section opaque" data-label>
        <div class="background-overlay gri-overlay-0" style="background-color: rgba(0,0,0,0);"></div>
        <div class="container">
          <div class="row vertical-top">
            <div class="col-md-1 text-default small-screen-default">
              <ul class="portfolio-area da-thumbs">
                <div class="text-center">
                  <h2>KEGIATAN RUTIN</h2>
                </div>
                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" style="margin-left:90px; width: 90%" data-os-animation-delay="0s" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>

                  <h3 style="font-size: 120%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li> Kajian Rutin</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>

                </li>
                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" style="margin-left:90px; width: 95%"data-os-animation-delay="0s" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>
                  <h3 style="font-size: 120%; width: 100%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li> Kajian Tematik Tentang Pernikahan</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>
                </li>

                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight"style="margin-left:90px; width: 95%" data-os-animation-delay="0s" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>
                  <h3 style="font-size: 120%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li>Buka Puasa Senin dan Kamis</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>
                </li>

                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" data-os-animation-delay="0s" style="margin-left:90px; width: 95%" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>

                  <h3 style="font-size: 120%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li>Pesantren Mahasiswa</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>
                </li>
                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight"style="margin-left:90px; width: 95%" data-os-animation-delay="0s" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>

                  <h3 style="font-size: 120%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li>Olahraga Futsal</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>
                </li>

                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" data-os-animation-delay="0s" style="margin-left:90px; width: 95%" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>

                  <h3 style="font-size: 120%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li>Olahraga Memanah</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>
                </li>
                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight"style="margin-left:90px; width: 95%" data-os-animation-delay="0s" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>

                  <h3 style="font-size: 120%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li>Olahraga Berkuda</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>
                </li>

                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" data-os-animation-delay="0s" style="margin-left:90px; width: 95%" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>
                  <h3 style="font-size: 120%"><li class="icon-circled icon-48 icon-magic active icon " style="background-color: #8FBC8F;"></li>Olahraga MMA</h3>
                  <p style="text-align: justify;">Program yang dilaksanakan setiap hari Selasa Pukul 15.30-17.00 WIB oleh Ustadz Moh. Rohma Rozikin, M.Pd bertempat di lt.2 Masjid. Bisa diikuti oleh jama’ah umum baik dari Universitas Brawijaya maupun dari luar.</p>
                </li>
                 <!--  <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" style="margin-left:90px; width: 40%" data-os-animation-delay="0s" style="animation-delay: 0s;">
                    <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                    </div>
                    <h3><i class="icon-circled icon-plane"></i>Program Pembinaan Qur'an dan Beasiswa</h3>
                    <p>gshhshshshshhshshshhshshshsh</p>
                  </li> -->

                 <!--  <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" data-os-animation-delay="0s" style="margin-left:45px; width: 45%" style="animation-delay: 0s;">
                    <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                    </div>
                    <h3><i class="icon-circled icon-plane"></i>Program Pembinaan Qur'an dan Beasiswa</h3>
                    <p>gshhshshshshhshshshhshshshsh</p>
                  </li> -->

                </ul>                
              </div>
            </div>            
          </div>          
        </section>


        <div class="row">
          <div class="row-vertical">           
            <div class="span6" style="margin-bottom: 10px;">
              <div style="background-color: #8FBC8F;width: 425px; height: 370px"class="call-action">
                <h2 style="color: white"class="text-center">
                  <u>ARTIKEL AGAMA</u>
                </h2>
                <?php foreach($artikel as $art){ ?>
                  <div>
                    <a style="color:white"href="<?= base_url('Artikel_control/detail_artikel/'. $art->id_artikel)?>" class="h3 card-title"><b><u><?= $art->judul_artikel; ?></u></b></a>
                    <p style="color:black"class="text-left" ><?= $art->tanggal; ?></p>
                  </div>
                <?php } ?>
                <a style="width: 400px; height: 20px; margin-left: 3px;background-color: #05a15e; color: white"href="<?= base_url('Artikel_control/semua_artikel')?>" class="btn" >Artikel Lainnya</a>
              </div>
            </div>
          </div>
          <div class="row-vertical">
           <div class="span6" style="margin-bottom: 30px">
            <div style="background-color: #8FBC8F; width: 440px; height: 370px"class="call-action">
              <h2 style="color:white;"class="text-center">
               <u>PENGUMUMAN</u>
             </h2>
             <?php foreach($pengumuman as $peng){ ?>
              <div>
                <a style="color:white;"href="<?= base_url('Pengumuman_control/detail_pengumuman/'. $peng->id_pengumuman)?>" class="h3 card-title"><b><u><?= $peng->judul_pengumuman; ?></u></b></a>
                <p style="color: black;"class="text-left"><?= $peng->tanggal; ?></p>
              </div>
            <?php } ?>
            <a style=" width: 400px; height: 20px; margin-left: 3px; background-color: #05a15e; color:white"href="<?= base_url('Pengumuman_control/semua_pengumuman')?>" class="btn  " >Pengumuman Lainnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
