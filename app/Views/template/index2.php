<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aplikasi Peduli Diri</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
  <link href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('login/fonts/icomoon/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('login/css/owl.carousel.min.css'); ?>">

  <!-- Google Fonts -->
  <link href="<?= base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('login/css/bootstrap.min.css'); ?>">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style2.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('login/css/style.css'); ?>">




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

      <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
        <span>Peduli Diri</span>
      </a>


    </div>
  </header><!-- End Header -->

  <?= $this->renderSection('content'); ?>

  

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
  <script src="<?= base_url('login/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?= base_url('login/js/popper.min.js'); ?>"></script>
  <script src="<?= base_url('login/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('login/js/main.js'); ?>"></script>
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
  <script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

</body>

</html>