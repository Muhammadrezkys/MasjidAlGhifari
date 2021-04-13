<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH DAFTAR IMAM</h2>
	</div>
	<div class="container">
		<?php if (validation_errors())
		$this->form_validation->set_rules('tanggal_imam', 'Tanggal Imam', 'trim|required');
 		$this->form_validation->set_rules('imam_subuh', 'Imam Subuh', 'trim|required');
 		$this->form_validation->set_rules('imam_zuhur', 'Imam Zuhur', 'trim|required');
 		$this->form_validation->set_rules('imam_asar', 'Imam Asar', 'trim|required');
 		$this->form_validation->set_rules('imam_magrib', 'Imam Magrib', 'trim|required');
 		$this->form_validation->set_rules('imam_isya', 'Imam Isya', 'trim|required');
		{?>
			<div class="alert-danger">
				<?php echo validation_errors(); ?>
			</div>
			<?php
		} ?>
		<form class="form-horizontal" method="post" action="<?= site_url('Imam_control/tambah_imam_aksi')?>" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Tanggal Imam</label>
				<input onfocus="(this.type='date')" class="form-control" name="tanggal_imam" value="<?= set_value('tanggal_imam')?>">
				<?= form_error('tanggal_imam','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Imam Subuh</label>
				<input type="text" name="imam_subuh" class="form-control" value="<?= set_value('imam_subuh')?>">
				<?= form_error('imam_subuh','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Imam Zuhur</label>
				<input type="text" name="imam_zuhur" class="form-control" value="<?= set_value('imam_zuhur')?>">
				<?= form_error('imam_zuhur','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Imam Asar</label>
				<select class= "form-control" style="width: 100%" name="imam_asar" required>
					<option selected disabled>Pilih Imam</option>
					<option>Budi</option>
					<option>Burhan</option>
					<option>Bambang</option>
					<option>Sutiyoso</option>
				</select>
				<?= form_error('imam_asar','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Imam Magrib</label>
				<select class= "form-control" style="width: 100%" name="imam_magrib" required>
					<option selected disabled>Pilih Imam</option>
					<option>Budi</option>
					<option>Burhan</option>
					<option>Bambang</option>
					<option>Sutiyoso</option>
				</select>
				<?= form_error('imam_magrib','<small class="text-danger pl-3">','</small>');?>
			</div>

			<div class="form-group">
				<label>Imam Isya</label>
				<select class= "form-control" style="width: 100%" name="imam_isya" required>
					<option selected disabled>Pilih Imam</option>
					<option>Budi</option>
					<option>Burhan</option>
					<option>Bambang</option>
					<option>Sutiyoso</option>
				</select>
				<?= form_error('imam_isya','<small class="text-danger pl-3">','</small>');?>
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
