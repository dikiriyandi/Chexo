<!-- get data website -->
<?php 

  $website = $this->db->get('website')->row_array();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $website['webs_nama'] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/website/logo/<?= $website['webs_logo'] ?>" rel="icon">
  <link href="<?= base_url()?>assets/website/logo/<?= $website['webs_logo'] ?>" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>assets/template2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/template2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block text-center">
                                <img src="<?= base_url()?>assets/website/logo/logo.png" width="300" style="margin-top: 80px">
                            </div>
                            <div class="col-lg-6">
                                <div id="pesan">
                                    <!-- Gagal -->
                                    <?php if ($this->session->userdata('pesanGagal')){ ?>
                                        <div class="row">
                                            <div class="col-lg-12 mb-4">
                                                <div class="card bg-danger text-white shadow">
                                                    <div class="card-body">
                                                        Gagal
                                                        <div class="text-white-50 small"><?= $this->session->userdata('pesanGagal'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }; ?>
                                </div>
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Selamat Datang</h1>
                                        <small>Siswa/i SMAN 1 Cicalengka</small>
                                    </div>
                                    <form class="user" action="<?= base_url()?>user/login/masuk" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Masukan Nomor Identitas Siswa atau Guru" name="nomor" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                 placeholder="Masukan Password" name="pass" required="">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
                                        <!-- <a href="<?=base_url()?>user/home" class="btn btn-primary btn-user btn-block"> -->
                                            <!-- Masuk
                                        </a> -->
                                    </form>
                                    <!-- <hr> -->
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?=base_url()?>assets/template2/forgot-password.html">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?=base_url()?>assets/template2/register.html">Buat Akun</a>
                                    </div> -->
                                    
                                    <hr>
                                    <div class="copyright text-center my-auto">
                                        &copy; Copyright <strong><span>SMA Negeri 1 Cicalengka</span></strong>. All Rights Reserved
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- pesan -->
    <script>
      setTimeout(function(){
        $("#pesan").fadeOut('slow');
      }, 3000);
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url()?>assets/template2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/template2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url()?>assets/template2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url()?>assets/template2/js/sb-admin-2.min.js"></script>

</body>

</html>