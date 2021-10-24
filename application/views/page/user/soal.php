<style type="text/css">
        .btn-padding{
                padding-bottom: 10px;
        }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800">Soal</h1> -->
        <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahModal">
            <i class="fa fa-plus"></i> Tambah Kelas
        </a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="col-12">
        <!-- Earnings (Monthly) Card Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-default"><?= $mapel['mape_nama'] ?> <span>- <?= $mapel['lath_nama'] ?></span></h6>
            </div>

            <div class="card-body" id="soal">

                <!-- soal -->

                <?php foreach ($soal_1 as $soal_1): ?>
                    <h2>Pertanyaan No.<?= (int)$uri_segment + 1; ?></h2>
                    <hr>
                    <div>
                        <?= $soal_1['lade_soal'] ?>
                    </div>
                    <hr>
                    <br>

                    <?php $status_jawaban = TRUE; ?>
                        <?php if(!empty($this->session->userdata('jawaban_sementara'))) : ?>
                            
                            <?php foreach($this->session->userdata('jawaban_sementara') as $jawaban_sementara) : ?>


                                <!-- jawaban sementara -->

                                <?php if($jawaban_sementara['id_soal'] === $soal_1['toms_id']) : ?> 
                                    <?php $status_jawaban = TRUE; ?>

                                    <div class="p-2">
                                        <a data-id="<?= $id ?>" data-soal-id="<?= $soal_1['toms_id'] ?>" data-jawaban="a" class="btn btn-default btn-circle border">A</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                        
                                    </div>
                                    <div class="p-2">
                                        <a href="#" class="btn btn-default btn-circle border">B</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                        
                                    </div>
                                    <div class="p-2">
                                        <a href="#" class="btn btn-default btn-circle border">C</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                        
                                    </div>
                                    <div class="p-2">
                                        <a href="#" class="btn btn-default btn-circle border">D</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                        
                                    </div>
                                    <?php if($jawaban_sementara['id_soal'] === $soal_1['toms_id']) break; ?>
                                
                                <?php else: ?>
                                    <?php $status_jawaban = FALSE; ?>
                                <?php endif; ?>

                                <!-- end jawaban sementara -->

                            <?php endforeach;?>

                        <?php else: ?>
                            <?php $status_jawaban = FALSE; ?>
                        <?php endif;?>

                        <?php if($status_jawaban === FALSE) : ?>
                            <div class="p-2">
                                <a data-id="<?= $id ?>" data-soal-id="<?= $soal_1['toms_id'] ?>" data-jawaban="a" class="btn btn-default btn-circle border">A</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                
                            </div>
                            <div class="p-2">
                                <a href="#" class="btn btn-default btn-circle border">B</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                
                            </div>
                            <div class="p-2">
                                <a href="#" class="btn btn-default btn-circle border">C</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                
                            </div>
                            <div class="p-2">
                                <a href="#" class="btn btn-default btn-circle border">D</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                
                            </div>
                        <?php endif; ?>

                <?php endforeach ?>

                <!-- end soal -->

                <br><br>
                <div class="text-center">
                    <a href="#" class="btn btn-light btn-icon-split float-left" hidden="">
                        <span class="icon text-gray-600">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                    </a>
                    <span>1 dari 30</span>
                    <a href="#" class="btn btn-primary btn-icon-split float-right" id="konfirmasi">
                        <span class="icon text-white-600">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="card-body" id="konfirmasi_jawaban" hidden>
                <div class="text-center">
                    <h4>Jawaban Kamu</h4>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 p-2">
                        
                    </div>
                    <div class="col-md-6 p-3 border text-center">
                        <a href="#" id="jawab" class="btn btn-lg border btn-primary btn-circle mb-2">
                            1A
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-circle mb-2">
                            2B
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-primary btn-circle mb-2">
                            3C
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-primary btn-circle mb-2">
                            4D
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-circle mb-2">
                            5E
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-circle mb-2">
                            6A
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-primary btn-circle mb-2">
                            7B
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-primary btn-circle mb-2">
                            8C
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-circle mb-2">
                            9D
                        </a>
                        <a href="#" id="jawab" class="btn btn-lg border btn-primary btn-circle mb-2">
                            10E
                        </a>
                    </div>
                </div>
                <div class="text-center p-4">   
                   <a href="<?= base_url()?>user/soal/selesai" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Selesai</span>
                    </a>
                </div>
            </div>

        </div>

    </div>

    </div>

