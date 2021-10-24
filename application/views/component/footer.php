<!-- get data website -->
<?php 

  $website = $this->db->get('website')->row_array();
  $ekstrakurikuler = $this->db->get('ekstrakurikuler')->result_array();

 ?>

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h4>Subscribe</h4>
          <p>SMA NEGERI 1 CICALENGKA</p>
          <form action="<?= base_url()?>Subscribe/simpan" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h5><b><?= $website['webs_nama_footer'] ?></b></h5><br>
          <?= $website['webs_footer'] ?>
        </div>

        <div class="col-lg-1"></div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Sejarah</a></li>
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Kelulusan</a></li> -->
            <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Ekstrakurikuler</h4>
          <ul>
            <?php foreach ($ekstrakurikuler as $ekstrakurikuler):?>
              <li><i class="bx bx-chevron-right"></i> <a href="#"><?= $ekstrakurikuler['ekst_nama'] ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Sosial Media</h4>
          <p>SMA Negeri 1 Cicalengka</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; <?= $website['webs_copyright'] ?>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
      <!-- Designed by <a href="<?= base_url()?>assets/template1/https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </div>
</footer><!-- End Footer -->