<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<?php
//load config.php
// include("config/config.php");
function http_request_get($url) {
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
$url="https://data.covid19.go.id/public/api/prov.json";
 
//menyimpan hasil dalam variabel
$data=http_request_get($url);
 
//konversi data json ke array
$hasil=json_decode($data,true);

// var_dump($hasil["list_data"][0]["key"]);
?>

<main id="main">
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 mt-5 entries">

            <article class="entry entry-single">

              <div class="entry-img">
              <img src="assets/img/vaksin.jpg" alt="" class="img-fluid" style="width: 100%;">
              </div>

              <h2 class="entry-title">
                <a>Perkembangan wilayah yang sudah vaksinisasi</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, facere repellat. Labore asperiores eum a, veniam rerum deserunt suscipit iure fugiat soluta sint ab consequuntur maxime animi necessitatibus commodi iusto?
                </p>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quaerat optio molestias voluptatum iste labore rem! Veniam reiciendis explicabo voluptatem magni, tenetur, animi officiis aperiam optio nostrum repellendus rerum minus!                </p>

                <blockquote>
                  <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quisquam corrupti et error iusto repudiandae eveniet voluptate provident doloribus magni ad quas, maiores consequuntur nemo neque delectus consequatur dolor illo.                  </p>
                </blockquote>

                 <!-- Area Chart -->
                 <div class="col-xl col-lg-7" style="width: 100%;">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Perkembangan wilayah yang sudah vaksinisasi</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

              </div>

            </article><!-- End blog entry -->


           

          </div><!-- End blog entries list -->

       

        </div>

      </div>
      
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
 

  <?= $this->endSection(); ?>