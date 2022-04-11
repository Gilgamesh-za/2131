<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aplikasi Peduli Diri</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url('assets/img/logo.png'); ?>" alt="">
        <span>Peduli Diri</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#values">Private</a></li>
          <li><a class="nav-link scrollto" href="index.php/login">Login</a></li>
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
          <img src="<?= base_url('assets/img/hero-img.png'); ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="container mt-3 h-100">

            <header class="section-header">
              <h2>Catatan perjalanan</h2>
              <p>Tabel yang berfungsi sebagai catatan perjalanan anda</p>
            </header>

            <!-- CARD UTAMA -->
            <div class="card" style="overflow:hidden; border-radius: 5px;">
              <div class="card-header text-white" style="background-color: #012970">
                <i class="bi bi-person-workspace"></i>
              </div>
              <div class="card-body">



                <!-- Table START -->
                <div class="table-responsive" style="text-align:center">
                  <table class="table">
                    <thead>
                      <tr style="font-weight:bold">
                        <td>ID</td>
                        <td>Tanggal</td>
                        <td>Waktu</td>
                        <td>Lokasi</td>
                        <td>Suhu Tubuh</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>13-12-2021</td>
                        <td>07.00</td>
                        <td>Sekolah</td>
                        <td>36,5</td>
                        <td>
                          <a class="btn btn-primary" href="index.php/edit_catatan" role="button">Link</a>
                          <a class="btn btn-danger" href="#" role="delete">Delete</a>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>13-12-2021</td>
                        <td>07.00</td>
                        <td>Sekolah</td>
                        <td>36,5</td>
                        <td>
                          <a class="btn btn-primary" href="index.php/edit_catatan" role="button">Link</a>
                          <a class="btn btn-danger" href="#" role="button">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>13-12-2021</td>
                        <td>07.00</td>
                        <td>Sekolah</td>
                        <td>36,5</td>
                        <td>
                          <a class="btn btn-primary" href="index.php/edit_catatan" role="button">Link</a>
                          <a class="btn btn-danger" href="#" role="button">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                    <button type="button" class="btn btn-outline-secondary"><span class="disable-links"><a href="index.php/tambah_catatan">Tambah catatan perjalanan</a></span></button>
                  </table>
                </div>
                <!--Table END-->
              </div>
              <!-- CARD DROPDOWN END-->
            </div>
          </div>
          <!--CARD END-->
        </div>
      </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Private Section</h2>
          <p>Profil,Catatan dll. menjadi satu!</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="<?= base_url('assets/img/values-1.png'); ?>" class="img-fluid">
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
              <img src="<?= base_url('assets/img/values-2.png'); ?>" class="img-fluid" alt="">
              <h3>Catatan</h3>
              <p>Catat semua hal yang ingin anda catat!</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="<?= base_url('assets/img/values-3.png'); ?>" class="img-fluid" alt="">
              <h3>a</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quaerat porro, earum aliquam fugit cumque voluptatibus qui. Rem temporibus ut odio molestiae accusantium a excepturi quaerat magni! Dolores, nesciunt reiciendis!</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->


    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Ada sesuatu yang ingin ditanyakan?</h4>
            <p>Feel free to email us!</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post" style="text-align:center">
              <h2>ada@gmail.com</h2>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>Peduli Diri</span>
            </a>
            <p>Aplikasi yang menyediakan segala catatan perjalanan anda demi membantu mengatasi wabah covid-19</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>