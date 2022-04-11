<?= $this->extend('template/index2') ?>
<?= $this->section('content') ?>
<section>

  <body onload="window.print()">
    <div class="content">

      <div class="container">

        <h2 class="mb-5">Data Mahasiswa</h2>

        <div class="table-responsive">

          <table class="table custom-table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama User</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Ket</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($tb_perjalanan as $row) : ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row['id_user'] ?></td>
                  <td><?= $row['lokasi'] ?></td>
                  <td><?= $row['tanggal'] ?></td>
                  <td><?= $row['waktu'] ?></td>
                  <td><?= $row['ket'] ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <h6 class="mb-5">Jumlah Data : <?= $jumlahcp ?></h6>

      </div>

    </div>


  </body>
</section>
<?= $this->endSection(); ?>