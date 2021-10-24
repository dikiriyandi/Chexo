<!-- get data website -->
<?php 

  $website = $this->db->get('website')->row_array();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $website['webs_header'] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/website/logo/<?= $website['webs_logo'] ?>" rel="icon">
  <link href="<?= base_url()?>assets/website/logo/<?= $website['webs_logo'] ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/template1/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/template1/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/template1/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/template1/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/template1/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/template1/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/template1/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.1.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style type="text/css">
  p{
    margin:0 0 0 0;
  }
  .height{
    height: 267px;
  }
  .putih{
    color: white;
  }
</style>

<body>

  <?php $this->load->view('component/header'); ?>

  <?php $this->load->view($page); ?>

  <?php $this->load->view('component/footer'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/template1/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url()?>assets/template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/template1/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url()?>assets/template1/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/template1/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>assets/template1/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>assets/template1/assets/js/main.js"></script>

</body>

</html>