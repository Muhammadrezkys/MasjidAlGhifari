<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH JADWAL SHOLAT</h2>
	</div>
	<div class="container">
		<?php if (validation_errors())
		$this->form_validation->set_rules('tanggal_jadwal', 'Tanggal jadwal', 'trim|required');
 		$this->form_validation->set_rules('jadwal_subuh', 'jadwal Subuh', 'trim|required');
 		$this->form_validation->set_rules('jadwal_zuhur', 'jadwal Zuhur', 'trim|required');
 		$this->form_validation->set_rules('jadwal_asar', 'jadwal Asar', 'trim|required');
 		$this->form_validation->set_rules('jadwal_magrib', 'jadwal Magrib', 'trim|required');
 		$this->form_validation->set_rules('jadwal_isya', 'jadwal Isya', 'trim|required');
		{?>
			<div class="alert-danger">
				<?php echo validation_errors(); ?>
			</div>
			<?php
		} ?>
	<form class="form-horizontal" method="post" action="<?= site_url('Jadwal_control/tambah_jadwal_aksi')?>" enctype="multipart/form-data">
	
		<div class="form-group">
			<label>Tanggal Jadwal</label>
			<input onfocus="(this.type='date')" class="form-control" name="tanggal_jadwal" value="<?= set_value('tanggal_jadwal')?>">
			<?= form_error('tanggal_jadwal','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Subuh</label>
			<input onfocus="(this.type='time')" class="form-control" name="jadwal_subuh" value="<?= set_value('jadwal_subuh')?>">
			<?= form_error('jadwal_subuh','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Zuhur</label>
			<input onfocus="(this.type='time')" class="form-control" name="jadwal_zuhur" value="<?= set_value('jadwal_zuhur')?>">
			<?= form_error('jadwal_zuhur','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Asar</label>
			<input onfocus="(this.type='time')" class="form-control" name="jadwal_asar" value="<?= set_value('jadwal_asar')?>">
			<?= form_error('jadwal_asar','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Magrib</label>
			<input onfocus="(this.type='time')" class="form-control" name="jadwal_magrib" value="<?= set_value('jadwal_magrib')?>">
			<?= form_error('jadwal_magrib','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Jadwal Isya</label>
			<input onfocus="(this.type='time')" class="form-control" name="jadwal_isya" value="<?= set_value('jadwal_isya')?>">
			<?= form_error('jadwal_isya','<small class="text-danger pl-3">','</small>');?>
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
