<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH ARTIKEL</h2>
	</div>
	<?php if (validation_errors())
		$this->form_validation->set_rules('judul_artikel', 'Judul', 'trim|required');
 		$this->form_validation->set_rules('isi_artikel', 'Isi Pengumuman', 'trim|required');
 		$this->form_validation->set_rules('tanggal_artikel', 'Tanggal', 'trim|required');
 		// $this->form_validation->set_rules('gambar_pengumuman', 'Gambar', 'trim|required');
	{?>
		<div class="alert-danger">
			<?php echo validation_errors(); ?>
		</div>
		<?php
	} ?>
	
		
		<form class="form-horizontal" method="post" action="<?= site_url('Artikel_control/tambah_artikel_aksi')?>" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Judul Artikel</label>
				<input type="text" name="judul_artikel" class="form-control" value="<?= set_value('judul_artikel')?>">
				<?= form_error('judul_artikel','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Isi Artikel</label>
				<textarea type="text" name="isi_artikel"  class="form-control" value="<?= set_value('isi_artikel')?>"></textarea>
				<?= form_error('isi_artikel','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Gambar</label>
				<input type="file" name="gambar_artikel"  class="form-control" id="image-source" onchange="previewImage();" value="<?= set_value('gambar_artikel')?>">
				<span><img id="image-preview" style="width: 40%;"/></span>
				<?= form_error('gambar_artikel','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Tanggal Artikel</label>
				<input onfocus="(this.type='date')" class="form-control" name="tanggal_artikel" value="<?= set_value('tanggal_artikel')?>">
				<?= form_error('tanggal_artikel','<small class="text-danger pl-3">','</small>');?>
			</div>

			<button class="btn btn-primary btn-user btn-block" type="submit">
				Simpan
			</button>
			
		</form> 
	</div>

<script src="<?php echo base_url(''); ?>assets/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

	function previewImage() {
		document.getElementById("image-preview").style.display = "block";
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("image-preview").src = oFREvent.target.result;
		};
	};
	function previewImage1() {
		document.getElementById("image-preview1").style.display = "block";
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("image-source1").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("image-preview1").src = oFREvent.target.result;
		};
	};
	function previewImage2() {
		document.getElementById("image-preview2").style.display = "block";
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("image-source2").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("image-preview2").src = oFREvent.target.result;
		};
	};
</script>
