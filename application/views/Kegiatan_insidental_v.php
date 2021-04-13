 
 <h2 style="text-align: center;"><a href="#" style="color: black;">KEGIATAN INSIDENTAL</a></h2>   
 
<section id="maincontent">
  <div class="container">
    <div class="row">
      <ul class="portfolio-area da-thumbs">
        <?php foreach ($kegiatan as $keg) { ?>
          <li class="portfolio-item" data-id="id-0">
            <div class="span3">
              <div class="image-wrapp" style="width: 250px">
                <img  src="<?= base_url(''); ?>uploads/<?= $keg->gambar ?>" alt="Portfolio name" title="" />
                <article class="da-animate da-slideFromRight" >
                  <a href="<?= base_url('Kegiatan_insidental_control/detail_kegiatan/'. $keg->id_kegiatan)?>">
                    <p><?=$keg->judul_kegiatan; ?></p>
                    <div class="btn">Lihat Kegiatan</div>
                  </a>
                  <div class="hidden-tablet">
                  </div>
                </article>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    </section>
