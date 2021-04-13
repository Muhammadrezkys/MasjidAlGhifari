<div class="container-fluid">
	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH PENGUMUMAN</h2>
	</div>
	<?php if (validation_errors())
		$this->form_validation->set_rules('judul_pengumuman', 'Judul', 'trim|required');
 		$this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'trim|required');
 		$this->form_validation->set_rules('tanggal_pengumuman', 'Tanggal', 'trim|required');
 		// $this->form_validation->set_rules('gambar_pengumuman', 'Gambar', 'trim|required');
	{?>
		<div class="alert-danger">
			<?php echo validation_errors(); ?>
		</div>
		<?php
	} ?>
	<form class="form-horizontal" method="post" action="<?= site_url('Pengumuman_control/tambah_pengumuman_aksi')?>" enctype="multipart/form-data" >

		<div class="form-group">
			<label>Judul Pengumuman</label>
			<input type="text" name="judul_pengumuman" class="form-control" value="<?= set_value('judul_pengumuman')?>">
			<?= form_error('judul_pengumuman','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Isi Pengumuman</label>
			<textarea type="text" name="isi_pengumuman"  class="form-control" value="<?= set_value('isi_pengumuman')?>"></textarea>
			<?= form_error('isi_pengumuman','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Gambar</label>
			<input type="file" name="gambar_pengumuman"  class="form-control" id="image-source" onchange="previewImage();" value="<?= set_value('gambar_pengumuman')?>">
					<span><img id="image-preview" style="width: 40%;"/></span>
			<?= form_error('gambar_pengumuman','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Tanggal Pengumuman</label>
			<input onfocus="(this.type='date')" class="form-control" name="tanggal_pengumuman" value="<?= set_value('tanggal_pengumuman')?>">
			<?= form_error('tanggal_pengumuman','<small class="text-danger pl-3">','</small>');?>
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