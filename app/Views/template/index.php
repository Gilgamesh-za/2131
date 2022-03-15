<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aplikasi Peduli Diri</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url(
                'assets/img/apple-touch-icon.png'
              ) ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">


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

      <a href="/" class="logo d-flex align-items-center">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
        <span>Peduli Diri</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('/') ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('profile') ?>">Profile</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('logout') ?>">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <?= $this->renderSection('content'); ?>

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
              <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
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
  <script src="<?= base_url(
                  'assets/vendor/purecounter/purecounter.js'
                ) ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url(
                  'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'
                ) ?>"></script>
  <script src="<?= base_url(
                  'assets/vendor/glightbox/js/glightbox.min.js'
                ) ?>"></script>
  <script src="<?= base_url(
                  'assets/vendor/isotope-layout/isotope.pkgd.min.js'
                ) ?>"></script>
  <script src="<?= base_url(
                  'assets/vendor/swiper/swiper-bundle.min.js'
                ) ?>"></script>
  <script src="<?= base_url(
                  'assets/vendor/php-email-form/validate.js'
                ) ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <!-- Script -->
  <script src="<?= base_url('https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js') ?>"></script>
  <script src="<?= base_url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <script type="<?= base_url('text/javascript" src="js/printTable.js') ?>"></script>
  <script>
    // DROPDOWN CREATE
    $(document).ready(function() {
      $("#btn-create").click(function() {
        $("#content-create").toggleClass("d-none");
        $("#btn-create > i").toggleClass("bi-caret-down-fill bi-caret-up-fill")
      });
    });
    // DROPDOWN EDIT
    $(document).ready(function() {
      $("#btn-edit").click(function() {
        $("#content-edit").toggleClass("d-none");
        $("#btn-edit > i").toggleClass("bi-caret-down-fill bi-caret-up-fill")
      });
    });
  </script>

</body>

</html>