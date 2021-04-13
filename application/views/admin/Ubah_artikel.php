<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH ARTIKEL</h2>
	</div>
	<?php if (validation_errors())
		$this->form_validation->set_rules('judul_artikel', 'Judul', 'trim|required');
		$this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'trim|required');
		$this->form_validation->set_rules('tanggal_artikel', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('gambar_artikel', 'Gambar', 'required|trim');
		{?>
			<div class="alert-danger">
				<?php echo validation_errors(); ?>
			</div>
			<?php
		} ?>
	<form class="form-horizontal" method="post" action="<?= site_url('Artikel_control/ubah_artikel_aksi/'.$artikel->id_artikel)?>" >
		<div class="form-group">
			<label>Judul Artikel</label>
			<input type="text" name="judul_artikel" required class="form-control" value="<?= $artikel->judul_artikel; ?>">
			<?= form_error('judul_artikel','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Isi Artikel</label>
			<textarea type="text" name="isi_artikel" required class="form-control" value=""><?= $artikel->isi_artikel; ?></textarea>
			<?= form_error('isi_artikel','<small class="text-danger pl-3">','</small>');?>
		</div>

		 <!-- <div class="form-group">
			<label>Gambar</label>
			<input type="file" name="gambar_artikel"  class="form-control" value="<?= set_value('gambar_artikel')?>">
			<?= form_error('gambar_artikel','<small class="text-danger pl-3">','</small>');?>
		</div>  -->

		<div class="form-group">
			<label>Tanggal Artikel</label>
			<input onfocus="(this.type='date')" required class="form-control" name="tanggal_artikel" value="<?= $artikel->tanggal ?>">
			<?= form_error('tanggal_artikel','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>
</div>