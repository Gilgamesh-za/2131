<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<?php
//load config.php
// include("config/config.php");
function http_request_get($url)
{
  // persiapkan curl
  $ch = curl_init();

  // set url 
  curl_setopt($ch, CURLOPT_URL, $url);

  // konversi hasil ke string
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // eksekusi
  $output = curl_exec($ch);

  // tutup curl 
  curl_close($ch);

  // mengembalikan hasil curl
  return $output;
}

//untuk api_key newsapi.org
// $api_key="51dfd39984fe476f90f625457f70c96a";

//url api untuk ambil berita headline di Indonesia
$url = "https://data.covid19.go.id/public/api/prov.json";

//menyimpan hasil dalam variabel
$data = http_request_get($url);

//konversi data json ke array
$hasil = json_decode($data, true);

// var_dump($hasil["list_data"][0]["key"]);
?>
<!-- ======= Portfolio Section ======= -->
<section class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>News</h2>
      <p>Check latest update about covid-19</p>
    </header>
    <?php if (session()->get('akses') == 'admin') : ?>
      <a href="/tambah_berita" class="btn btn-outline-primary" role="button" aria-disabled="true">Tambah Berita</a>
    <?php endif ?>

    <!-- <div class="row">
<?php foreach ($hasil["list_data"] as $row) { ?>
  <div class="col mt-3">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><?= number_format($row['jumlah_dirawat']); ?></p>
  </div>
</div>
  </div>
  <?php } ?>
</div> -->


    <main id="main">

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row">

            <div class="col-lg-8 entries">

              <?php foreach ($blog as $row) : ?>

                <article class="entry">

                  <div class="entry-img">
                    <img src="../assets/img/<?= $row['gambar'] ?>" alt="" class="img-fluid" style="width: 100%;">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html"><?= $row['judul'] ?></a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                    </ul>
                  </div>

                  <div class="entry-content">

                    <div class="read-more">
                      <a href="/news_delete/<?= $row['id_blog']; ?>/delete" onclick="returnconfirm('Apakah Yakin?')">delete</a>
                      <a href="/edit_berita/<?= $row['id_blog']; ?>">Edit</a>
                      <a href="/blog/<?= $row['id_blog'] ?>">Read More</a>
                    </div>
                  </div>

                </article>
                <!-- End blog entry -->

              <?php endforeach; ?>


              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div>

            </div>


            <!-- End blog entries list -->

            <div class="col-lg-4">

              <div class="sidebar">

                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/vaksin.jpg') ?>" alt="" style="width: 25%;">
                    <h4><a href="/blog2">Data perkembangan vaksinisasi dan wilayah yang sudah tervaksinisasi</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/virus1.jpg'); ?>" alt="" style="width: 25%;">
                    <h4><a href="<?= base_url('blog-single.html'); ?>">Lihat kasus covid-19 harian di Indonesia</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/wilayah.jpg'); ?>" alt="" style="width: 25%;">
                    <h4><a href="<?= base_url('blog-single.html'); ?>">Level serta wilayah yang terdampak Covid-19</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/hospital.jpg'); ?>" alt="" style="width: 25%;">
                    <h4><a href="<?= base_url('blog-single.html'); ?>">Rumah sakit rujukan di negara Indonesia</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/labotarium.jpg'); ?>" alt="" style="width: 25%;">
                    <h4><a href="<?= base_url('blog-single.html'); ?>">Data labotarium yang menangani kasus Covid-19 di Indonesia</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>

                </div><!-- End sidebar recent posts-->

              </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

          </div>

        </div>
      </section>
      <!-- End Blog Section -->
    </main>
    <!-- End #main -->





</section><!-- End Portfolio Section -->
<?= $this->endSection(); ?>