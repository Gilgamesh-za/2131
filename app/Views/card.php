  <!-- CARD UTAMA -->
  <div class="card" style="overflow:hidden; border-radius: 10px;">
       <div class="card-header text-white" style="background-color: #012970">
        <i class="bi bi-person-workspace"></i> 
    </div>
    <div class="card-body">
        
      

            <!-- FORM START -->
            
            <form>
                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-10 col-12">
                        <input type="username" class="form-control" id="username" placeholder="" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-10 col-12">
                        <input type="password" class="form-control" id="password" placeholder="" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-10 col-12">
                        <input type="text" class="form-control" id="nama" placeholder="" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="gender" class="form-label">Gender</label>
                    </div>
                    <div class="col-md-10 col-12">
                        <select class="form-select" aria-label="" id="gender">
                            <option selected>Pilih gender</option>
                            <option value="0">Laki - laki</option>
                            <option value="1">Perempuan</option>
                          </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="alamat" class="form-label">Alamat</label>
                    </div>
                    <div class="col-md-10 col-12">
                        <input type="text" class="form-control" id="alamat" placeholder="">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="hp" class="form-label">HP</label>
                    </div>
                    <div class="col-md-10 col-12">
                        <input type="tel" class="form-control" id="hp" placeholder="" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="akses" class="form-label">Akses <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-10 col-12">
                        <select class="form-select" aria-label="" id="akses" required>
                            <option selected>Pilih akses</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                          </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-12">
                        <label for="is-aktif" class="form-label">Is Aktif <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-10 col-12">
                        <select class="form-select" aria-label="" id="is-aktif" required>
                            <option selected>Pilih is aktif</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                          </select>
                    </div>
                </div>
                
                <button type="submit" class="d-block ms-auto btn btn-primary mt-4">Tambahkan Catatan</button>
            </form>
            <!--FORM END-->
        </div>
        <!-- CARD DROPDOWN END-->
    </div>
</div>
<!--CARD END-->