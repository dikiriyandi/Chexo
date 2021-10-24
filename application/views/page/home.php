  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1><?= $web['webs_header'] ?></h1>
          <h2>WEBSITE RESMI SEKOLAH</h2>
          <div class="content">
            <p><br>Mulai latihan soal di e-learning chexo untuk mengerjakan soal-soal dari guru kita.</p>
            <a href="<?= base_url()?>user/login" class="btn-get-started scrollto">E-Learning Chexo</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?= base_url()?>assets/website/home/<?= $web['webs_gambar'] ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="<?= base_url()?>assets/website/tentang/<?= $tentang['tent_gambar'] ?>" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Tentang <br><?= $tentang['tent_judul'] ?></h3>
            <p data-aos="fade-up" data-aos-delay="100">
              <?= $tentang['tent_subjudul'] ?>
            </p><br>
            <div class="row" style="color: #5a6570;">
              <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                <?= $tentang['tent_keterangan'] ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Identitas</h2>
          <p>SMA NEGERI 1 CICALENGKA</p>
        </div>

        <div class="row">
          <div class="col-md-4 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-graduation"></i></div>
              <h4 class="title"><a href="#">Tenaga Pendidik</a></h4>
              <h2><b>74</b></h2>
              <p class="description">Orang</p>
              <p class="description putih">Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor</p>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-star"></i></div>
              <h4 class="title"><a href="#">Terakreditasi</a></h4>
              <h2><b>A</b></h2>
              <p class="description">97,41</p>
              <p class="description putih">Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor</p>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-group"></i></div>
              <h4 class="title"><a href="#">Siswa</a></h4>
              <h2><b>1.257</b></h2>
              <p class="description">Orang</p>
              <p class="description putih">Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <p>SMA NEGERI 1 CICALENGKA</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-alumni">Alumni</li>
              <li data-filter=".filter-prestasi">Prestasi</li>
              <li data-filter=".filter-terbaru">Terbaru</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php foreach ($galeri as $galeri):?>

            <div class="col-lg-4 col-md-6 col-xs-6 portfolio-item filter-<?= $galeri['gale_kategori']?>">
              <div class="portfolio-wrap height">
                <img src="<?= base_url()?>assets/website/galeri/<?= $galeri['gale_gambar'] ?>" class="img-fluid height" alt="">
                <div class="portfolio-info">
                  <h4 class="title"><a href=""><?= $galeri['gale_nama'] ?></a></h4>
                  <p>Galeri SMA Negeri 1 Cicalengka</p>
                </div>
              </div>
            </div>

          <?php endforeach ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>SMA NEGERI 1 CICALENGKA</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. H. Darham Cikopo No.42, Tenjolaya, Kec. Cicalengka, Bandung, Jawa Barat 40395</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>smansacicalengka@yahoo.co.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon/Fax:</h4>
                <p>(022) 7949249</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2169130329607!2d107.83960161431786!3d-6.983708870329174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c5ec61e565ff%3A0x7e9cf17fd4d8300a!2sSMAN%201%20Cicalengka!5e0!3m2!1sid!2sid!4v1618650366462!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="<?= base_url()?>assets/template1/forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-12">
                  <h5><b>Kritik & Saran</b></h5>
                </div> 
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->