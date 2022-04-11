<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<!-- ======= About Section ======= -->
<section>

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
                        <i class="bi bi-person-workspace"></i> Table User
                    </div>
                    <div class="card-body">



                        <!-- Table START -->
                        <div class="table-responsive" style="text-align:center">
                            <table class="table">
                                <thead>
                                    <a href="<?= base_url('/tambah_user'); ?>" class="btn btn-outline-primary" role="button" aria-disabled="true">Tambah User</a>
                                    <tr style="font-weight:bold">
                                        <td>No</td>
                                        <td>ID User</td>
                                        <td>NIK</td>
                                        <td>Nama</td>
                                        <td>Alamat</td>
                                        <td>Gender</td>
                                        <td>HP</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($tb_user as $row) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $row['id_user'] ?></td>
                                            <td><?= $row['nik'] ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['alamat'] ?></td>
                                            <td><?= $row['gender'] ?></td>
                                            <td><?= $row['hp'] ?></td>
                                            <td>
                                                <a href="/detail_user/<?= $row['id_user']; ?>/detail" class="btn btn-outline-info" role="button" aria-disabled="true">Detail</a>
                                                <a href="/admin/<?= $row['id_user']; ?>/delete" onclick="returnconfirm('Apakah Yakin?')" class="btn btn-outline-danger" role="button" aria-disabled="true">delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="/print" class="btn btn-outline-success" role="button" aria-disabled="true">Print</a>
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

    <!-- Include -->
</section><!-- End About Section -->
<!-- ======= Footer ======= -->


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
<?= $this->endSection(); ?>