<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> UBAH KEGIATAN KEGIATAN INSIDENTAL</h2>
	</div>
	<?php if (validation_errors())
    	 $this->form_validation->set_rules('judul_kegiatan', 'Judul', 'trim|required');
 		 $this->form_validation->set_rules('isi_kegiatan', 'Isi Kegiatan', 'trim|required');
 		 $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal', 'trim|required');
 		 
    {?>
        <div class="alert-danger">
            <?php echo validation_errors(); ?>
        </div>
        <?php
    } ?>
	<form class="form-horizontal" method="post" action="<?= site_url('Kegiatan_rutin_control/ubah_rutin_aksi/'. $kegiatan->id_kegiatan)?>" enctype="multipart/form-data">
		<div class="form-group">
			<label>Judul Kegiatan</label>
			<input type="text" name="judul_kegiatan" required class="form-control" value="<?= $kegiatan->judul_kegiatan; ?>">
			<?= form_error('judul_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>
		
		<div class="form-group">
			<label>Isi Kegiatan</label>
			<textarea type="text" name="isi_kegiatan" required class="form-control" value=""><?= $kegiatan->isi_kegiatan; ?></textarea>
			<?= form_error('isi_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<!-- <div class="form-group">
			<label>Gambar</label><br>
			<?php if($kegiatan->gambar != null) { ?>
				<img src="<?=base_url('uploads/'.$kegiatan->gambar)?>" style="width: 40%">
			<?php } ?>
			<input type="file" name="gambar_kegiatan"  class="form-control" style="" id="image-source" onchange="previewImage();" value="<?= $kegiatan->gambar; ?>"
			<span><img id="image-preview" style="width: 40%;"/></span>
			<?= form_error('gambar_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>  -->

		<div class="form-group">
			<label>Tanggal Kegiatan</label>
			<input onfocus="(this.type='date')" required class="form-control" name="tanggal_kegiatan" value="<?= $kegiatan->tanggal ?>">
			<?= form_error('tanggal_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
	</form>
</div>