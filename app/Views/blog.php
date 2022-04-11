<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<main id="main">
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 mt-5 entries">

          <?php foreach ($blog as $row) : ?>

            <article class="entry entry-single">

              <div class="entry-img">
              <img src="../assets/img/<?= $row['gambar'] ?>" alt="" class="img-fluid" style="width: 100%;">
              </div>

              <h2 class="entry-title">
                  <a><?= $row['judul'] ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                <?= $row['judul'] ?>               
               </p>

                <blockquote>
                  <p>
                  <?= $row['sub_isi'] ?>               
                </p>
                </blockquote>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->
            <?php endforeach; ?>


           

          </div><!-- End blog entries list -->

       

        </div>

      </div>
      
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
 

  <?= $this->endSection(); ?>