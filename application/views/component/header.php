<!-- get data website -->
<?php 

  $website = $this->db->get('website')->row_array();

 ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <!-- <h1 class="text-light"><a href="<?= base_url()?>assets/template1/index.html"></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?= base_url()?>home"><img src="<?= base_url()?>assets/website/logo/<?= $website['webs_logo'] ?>" alt="" class="img-fluid"><span> <?= $website['webs_nama'] ?></span></a>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link <?php if($page === 'component/home'){ echo 'active'; }?>" href="<?= base_url()?>home">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
        <li><a class="nav-link <?php if($page === 'component/sejarah'){ echo 'active'; }?>" href="<?= base_url()?>sejarah">Sejarah</a></li>
        <!-- <li><a class="nav-link <?php if($page === 'component/kelulusan'){ echo 'active'; }?>" href="<?= base_url()?>kelulusan">Kelulusan</a></li> -->
        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        <li><a class="getstarted scrollto" href="<?= base_url()?>user/login">E-Learning</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->