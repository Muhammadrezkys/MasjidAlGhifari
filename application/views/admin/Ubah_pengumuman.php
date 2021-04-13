<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH PENGUMUMAN</h2>
	</div>
	<form class="form-horizontal" method="post" action="<?= site_url('Pengumuman_control/ubah_pengumuman_aksi/'.$pengumuman->id_pengumuman)?>" enctype="multipart/form-data">
		<div class="form-group">
			<label>Judul Pengumuman</label>
			<input type="text" name="judul_pengumuman" required class="form-control" value="<?= $pengumuman->judul_pengumuman; ?>">
			<?= form_error('judul_pengumuman','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Isi Pengumuman</label>
			<textarea type="text" name="isi_pengumuman" required class="form-control" value=""><?= $pengumuman->isi_pengumuman; ?></textarea>
			<?= form_error('isi_pengumuman','<small class="text-danger pl-3">','</small>');?>
		</div>

		<!-- <div class="form-group">
			<label>Gambar</label>
			<input type="text" name="judul_artikel"  class="form-control" value="<?= set_value('judul_artikel')?>">
			<?= form_error('judul_artikel','<small class="text-danger pl-3">','</small>');?>
		</div> -->

		<div class="form-group">
			<label>Tanggal Pengumuman</label>
			<input onfocus="(this.type='date')" required class="form-control" name="tanggal_pengumuman" value="<?= $pengumuman->tanggal ?>">
			<?= form_error('tanggal_pengumuman','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>
</div>