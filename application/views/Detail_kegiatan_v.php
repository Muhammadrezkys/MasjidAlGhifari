<?php foreach($kegiatan as $keg){?>
	<section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span7">
          <article>
            <img src="<?= base_url(''); ?>uploads/<?= $keg->gambar ?>" alt="Portfolio name" title="" / style="width: 100%;"  >           
            <div class="span12">      
             <div class="heading">
              <h4><?= $keg->judul_kegiatan; ?></h4> 
            </div>        
              <p style="text-align: justify;">
                <?= nl2br($keg->isi_kegiatan); ?>
              </p>
            </div>
            </div>

          <!-- <div class="span5">
              <aside>
                <div class="widget">
                  <div class="project-widget">
                    <h4 class="rheading">Portfolio detail<span></span></h4>
                    <ul class="project-detail">
                      <li><label>Project name :</label> Clean business theme</li>
                      <li><label>Category :</label> Web design</li>
                      <li><label>Project date :</label> <?=$keg->tanggal; ?></li>
                      <li><label>Project link :</label><a href="#">www.somelink.com</a></li>
                    </ul>
                  </div>
                </div>
              </aside>
            </div> -->
          </article>
        </div>
          <!-- end article full post -->
        </div>
      </div>
    </section>
    <?php } ?>