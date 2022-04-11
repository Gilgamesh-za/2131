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
            <form action="/update_profile" method="post" class="file-upload">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="put">
            <?php foreach($user as $row): ?>
				<input type="hidden" name="id_user" value="<?= $row['id_user'];?>">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label">NIK *</label>
									<input type="text" name="nik" class="form-control" value="<?= $row['nik'];?>">
								</div>
								<div class="col-md-6">
									<label class="form-label">Nama *</label>
									<input type="text" class="form-control" name="nama" value="<?= $row['nama'];?>">
								</div>
								<div class="col-md-6">
									<label class="form-label">Alamat *</label>
									<input type="text" class="form-control" name="alamat" value="<?= $row['alamat'];?>">
								</div>
								<div class="col-md-6">
									<label class="form-label">Gender *</label>
									<input type="text" class="form-control" name="gender" value="<?= $row['gender'];?>">
								</div>
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">HP *</label>
									<input type="number" class="form-control" name="hp" value="<?= $row['hp'];?>">
								</div>
				
							</div> 
                            <!-- Row END -->
						</div>
					</div>
				</div> 

					<!-- change password -->
					<div class="col-xxl mb-10">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-1">
								<h4 class="my-4">Change Password</h4>
								<!-- Old password -->
								<div class="col-md-6">
									<label for="exampleInputPassword1" class="form-label">Old password *</label>
									<input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= $row['password'];?>">
								</div>
								<!-- New password -->
								<div class="col-md-6">
									<label for="exampleInputPassword2" class="form-label">New password *</label>
									<input type="password" class="form-control" id="exampleInputPassword2">
								</div>
								<!-- Confirm password -->
								<div class="col-md-12">
									<label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
									<input type="password" class="form-control" id="exampleInputPassword3">
								</div>
							</div>
						</div>
					</div>
                    <?php endforeach; ?>
					<div class="justify-content-md-end text-center mt-3">
					<button type="submit" class="btn btn-outline-primary">Update profile</button>
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