  <?php foreach($artikel as $art) { ?>
   <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <div class="heading">
              <h3><?= $art->judul_artikel; ?></h3>

            </div>
              <!-- <div class="span4"style="float:right;">
            <aside style="background-color: #8FBC8F;">
              <div >
                <h4 style="color:white;"class="rheading" >ARTIKEL<span></span></h4>
                <ul class="cat">
                  <li><a style="color:white;" href="<?= base_url('Artikel_control/detail_artikel/'. $art->id_artikel)?>"><?= $art->judul_artikel; ?></a></li>
                  <a style="color:white;" href="<?= base_url('Artikel_control/detail_artikel/'. $art->id_artikel)?>"><?= $art->tanggal   ; ?></a>
                  
                </ul>
              </div>
              
               
              </div>
            </aside>
          </div> -->
          <div class="clearfix">
          </div>
          <div class="row">
            <div class="row-vertical" > 
              <div class="span6">
                <!-- start flexslider -->
                <div class="flexslider">
                 <!--  <ul class="slides">
                    <li>
                      <img src="assets/img/slides/flexslider/img1.jpg" alt="" />
                    </li>
                    <li>
                      <img src="assets/img/slides/flexslider/img2.jpg" alt="" />
                    </li>
                    <li>
                      <img src="assets/img/slides/flexslider/img3.jpg" alt="" />
                    </li> -->
                  </ul>
                </div>

                <div>
                 <img style="float:left;width: 50%;margin-right: 10px"src="<?= base_url(''); ?>uploads/<?= $art->gambar ?>" alt="Portfolio name" title="" />
               </div>
               <div style="text-align: justify;">
                 <p style="font-size: 120%"> <?= nl2br($art->isi_artikel); ?> </p>
               </div>
             </div>
           </div>
           <div class="row-vertical">
            <div class="span4">
             <div class="span4"style="float:right;">
              <aside style="background-color: #8FBC8F;margin-top: 20px">
                <div >
                  <h4 style="color:white;"class="rheading text-center" >ARTIKEL LAINNYA<span></span></h4>
                  <ul class="cat">
                    <?php foreach($semua_artikel as $sa) { ?>
                      <li <?php $art->id_artikel == $sa->id_artikel ?print('hidden'):print('');?> ><a style="color:white;" href="<?= base_url('Artikel_control/detail_artikel/'. $sa->id_artikel)?>"><?= $sa->judul_artikel; ?></a></li>
                      <a <?php $art->id_artikel == $sa->id_artikel ?print('hidden'):print('');?> style="color:white;" href="<?= base_url('Artikel_control/detail_artikel/'. $sa->id_artikel)?>"><?= $sa->tanggal   ; ?></a>
                    <?php } ?>
                  </ul>
                </div>
              </aside>
            </div>
            
          </div>
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
