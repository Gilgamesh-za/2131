<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<!-- ======= Profile Section ======= -->
<section id="profile" class="features">

	<div class="container" data-aos="fade-up">

		<header class="section-header">
			<h2>Profile</h2>
			<p>Kostumisasi profile anda sendiri</p>
		</header>
		<!-- Feature Tabs -->

		<!-- Page title -->
		<div class="my-5">
			<h3>My Profile</h3>
			<hr>
		</div>
		<!-- Form START -->
		<form action="/news/save_berita" method="post" enctype="multipart/form-data" class="file-upload">
			<?= csrf_field(); ?>
			<input type="hidden" name="_method" value="put">
			<div class="row mb-5 gx-5">
				<!-- Contact detail -->
				<div class="col-xxl mb-5 mb-xxl-0">
					<div class="bg-secondary-soft px-4 py-5 rounded">
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label">Gambar</label>
								<input type="file" name="gambar" class="form-control" value="" required>
							</div>
							<div class="col-md-6">
								<label class="form-label">Judul</label>
								<input type="text" class="form-control" name="judul" value="" required>
							</div>
							<div class="col-md-6">
								<label class="form-label">Quote</label>
								<input type="text" class="form-control" name="sub_isi" value="">
							</div>
							<div class="col-md-6">
								<label class="form-label">Isi</label>
								<input type="text" class="form-control" name="isi" value="" required>
							</div>
						</div>
						<!-- Row END -->
					</div>
				</div>
			</div>


			<div class="justify-content-md-end text-center mt-3">
				<button type="submit" class="btn btn-outline-primary">Tambah berita</button>
			</div>
		</form>
	</div>
	<!-- Row END -->
	<!-- button -->

	</form> <!-- Form END -->
	</div>
	</div>
	</div>
	<!-- End Feature Tabs -->
	</div>
</section>
<!-- End Features Section -->
<?= $this->endSection(); ?>