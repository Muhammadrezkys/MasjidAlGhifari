<!-- <?php foreach($pengumuman as $peng){?>
	<section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <div class="heading">
              <h4><?= $peng->judul_pengumuman; ?></h4>
            </div>
            <div class="row">
              <div class="span8">
                <p style="text-align: justify;">
                  <?= nl2br($peng->isi_pengumuman); ?>
                </p>
              </div>
             
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <?php } ?> -->
    <?php foreach($pengumuman as $peng){?>
  <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span12">
            <article>
              <div class="heading">
                <h3><?= $peng->judul_pengumuman; ?></h3>
               
              </div>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="row-vertical">
                <div class="span8">
                  <!-- start flexslider -->
                  <div class="flexslider">
                    <!-- <ul class="slides">
                      <li>
                        <img src="assets/img/slides/flexslider/img1.jpg" alt="" />
                      </li>
                      <li>
                        <img src="assets/img/slides/flexslider/img2.jpg" alt="" />
                      </li>
                      <li>
                        <img src="assets/img/slides/flexslider/img3.jpg" alt="" />
                      </li>
                    </ul> -->
                  </div>
                  <div>
                     <img style="float:left;width: 50%;margin-right: 10px"src="<?= base_url(''); ?>uploads/<?= $peng->gambar ?>" alt="Portfolio name" title="" />
                  </div>
                 <div style="text-align: justify;">
                   <p style="font-size: 120%"> <?= nl2br($peng->isi_pengumuman); ?> </p>
                  </div>
                </div>
                </div>
                 <div class="row-vertical">
            <div class="span4">
             <div class="span4"style="float:right;">
              <aside style="background-color: #8FBC8F;margin-top: 20px">
                <div >
                  <h4 style="color:white;"class="rheading text-center" >PENGUMUMAN LAINNYA<span></span></h4>
                  <ul class="cat">
                    <?php foreach($semua_pengumuman as $sp) { ?>
                      <li <?php $peng->id_pengumuman == $sp->id_pengumuman ?print('hidden'):print('');?> ><a style="color:white;" href="<?= base_url('Pengumuman_control/detail_pengumuman/'. $sp->id_pengumuman)?>"><?= $sp->judul_pengumuman; ?></a></li>
                      <a <?php $peng->id_pengumuman == $sp->id_pengumuman ?print('hidden'):print('');?> style="color:white;" href="<?= base_url('Pengumuman_control/detail_pengumuman/'. $sp->id_pengumuman)?>"><?= $sp->tanggal; ?></a>
                    <?php } ?>
                  </ul>
                </div>
              </aside>
            </div>
            
          </div>
        </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>