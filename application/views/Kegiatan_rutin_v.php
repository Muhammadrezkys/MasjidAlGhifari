 <section class="sections swatch-gray section-text-no-shadow section-inner-no-shadow section-normal section opaque" data-label>
  <div class="background-overlay gri-overlay-0" style="background-color: rgba(0,0,0,0);"></div>
  <div class="container">
    <div class="row vertical-top">
      <div class="col-md-1 text-default small-screen-default">
        <ul class="portfolio-area da-thumbs">
         
         <h2 style="text-align: center;">KEGIATAN RUTIN</h2>
                </div>
            <?php 
            foreach ($kegiatan as $rut) : ?>
                <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" style="margin-left:90px; width: 90%" data-os-animation-delay="0s" style="animation-delay: 0s;">
                  <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                  </div>

                  <h3 style="font-size: 130%"><li class="icon-circled icon-48 icon-magic active icon" style="background-color: #8FBC8F;"></li> <?=$rut->judul_kegiatan; ?></h3>
                  <p style="text-align: justify;"><?=$rut->isi_kegiatan; ?></p>

                </li>
                <?php endforeach;?>
                <!-- <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" style="margin-left:90px; width: 95%"data-os-animation-delay="0s" style="animation-delay: 0s;">
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
                  <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" style="margin-left:90px; width: 40%" data-os-animation-delay="0s" style="animation-delay: 0s;">
                    <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                    </div>
                    <h3><i class="icon-circled icon-plane"></i>Program Pembinaan Qur'an dan Beasiswa</h3>
                    <p>gshhshshshshhshshshhshshshsh</p>
                  </li>

                  <li class="element-no-top element-short-bottom os-animation animated fadeInRight" data-os-animation="fadeInRight" data-os-animation-delay="0s" style="margin-left:45px; width: 45%" style="animation-delay: 0s;">
                    <div class="features-list-icon  box-animate" style="background-color: #d13e00;stroke: #ffffff" data-animation="bounce">
                    </div>
                    <h3><i class="icon-circled icon-plane"></i>Program Pembinaan Qur'an dan Beasiswa</h3>
                    <p>gshhshshshshhshshshhshshshsh</p>
                  </li> --> 
            <!-- <div class="span6">

                <h4 class="rheading">Tab<span></span></h4>
                
                <div class="tabbable tabs-top">
                  <ul class="nav nav-tabs">
                    <?php 
            foreach ($kegiatan as $rut) : ?>
                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Tab one</a></li>

                    <?php endforeach;?> 
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="one">
                      <p>
                        <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
                      </p>
                      <p>
                        No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
                      </p>
                    </div>
                    
                  </div>
                </div>
                <!-- end tab --> -->
              
              </div>
          </ul>                
        </div>
      </div>            
    </div>          
  </section> 
        