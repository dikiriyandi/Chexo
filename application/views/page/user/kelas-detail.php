<style type="text/css">
    .hover-kelas:hover{
        text-decoration: none;
    }

</style>

<?php 
$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= $url?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-800">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>

    <div id="pesan">

        <!-- Berhasil -->
        <?php if ($this->session->userdata('pesanBerhasil')){ ?>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            Berhasil
                            <div class="text-white-50 small"><?= $this->session->userdata('pesanBerhasil'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }; ?>

        <!-- Gagal -->
        <?php if ($this->session->userdata('pesanGagal')){ ?>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            Gagal
                            <div class="text-white-50 small"><?= $this->session->userdata('pesanBerhasil'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }; ?>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6><?= $kelas['kels_nama'] ?></h6>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <?= $kelas['kels_keterangan'] ?>
                            <br>
                            <hr>
                        </div>

                        <?php if ($latihan == null): ?>
                            <div class="col-lg-12 text-warning text-center">
                                <p><span><i class="fa fa-clipboard-list"></i></span> Belum ada latihan</p>
                            </div>
                        <?php endif ?>

                        <?php $no=1; foreach ($latihan as $latihan): ?>
                            <div class="col-md-4 mb-4">
                                <a href="<?= base_url()?>user/Kelas/kelas_latihan/<?= $latihan['lath_id'] ?>" class="hover-kelas">
                                    <div class="card <?php if($no == 1) echo 'border-bottom-warning'; elseif($no == 2) echo 'border-bottom-danger'; else echo 'border-bottom-primary'; ?> h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col">
                                                    <div class="text-xs font-weight-bold <?php if($no == 1) echo 'text-warning'; elseif($no == 2) echo 'text-danger'; else echo 'text-primary'; ?> text-uppercase mb-1">
                                                        <?= $kelas['kels_nama'] ?></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $latihan['lath_nama'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <?php if ($no == 3) {
                    
                                $no = 0;

                            } ?>

                        <?php $no++; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->