<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH FOTO</h2>
	</div>
	<div class="container">
		<?php if (validation_errors())
		$this->form_validation->set_rules('nama_foto', 'Judul', 'trim|required');
		$this->form_validation->set_rules('gambar_artikel', 'Gambar', 'required|trim');
		{?>
			<div class="alert-danger">
				<?php echo validation_errors(); ?>
			</div>
			<?php
		} ?>
		<form method="post" action="<?php echo base_url(''); ?>index.php/Foto_control/tambah_foto_aksi" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Nama Foto</label>
				<input type="text" name="nama_foto" class="form-control" value="<?= set_value('nama_foto')?>">
				<?= form_error('nama_foto','<small class="text-danger pl-3">','</small>');?>
			</div>

			

			<div class="form-group">
				<label>Gambar</label>
				<input type="file" name="gambar"  class="form-control" id="image-source" onchange="previewImage();" value="<?= set_value('gambar')?>">
				<span><img id="image-preview" style="width: 40%;"/></span>
				<?= form_error('gambar','<small class="text-danger pl-3">','</small>');?>
			</div>

			
			<button class="btn btn-primary btn-user btn-block" type="submit">
				Simpan
			</button>
			
		</form> 
	</div>
</div>
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
