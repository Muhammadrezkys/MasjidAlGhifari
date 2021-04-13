<h2 style="text-align: center;"><a style="color: black"><u>PENGUMUMAN</u></a></h2>
	<div class="container" style="float:right;width: 89%">
		<div "class="row" style="text-align: right;">
			<?php foreach($pengumuman as $peng){ ?>
				<div class="span4" style="margin-bottom: 5px; width: 550px; height: 315px;">
					<div style="background-color: #8FBC8F;" class="call-action">
						<h3 style="color:white;"class=" text-left "><b><u><?= $peng->judul_pengumuman; ?></u></b></h3>
						<!-- <img style="text-align: right;width: 50%;"src="<?= base_url(''); ?>uploads/<?= $peng->gambar ?>" alt="Portfolio name" title="" /> -->
						<p style="color:white;"class="text-left"><?= word_limiter($peng->isi_pengumuman,15); ?></p>
						<p style="color:white"class="text-left"><?= $peng->tanggal; ?></p>
						<a style="background-color: #05a15e; color: white"href="<?= base_url('Pengumuman_control/detail_pengumuman/'. $peng->id_pengumuman)?>" class="btn "><b>Baca Selengkapnya</b></a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="row">
	</div>

<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
 -->