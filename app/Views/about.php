<?=$this->extend('template/index') ?>
<?=$this->section('content') ?>

<!-- ======= Features Section ======= -->
<section id="about" class="features">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <p>About Us</p>
  </header>

  <div class="row">

    <div class="col-lg-6">
      <img src="assets/img/features.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
      <div class="row align-self-center gy-4">

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Hard Worker</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Creative</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Determine</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Niat</h3>
          </div>
        </div>

    </div>

  </div> <!-- / row -->

  <!-- Feature Tabs -->
  <div class="row feture-tabs" data-aos="fade-up">
    <div class="col-lg-6">
      <h3>About Us & About Aplication</h3>

      <!-- Tabs -->
      <ul class="nav nav-pills mb-3">
        <li>
          <a class="nav-link active" data-bs-toggle="pill" href="#tab1">About Us</a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="pill" href="#tab2">About Aplication</a>
        </li>
      </ul>
      <!-- End Tabs -->

      <!-- Tab Content -->
      <!-- Tab 1 -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1">
          <p>We are bunch of student who like to make a website just for fun,nothing can give us more pleasure than happines of our client</p>
        </div>
        <!-- End Tab 1 Content -->
        <!-- Tab 2 -->
        <div class="tab-pane fade show" id="tab2">
          <p>
              Aplikasi ini dibuat untuk mencatat segala perjalanan anda dalam rangka mencegah penyebaran covid-19 menjadi lebih luas,dengan cara mencatat suhu anda di setiap tempat yang anda kunjungi
              lalu berdasarkan suhu tersebut anda bisa menyimpulkan apakah suhu anda berada di angka normal atau di angka yang menunjukan tanda2 covid-19.
          </p>
        </div>
        <!-- End Tab 2 Content -->
      </div>

    </div>

    <div class="col-lg-6">
      <img src="assets/img/features-2.png" class="img-fluid" alt="">
    </div>

  </div>
  <!-- End Feature Tabs -->

</div>

</section><!-- End Features Section -->
</main><!-- End #main -->
<?=$this->endSection(); ?>