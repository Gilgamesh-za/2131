<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('login/fonts/icomoon/style.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('login/css/owl.carousel.min.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('login/css/bootstrap.min.css'); ?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('login/css/style.css'); ?>">

    <title>Login</title>
  </head>
  <body>
  
  
  <div class="content">
    <div class="container">
    <?php if (!empty(session()->getFlashdata('error'))) { ?>
            <div align="center" class="error">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php } ?>
      <div class="row">
        <div class="col-md-6">
          <img src="<?= base_url('login/images/undraw_remotely_2j6y.svg'); ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
            </div>
            <form action="/cek_login" method="post">
              <div class="form-group first">
                <input type="text" class="form-control" id="username" name="nik" placeholder="NIK">

              </div>
    <br>
              <div class="form-group last mb-4">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                
              </div>
            
                <button type="submit" class="btn btn-block btn-primary " style="text-align : center;"><h5>Log In</h5></button> 
                <a href="/edit_user"<button type="submit" class="btn btn-block btn-primary " style="text-align : center; text-decoration: none; color: aliceblue;"><h5>Forgot Password</h5></button></a>
                <a href="/tambah_user"<button type="submit" class="btn btn-block btn-primary " style="text-align : center; text-decoration: none; color: aliceblue;"><h5>Haven't Register yet</h5></button></a>
                <br>
            </div>             
            </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
    <script src="<?= base_url('login/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= base_url('login/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('login/js/main.js'); ?>"></script>
  </body>
</html>