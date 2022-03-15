<?=$this->extend('template/index') ?>
<?=$this->section('content') ?>
<section>

<div class="container mt-3 h-50">

        <!-- CARD UTAMA -->
  <div class="card" style="overflow:hidden; border-radius: 5px;">
 <div class="card-header text-white" style="background-color: #012970">
  <i class="bi bi-person-workspace"></i> Edit Catatan
</div>
<div class="card-body">
                
    
                    <!-- FORM START -->
                    <form action="/edit_catatan" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="put">
                    <?php foreach($catatan as $row): ?>
                        <input type="hidden" name="id_perjalanan" value="<?= $row['id_perjalanan'];?>">
                        <div class="row mb-3">
                            <div class="col-md-2 col-12">
                                <label for="lokasi" class="form-label">Lokasi<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10 col-12">
                                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $row['lokasi'];?>"  required>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-2 col-12">
                                <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10 col-12">
                                <input type="date" class="form-control" id="date" name="tanggal" value="<?= $row['tanggal'];?>" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-2 col-12">
                                <label for="waktu" class="form-label">Waktu <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10 col-12">
                                <input type="time" class="form-control" id="waktu" name="waktu" value="<?= $row['waktu'];?>" required>
                            </div>
                        </div>  

                        <div class="row mb-3">
                            <div class="col-md-2 col-12">
                                <label for="ket" class="form-label">Keterangan</label>
                            </div>
                            <div class="col-md-10 col-12">
                                <input type="text" class="form-control" id="ket" name="ket" value="<?= $row['ket'];?>" required>
                            </div>
                        </div>
                        <button type="submit" class="d-block ms-auto btn btn-primary mt-4">Submit</button>
                        <a href="/tambah_catatan">
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