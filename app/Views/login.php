<?= $this->extend('template/index2') ?>
<?= $this->section('content') ?>
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
              <h3 style="color:#012970">Sign In</h3>
            </div>
            <form action="/cek_login" method="post">
              <div class="form-group first">
                <input type="number" class="form-control" id="username" name="nik" placeholder="NIK">

              </div>
    <br>
              <div class="form-group last mb-4">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                
              </div>
            
                <button type="submit" class="btn  btn-outline btn-primary" style="text-align : center; width: 100%"><h5>Log In</h5></button> 
                <a href="<?= base_url('/tambah_user'); ?>"<button type="submit" class="btn  btn-outline btn-primary " style="text-align : center; text-decoration: none; color: aliceblue; width: 100%; margin-top: 5%"><h5>Haven't Register yet</h5></button></a>
                <br>
            </div>             
            </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <?= $this->endSection(); ?>
  
   