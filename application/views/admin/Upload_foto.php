<head>
 <title>Galeri</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/css/now-ui-kit.css?v=1.1.0">
</head>
<div class="container-fluid">
  <div class="alert- alert success" role='alert'>
    <i class="fas fa-univeristy"></i> UPLOAD FOTO
  </div>
  <body style="background-color: #ebecf1;">

    <main id="main">
      <div class="main-panel mb-4">
       <div class="content">
        <div class="col-md-12">
          <div class="card text-center">
           <div class="card-body" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
            <form method="post" action="<?php echo base_url(''); ?>index.php/Foto_control/kirim_foto" enctype="multipart/form-data">
              <input type="file" name="foto_galeri" class="form-control" id="image-source" onchange="previewImage();" placeholder="ukuran maks. 2 MB" required>
              <span><img id="image-preview" style="width: 40%;"/></span>
              <div>
                <input type="submit" name="insert" value="Upload Foto" class="btn btn-info mt-2 mb-2" style="text-align: center;">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-panel">
   <div class="content">
    <div class="col-md-12">
      <div class="card text-center">

        <div class="tab-content">
          <div class="tab-pane fade show active">

            <div class="card-body">
              <div class="row justify-content-center">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                      <tr>
                        <th width="20px">No.</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($foto as $ft) : ?>
                        <tr> 
                          <td><?php echo $no++ ?></td>
                          <td><figure><img src="<?= base_url(''); ?>uploads/<?= $ft->nama_foto; ?> " style="width: 40%; float: left;" class="img-fluid"></figure></td>
                          <td>
                            <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#Mymodal<?= $ft->id_foto ?>" <?php $this->session->userdata('role_id')==3?print(''):print('hidden');?>>
                              <i class="fas fa-trash"></i>
                            </button> 
                          </td>               
                        </tr>
                        <div class="modal fade" id="Mymodal<?= $ft->id_foto ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">Apakah anda yakin menghapus foto ini?</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                                <a id="btn-logout"class="btn btn-primary" href="<?= site_url('Foto_control/hapus_foto_aksi/'.$ft->id_foto);?>">Ya, saya yakin</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endforeach;?>           
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
</body>
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

</html>
