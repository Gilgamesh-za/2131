<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
        <span>Peduli Diri</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#private">Private</a></li>
          <li><a class="nav-link scrollto" href="index.php/login">Login</a></li>
          <li><a class="nav-link scrollto" href="/logout">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Aplikasi yang menyediakan segala catatan perjalanan anda demi membantu mengatasi wabah covid-19</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Melayani masyarakat sepenuh hati</h2>
          <h2 data-aos="fade-up" data-aos-delay="400">Siap mulai mencatat semua perjalanan anda anda?</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(
              'assets/img/hero-img.png'
          ) ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
    <!-- ======= Values Section ======= -->
    <section id="private" class="private">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Private Section</h2>
          <p>Profil,Catatan dll. menjadi satu!</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="<?= base_url(
                  'assets/img/values-1.png'
              ) ?>" class="img-fluid">
              <h3>Profile</h3>
              <p>Atur sendiri profile anda senyaman mungkin</p>
              <a href="index.php/tambah_user" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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
              <h3>Catatan</h3>
              <p>Catat semua hal yang ingin anda catat!</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="<?= base_url(
                  'assets/img/values-3.png'
              ) ?>" class="img-fluid" alt="">
              <h3>a</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quaerat porro, earum aliquam fugit cumque voluptatibus qui. Rem temporibus ut odio molestiae accusantium a excepturi quaerat magni! Dolores, nesciunt reiciendis!</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    
</section>
  </main><!-- End #main -->