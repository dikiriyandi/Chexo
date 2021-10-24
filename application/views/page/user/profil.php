<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil <?= ($user['user_status'] == 2) ? 'Siswa' : 'Guru'; ?>
        </h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <!-- <div class="row" id="pesan2" hidden="true">
                <div class="col-lg-12">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body text-center">
                            <i class="fa fa-check-circle fa-5x"></i><br><br>
                            <h4>
                                SELAMAT ANDA BERHASIL MENGISI PERSYARATAN DAFTAR ULANG
                            </h4>
                            <div class="text-white-50 small"></div><br>
                            <div class="text-white-50 small">ANDA TERDAFTAR SEBAGAI SISWA/I SMAN 1 CICALENGKA TAHUN AJARAN 2021/2022</div><br>
                        </div>
                    </div>
                </div>
            </div> -->
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
            <div class="p-5">
                <form class="user" action="<?= base_url()?>user/Profil/simpan_Profil" method="POST">
                    <input type="hidden" name="id" value="<?= $user['user_id'] ?>">
                    <p>Data <?= ($user['user_status'] == 2) ? 'Siswa' : 'Guru'; ?></p>
                    <hr>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama" value="<?= $user['user_nama'] ?>" required name="nama">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nomor" value="<?= $user['user_nomor'] ?>" required name="nomor" readonly>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control" placeholder="Tanggal Lahir" value="<?= $user['user_tanggal_lahir'] ?>" required name="tanggal_lahir">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select required name="jenis_kelamin" class="form-control">
                                <option disabled="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control" placeholder="No Telepon" value="<?= $user['user_no_telp'] ?>" required name="no_telp">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="email" class="form-control" placeholder="Email" value="<?= $user['user_email'] ?>" required name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Alamat" name="alamat"><?= $user['user_alamat'] ?></textarea>
                    </div>
                    <!-- <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan Asal Sekolah" required name="asal_sekolah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan NIK" required name="nik">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan No Kartu Keluarga" required name="no_kk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan Tempat Lahir" required name="tempat">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control"
                            placeholder="Masukan Tanggal Lahir" required name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan No Reg. Akta Kelahiran" required name="no_akta">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan Agama" required name="agama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan No Seri Ijazah" required name="no_ijazah">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Masukan No Seri SKHUN" required name="no_skhun">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control"
                            placeholder="Masukan Nama Ibu Kandung" required name="nama_ibu_kandung">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Anak Ke" required name="anak_ke">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="dari jumlah saudara" required name="dari">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <textarea class="form-control"
                            placeholder="Alamat" required name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Tempat Tinggal" required name="tempat_tinggal">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Moda Transportasi" required name="moda_transportasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="No KIP" required name="no_kip">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="No PKH" required name="no_pkh">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="No KKS" required name="no_kks">
                        </div>
                    </div>
                    <p>Identitas Orang Tua</p>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Nama Ayah" required name="nama_ayah">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="NIK Ayah" required name="nik_ayah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Pendidikan Ayah" required name="pendidikan_ayah">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Tahun Lahir Ayah" required name="tl_ayah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Pekerjaan Ayah" required name="pekerjaan_ayah">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Penghasilan Ayah" required name="penghasilan_ayah">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Nama Ibu" required name="nama_ibu">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="NIK Ibu" required name="nik_ibu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Pendidikan Ibu" required name="pendidikan_ibu">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Tahun Lahir Ibu" required name="tl_ibu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Pekerjaan Ibu" required name="pekerjaan_ibu">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Penghasilan Ibu" required name="penghasilan_ibu">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Nama Wali" name="nama_wali">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="NIK Wali" name="nik_wali">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Pendidikan Wali" name="pendidikan_wali">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Tahun Lahir Wali" name="tl_wali">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Pekerjaan Wali" name="pekerjaan_wali">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Penghasilan Wali" name="penghasilan_wali">
                        </div>
                    </div>
                    <br>
                    <p>Kontak Siswa</p>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="No Telepon" required name="no_telp">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="No HP" required name="no_hp">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"
                        placeholder="Email" required name="email">
                    </div>
                    <p>Data Lain-lain</p>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Tinggi Badan (Cm)" required name="tb">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Berat Badan (Kg)" required name="bb">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Lingkaran Kepala (Cm)" required name="lk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Jarak Rumah (Km/m)" required name="jarak">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control"
                            placeholder="Waktu Tempuh (Jam/Menit)" required name="waktu">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="number" class="form-control"
                            placeholder="Jumlah Saudara (Orang)" required name="jumlah">
                        </div>
                    </div> -->

                    <br>
                    <p>Ubah Password</p>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" placeholder="Password" id="password" name="password">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" placeholder="Konfirmasi Password" id="
                            konfirmasi_password" name="konfirmasi_password">
                        </div>
                    </div>
                    <!-- <button type="submit" id="submitt" class="btn btn-primary btn-user btn-block">
                        Simpan Data
                    </button> -->
                    <button type="submit" id="simpan" class="btn btn-primary btn-user btn-block">
                        Simpan Data
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(() => {
        
        let base_url = '<?php echo base_url();?>'

        tampil()

        function tampil() {
            $.ajax({
                
                method:'POST',
                url: base_url + 'user/profil/daftarulang',
                data: {
                    nomor : '<?= $user["user_nomor"] ?>'
                }

            }).done((data) =>{
                let data2 = JSON.parse(data)
                if (data2 != null) {
                  $('#pesan2').attr('hidden',false)
                  $('#submitt').attr('hidden',true)
                }
            })
        }
          
    });
</script>