<?=$this->extend('template/index') ?>
<?=$this->section('content') ?>
<section>

<div class="container mt-3 h-50">

        <!-- CARD UTAMA -->
  <div class="card" style="overflow:hidden; border-radius: 5px;">
 <div class="card-header text-white" style="background-color: #012970">
  <i class="bi bi-person-workspace"></i> Edit Password
</div>
<div class="card-body">
                
    
                    <!-- FORM START -->
                    <form action="/edit_user" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="put">
                    <?php foreach($user as $row): ?>
                        
                    <input type="hidden" name="id_user" value="<?= $row['id_user'];?>">

                        <div class="row mb-3">
                            <div class="col-md-2 col-12">
                                <label for="password" class="form-label">New Password<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10 col-12">
                                <input type="text" class="form-control" id="password" name="password" value="<?= $row['password'];?>"  required>
                            </div>
                        </div>
                        <button type="submit" class="d-block ms-auto btn btn-primary mt-4">Submit</button>
                        <a href="/login">
                    </form>
                    <!--FORM END-->
                    <?php endforeach; ?>

                </div>
                <!-- CARD DROPDOWN END-->
            </div>
        </div>
        <!--CARD END-->
    </div>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // DROPDOWN
        $(document).ready(function () {
            $("#btn-adduser").click(function () {
                $("#content-adduser").toggleClass("d-none");
                $("#btn-adduser > i").toggleClass("bi-caret-down-fill bi-caret-up-fill")
            });
        });
    </script>
    <?=$this->endSection(); ?>