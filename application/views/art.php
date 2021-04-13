<!--  <h2 style="text-align: center"><a style="color: black"><u>ARTIKEL AGAMA</u></a></h2>
 	<div class="container" style="float:right;width: 89%">
 		<div "class="row" style="text-align: right;">
 			<?php foreach($artikel as $art){ ?>
 				<div class="span4" style="margin-bottom: 10px; width: 40%; height: 50%;">
 					<div style="background-color:#8FBC8F;" class="call-action">

 						<h3 style="color:white;"class=" text-left "><b><u><?= $art->judul_artikel; ?></u></b></h3>
 						<img style="float:left ;width: 20%; margin-right: 10px"src="<?= base_url(''); ?>uploads/<?= $art->gambar ?>" alt="Portfolio name" title="" />
 						<p style="color:white;"class="text-left"><?= word_limiter($art->isi_artikel,15); ?></p>
 						<p style="color:white"class="text-left"><?= $art->tanggal; ?></p>
 						<a style="background-color: #6495ED; color: white"href="<?= base_url('Artikel_control/detail_artikel/'. $art->id_artikel)?>" class="btn "><b>Baca Selengkapnya</b></a>
 					</div>
 				</div>
 			<?php } ?>
 		</div>
 	</div>
 	<div class="row">
 		
 	</div>
 -->
 <!-- <div class="container" style="float:right;width: 85%">
  <div class="row-fluid" >
   <?php foreach($artikel as $art){?>
    <div class="span12" style="margin-bottom: 10px; width: 45%; height: 40%;">
      <img src="assets/img/dummies/img1.jpg" alt="" />
      <div class="box" style="background-color:#8FBC8F;" class="call-action">
        <div class="divcenter">

          <h3 style="color:white;"class=" text-left "><b><u><?= $art->judul_artikel; ?></u></b></h3><br>
          <br>
          <p style="color:white;"class="text-left"><?= word_limiter($art->isi_artikel,30); ?></p>
          <p style="color:white"class="text-left"><?= $art->tanggal; ?></p>

        </div>

        <a style="background-color: #6495ED; color: white"href="<?= base_url('Artikel_control/detail_artikel/'. $art->id_artikel)?>" class="btn "><b>Baca Selengkapnya</b></a>
      </div>
    </div> 
  <?php } ?>        
</div>
</div>
<div class="row">

</div> -->

<section id="maincontent">
  <div class="container">
        <div class="row-vertical">
      <ul class="portfolio-area da-thumbs">
        <li class="portfolio-item" data-id="id-0" data-type="web">
          <div class="span4">
             <?php foreach ($foto as $fot){ ?>
            <div class="thumbnail">
              <div class="image-wrapp" style="width: 350px">
                
               <img src="<?= base_url(''); ?>uploads/<?= $fot->gambar ?>" alt="Portfolio name" title="" />
               <figcaption><?= $fot->nama_foto; ?></figcaption> 
                <article class="da-animate da-slideFromRight">
                  <a class="zoom" data-pretty="prettyPhoto" href="<?= base_url(''); ?>uploads/<?= $fot->gambar ?> ">
                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                  </a>
                  <a href="portfolio-detail.html">
                    <i class="icon-link icon-rounded icon-48 active"></i>
                  </a>
                  <div class="hidden-tablet">
                    <p>
                       <figcaption><?= $fot->nama_foto; ?></figcaption> 
                    </p>
                  </div>
                </article>
              </div>
              
            </div>
             <?php } ?>
          </div>
        </li> 
      </ul>
    </div>
      </div>
</section>