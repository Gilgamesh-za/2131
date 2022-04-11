<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>

<!-- ======= Hero Section ======= -->
<section id="home" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Aplikasi yang menyediakan tempat untuk mencatat semua catatan perjalanan anda demi membantu menuju ke kehidupan yang anda inginkan</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Melayani masyarakat sepenuh hati</h2>
        <h2 data-aos="fade-up" data-aos-delay="400">Siap mulai mencatat semua perjalanan anda?</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="/scan_catatan" class="btn-get-started nav-link scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Get Started</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url('assets/img/hero-img.png') ?>" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->


<!-- ======= Values Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Private Section</h2>
      <p>Tentang Aplikasi,News,Table Perjalanan</p>
    </header>

    <div class="row">

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="box">
          <img src="<?= base_url('assets/img/values-3.png') ?>" class="img-fluid" alt="">
          <h3>Catatan Perjalanan</h3>
          <p>Sebuah catatan yang berfungsi sebagai catatan perjalanan anda</p>
          <a href="/table_perjalanan" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="<?= base_url(
                      'assets/img/values-2.png'
                    ) ?>" class="img-fluid" alt="">
          <h3>News</h3>
          <p>Cari tahu tentang semua berita yang sedang terjadi di negara kita</p>
          <a href="/news" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <img src="<?= base_url('assets/img/values-1.png') ?>" class="img-fluid">
          <h3>Tentang Aplikasi</h3>
          <p>Cari tahu apa sebenarnya fungsi dan maksud dari aplikasi ini</p>
          <a href="/about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- End Values Section -->

</main>
<!-- End #main -->



</main><!-- End #main -->
<?= $this->endSection(); ?>