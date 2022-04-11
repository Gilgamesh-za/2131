<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

    <div class="container mt-3 h-100">

        <!-- CARD UTAMA -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <i class="bi bi-person-workspace"></i> Isi Table
            </div>
            <div class="card-body">
                
                <!-- CARD DROPDOWN -->
                <div class="btn btn-primary text-white d-flex justify-content-between" id="btn-adduser">
                    <i class="bi bi-caret-down-fill"></i>
                </div>

                <div class="container border-end border-start border-bottom p-4 d-none" id="content-adduser">
                    <!-- FORM START -->
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-2 col-12">
                                <label for="tanggal" class="form-label">Tanggal<span class="text-danger">*</span></label>
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
                        
                        <button type="submit" class="d-block ms-auto btn btn-primary mt-4">Submit</button>
                    </form>
                    <!--FORM END-->
                </div>
                <!-- CARD DROPDOWN END-->
            </div>
        </div>
        <!--CARD END-->
    </div>

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
</body>

</html>