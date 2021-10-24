<style type="text/css">
    .hover-kelas:hover{
        text-decoration: none;
    }

</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelas</h1>
        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahModal">
            <i class="fa fa-plus"></i> Tambah Kelas
        </a>
    </div>

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
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->

        <?php foreach ($kelas as $key): ?>

            <div class="col-xl-4 col-md-6 mb-4">
                <a href="<?= base_url()?>user/kelas/detail" class="hover-kelas">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Lutfi Al Yamin</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Biologi Kelas XII</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>   
            
        <?php endforeach; ?>

        <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?= base_url()?>user/kelas/detail" class="hover-kelas">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Beni</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Bahasa Indonesia Kelas X</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>   

        <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?= base_url()?>user/kelas/detail" class="hover-kelas">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Gugun Gunawan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Matemaika Kelas XI</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>   

        <!-- <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?= base_url()?>user/kelas/detail" class="hover-kelas">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Maman</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Bahasa Inggris Kelas X</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>      -->  

    </div>

</div>
<!-- /.container-fluid -->

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url()?>user/Kelas/cariKelas" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="kode" 
                            placeholder="Masukan Kode Kelas" required="">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Cari Kelas
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>