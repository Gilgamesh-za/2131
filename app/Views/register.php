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
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="/user/register" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nik" id="name" placeholder="NIK" />
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
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="alamat" id="name" placeholder="Alamat" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <select class="form-select" name="gender" aria-label="Default select example" style="border-style:outset">
                                    <option selected></option>
                                    <option value="1">L</option>
                                    <option value="2">P</option>
                                </select>                               
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="hp" id="name" placeholder="hp" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                            <button type="submit" class="btn btn-dark">Register</button>
                                <!-- <a type="submit" href="/index.php/login" class="btn btn-block btn-primary">
                                    <p>Register</p>
                                </a> -->
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/register/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="/index.php/login" class="signup-image-link">I sign up already</a>
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