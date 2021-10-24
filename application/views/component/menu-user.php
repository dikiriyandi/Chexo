<!-- get data website -->
<?php 

  $website = $this->db->get('website')->row_array();

 ?>

<style type="text/css">
    .logo{
        width: 45px;
        height: 45px;
    }
</style>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>user/Home">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url()?>assets/website/logo/logo.png" class="logo">
        </div>
        <div class="sidebar-brand-text mx-3"><?= $website['webs_nama'] ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if($menu == 'home') echo 'active'?>">
        <a class="nav-link" href="<?= base_url()?>user/Home">
            <i class="fa fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php if($menu == 'kelas') echo 'active'?>">
        <a class="nav-link collapsed" href="<?= base_url()?>user/Kelas">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kelas</span>
        </a>
    </li>
    <li class="nav-item <?php if($menu == 'profil') echo 'active'?>">
        <a class="nav-link collapsed" href="<?= base_url()?>user/Profil">
            <i class="fa fa-user"></i>
            <span>Profil</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->