<style type="text/css">
  p{
    margin:0 0 0 0;
  }
  .height{
    height: 267px;
  }
  .orange{
    color: white;
    background-color: #eb5d1e;
  }
  .orange:hover{
    background-color: #ee7843;
    color: white;
  }
</style>

<main id="main">

  <!-- ======= About Section ======= -->
  <section class="about">
    <div class="container">

      <div class="row justify-content-between">
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
          <img src="<?= base_url()?>assets/website/back-kelulusan.jpg" class="img-fluid" alt="" data-aos="zoom-in">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0">
          <h3 data-aos="fade-up">Cek Kelulusan Siswa/i Kelas XII </h3>
          <div class="row" data-aos="fade-up"><br>
            <div class="col-lg-12">
              <h4>Masukan NIS</h4>
              <p>SMA NEGERI 1 CICALENGKA</p>
              <br>
              <form action="<?= base_url()?>kelulusan/lulus" method="post">
                <input type="number" name="email" class="form-control">
                <div style="padding-top: 20px;">
                  <button type="submit" class="btn orange">Cek NIS</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
    </div>
  </section><!-- End About Section --> 

</main><!-- End #main -->