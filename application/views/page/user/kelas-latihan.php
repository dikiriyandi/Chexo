<style type="text/css">
    .hover-kelas:hover{
        text-decoration: none;
    }
    .geser{
        margin-top: 10px;
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
        <!-- <h1 class="h3 mb-0 text-gray-800">Kelas</h1> -->
        <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahModal">
            <i class="fa fa-plus"></i> Tambah Kelas
        </a> -->
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
                    <!-- <h6><?= $kelas['kels_nama'] ?></h6> -->
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="row">
                                <div class="col-lg-2">
                                    
                                </div>
                                <div class="col-lg-8">

                                <!-- Nilai    -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="font-weight-bold text-center">
                                                <p>Akumulasi Nilai</p>
                                                <h1>70</h1>
                                            </div>
                                        </div>
                                    </div>
                                <!-- end Nilai -->

                                <!-- rincian latihan -->
                                    <div class="card border-bottom-warning py-2 geser">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><?= $latihan['mape_nama'] ?>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $latihan['lath_nama'] ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-clipboard-list fa-2x text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- end rincian latihan -->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p><i class="fa fa-clock"></i> 00:<?= $latihan['lath_menit'] ?>:<?= $latihan['lath_detik'] ?> | <i class="fa fa-clipboard-list"></i> 20 Soal Pilihan Ganda<br><br>
                            <?= $latihan['lath_keterangan'] ?>
                            <br><br>
                            <a class="btn btn-primary" href="<?= base_url()?>soal/test?id=<?= $latihan['lath_id'] ?>">Mulai Latihan</a>
                        </div>
                        <div class="col-lg-12">
                            <br> 
                                <b>Riwayat Latihan:</b>
                                <br>
                            </p>
                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Riwayat Jawaban</th>
                                        <th>Nilai</th>
                                        <th>Tanggal</th>
                                        <th>Tinjau Rekomendasi Materi</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Percobaan 1</td>
                                        <td>70</td>
                                        <td>28 Agustus 2021</td>
                                        <td>
                                            <a href="<?= base_url()?>user/soal/pembahasan" class="btn btn-primary">Tinjau</a>
                                            <!-- <a href="#" class="btn btn-warning">Cetak Hasil Latihan</a> -->
                                        </td>
                                    </tr>
                                </table>
                                Catatan:<br><br>
                                <!-- Kamu harus lebih semangat belajar lagi tentang materi <br>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-danger"></i> Pertumbuhan
                                </span> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(() => {
        
        let base_url = '<?php echo base_url();?>'

        $('#klik_latihan').on('click', function(ev){
            ev.preventDefault();
            $('#myModal3').modal('toggle');
        })
          
    });
</script>