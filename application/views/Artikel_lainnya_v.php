 <h2 style="text-align: center"><a style="color: black"><u>ARTIKEL AGAMA</u></a></h2>
 	<div class="container" style="float:right;width: 89%">
 		<div "class="row" style="text-align: right;">
 			<?php foreach($artikel as $art){ ?>
 				<div class="span4" style="margin-bottom: 5px; width: 550px; height: 315px;">
 					<div style="background-color:#8FBC8F;" class="call-action">

 						<h3 style="color:white;"class=" text-left "><b><u><?= $art->judul_artikel; ?></u></b></h3>
 						<!-- <img style="float:left ;width: 20%; margin-right: 10px"src="<?= base_url(''); ?>uploads/<?= $art->gambar ?>" alt="Portfolio name" title="" /> -->
 						<p style="color:white;font-size: 100%"class="text-left"><?= word_limiter($art->isi_artikel,15); ?></p>
 						 <p style="color:white"class="text-left"><i class="icon-calendar"></i><?= $art->tanggal; ?></p> 
 						
 						<a style="background-color: #05a15e; color: white"href="<?= base_url('Artikel_control/detail_artikel/'. $art->id_artikel)?>" class="btn "><b>Baca Selengkapnya</b></a>
 					</div>
 				</div>
 			<?php } ?>
 		</div>
 	</div>
 	<div class="row">
 		
 	</div>
