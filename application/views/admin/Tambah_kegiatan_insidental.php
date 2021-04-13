<div class="container-fluid"> 

	<div class="text-left"> 
		<h2 class="h2 text-gray-900 mb-1"> TAMBAH KEGIATAN INSIDENTAL</h2>
	</div>
	<div class="container">
    <?php if (validation_errors())
     $this->form_validation->set_rules('judul_kegiatan', 'Judul', 'required|trim');
 		 $this->form_validation->set_rules('isi_kegiatan', 'Isi Kegiatan', 'required|trim');
 		 $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal', 'required|trim');
 		 
    {?>
        <div class="alert-danger">
            <?php echo validation_errors(); ?>
        </div>
        <?php
    } ?>
   <!--  <form action="<?php echo base_url()?>Kegiatan_insidental_control/tambah_kegiatan_aksi" method="post"> -->
	<form class="form-horizontal" method="post" action="<?= site_url('Kegiatan_insidental_control/tambah_kegiatan_aksi')?>" enctype="multipart/form-data"> 
		<div class="form-group">
			<label>Judul Kegiatan</label>
			<input type="text" name="judul_kegiatan" class="form-control" value="<?= set_value('judul_kegiatan')?>">
			<?= form_error('judul_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Isi Kegiatan</label>
			<textarea type="text" name="isi_kegiatan"  class="form-control" value="<?= set_value('isi_kegiatan')?>"></textarea>
			<?= form_error('isi_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Gambar</label>
			<input type="file" name="gambar_kegiatan"  class="form-control" id="image-source" onchange="previewImage();" value="<?= set_value('gambar_kegiatan')?>">
					<span><img id="image-preview" style="width: 40%;"/></span>
			<?= form_error('gambar_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<div class="form-group">
			<label>Tanggal Kegiatan</label>
			<input onfocus="(this.type='date')" class="form-control" name="tanggal_kegiatan" value="<?= set_value('tanggal_kegiatan')?>">
			<?= form_error('tanggal_kegiatan','<small class="text-danger pl-3">','</small>');?>
		</div>

		<button class="btn btn-primary btn-user btn-block" type="submit">
			Simpan
		</button>
		
	 </form>


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