</div>
<!-- /.container-fluid -->


<!-- js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript">
    $(() => {
        
        let base_url = '<?php echo base_url();?>'

        //menampilkan jawaban soal
        $('#konfirmasi').on('click', function() {
            $('#konfirmasi_jawaban').attr('hidden',false)
            $('#soal').attr('hidden',true)
        });

        //melihat lagi soal
        $('#jawab').on('click', function() {
            $('#konfirmasi_jawaban').attr('hidden',true)
            $('#soal').attr('hidden',false)
        });

    })
</script> -->

<!-- javascript  -->
<script>
    // Menambahkan jumlah total menit batas pengerjaan soal
    // let countDown       = new Date('<?= $this->session->userdata('timer_end') ?>')

    // // Memperbarui hitungan mundur setiap 1 detik
    // let x               = setInterval(() => 
    // {
    //     let now         = new Date().getTime()

    //     // Temukan jarak antara sekarang dan tanggal hitung mundur
    //     let distance    =  countDown.getTime() - now 


        
    //     // Perhitungan waktu untuk hari, jam, menit dan detik
    //     let hours       = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
    //     let minutes     = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
    //     let seconds     = Math.floor((distance % (1000 * 60)) / 1000)

    //     // Keluarkan hasil dalam elemen dengan id = "demo"
    //     document.getElementById("countdown").innerHTML = `<br><br><br>${hours}:${minutes}:${seconds}`
    //     document.getElementById("menit").innerHTML = `${minutes}`
    //     document.getElementById("detik").innerHTML = `${seconds}`

    //     // Jika hitungan mundur selesai, tulis beberapa teks 
    //     if (distance < 0) 
    //     {
    //         clearInterval(x)

    //         document.getElementById("countdown").innerHTML = "EXPIRED"
            
    //         alert('Waktu pengerjaan soal sudah habis')
            
    //         window.location.href                        = '<?= base_url() ?>soal_test/simpan_jawaban'
    //     }

    // }, 1000)











    // HREF add #soal
    load()

    function load()
    {
        document.querySelectorAll('[href]').forEach(data =>
        {
            if(data.href.includes('user/soal/test'))
            {
                data.href += '#soal'
            }
        })
    }

    // Check
    let jawaban
    let id_soal
    let id

    document.querySelectorAll('[data-jawaban]').forEach(data =>
    {
        data.addEventListener('click', (ev) =>
        {
            ev.preventDefault()

            white()

            // Get jawaban dan id soal
            jawaban             = data.getAttribute('data-jawaban')
            id_soal             = data.getAttribute('data-soal-id')
            id                  = data.getAttribute('data-id')

            // Rubah warna background
            data.style.background   = '#bde7f5'
            
            // Kirim jawaban
            // send_jawaban()
        })
    })

    // Clear jawaban
    const clear                 = document.getElementById('clear')
    clear.addEventListener('click', ev =>
    {
        ev.preventDefault()

        clear.getAttribute('data-soal-id')
    })

    // Putih
    function white()
    {
        // COCOK
        document.querySelectorAll('[data-id]').forEach(data =>
        {
            data.style.background   = '#ffffff'
        })
    }

    // Kirim jawaban
    function send_jawaban()
    {
        let fd              = new FormData()
        fd.append('id', id);
        fd.append('id_soal', id_soal)
        fd.append('jawaban', jawaban)

        fetch('<?= base_url() ?>soal_test/jawab',
        {
            method: 'POST',
            body: fd
        })
    }












    // Next Previous action
    const Next                  = document.getElementById('Next')
    const Previous              = document.getElementById('Previous')
    Next.addEventListener('click', ev =>
    {
        ev.preventDefault()

        window.location.href    = Next.href
    })
    Previous.addEventListener('click', ev =>
    {
        ev.preventDefault()

        window.location.href    = Previous.href
    })
</script>
<!-- end javascript -->