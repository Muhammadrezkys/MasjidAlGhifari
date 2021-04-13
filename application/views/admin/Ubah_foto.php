<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH FOTO</h2>
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
	<form class="form-horizontal" method="post" action="<?= site_url('Foto_control/ubah_foto_aksi/'.$foto->id_foto)?>" >
		<div class="form-group">
				<label>Nama Foto</label>
				<input type="text" name="nama_foto" class="form-control" value="<?= set_value('nama_foto')?>">
				<?= form_error('nama_foto','<small class="text-danger pl-3">','</small>');?>
			</div>
				<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>
</div>