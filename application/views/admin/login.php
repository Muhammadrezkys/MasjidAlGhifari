
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin-Login</title>

  <!-- Custom fonts for this template-->
  
  <link href="<?= base_url('assets1/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets1/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>
<body background="<?= base_url('uploads/masjid.JPG')?>">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-5" style="opacity: .9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" >
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">LOGIN ADMINISTRATOR</h1>
                    <?= $this->session->flashdata('pesan')?>
                  </div>
                  <form action="<?= site_url('auth/proses_login')?>" method="post" class="user">
                    <div class="form-group">
                      <input type="nama" class="form-control form-control-user" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Nama">
                      <?= form_error('nama', '<div class="text-danger small ml-3">','</div>')?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pass" id="pass" placeholder="Password">
                      <?= form_error('pass', '<div class="text-danger small ml-3">','</div>')?>
                    </div>
                    <div class="form-group">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                  <hr>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets1/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets1/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets1/js/sb-admin-2.min.js')?>"></script>

</body>

</html>
