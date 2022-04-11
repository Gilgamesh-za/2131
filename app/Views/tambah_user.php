<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('/register/fonts/material-icon/css/material-design-iconic-font.min.css') ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('/register/css/style.css') ?>">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>

    <div class="main">
        <?php if (!empty(session()->getFlashdata('error'))) { ?>
            <div align="center" class="error">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php } ?>


        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="color:#012970">Sign up</h2>
                        <form method="POST" action="/user/register" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-assignment-account"></i></label>
                                <input type="number" name="nik" id="name" placeholder="NIK"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_new" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="name" placeholder="Nama" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="alamat" id="name" placeholder="Alamat" />
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <select class="form-select" name="gender" aria-label="Default select example" style="border-style:outset">
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>                      
                                         
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-smartphone-android"></i></label>
                                <input type="number" name="hp" id="name" placeholder="hp" />
                            </div>
                            <div class="form-group form-button">
                            <button type="submit" class="btn btn-outline-primary">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/img/features-3.png" alt="sing up image" width="80%"></figure>
                        <a href="/index.php/login" class="signup-image-link"><h5 style="color:#012970">I sign up already</h5></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="<?= base_url('/register/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('/register/js/main.js') ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>