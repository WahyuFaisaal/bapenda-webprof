

<?php $__env->startSection('content'); ?>
  <div class="pagetitle">
    <h1>Selamat datang, <?php echo e(auth()->user()->name); ?>!</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">
          
          <!-- Berita -->
          <div class="col-12">
            <div class="card">

              <div class="card-body pb-0">
                <h5 class="card-title">Berita</h5>

                <table class="table table-borderless">
                  <thead>
                  <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Kategori</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $posts = App\Models\Post::orderBy('created_at', 'desc')->limit(5)->get();
                  ?>
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><a href="#" class="text-primary fw-bold"><?php echo e($post->title); ?></a></td>
                      <td><?php echo e($post->created_at->diffForHumans()); ?></td>
                      <td><?php echo e($post->category->name); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
              </table>

              </div>

            </div>
          </div><!-- End Berita -->
          
          <!-- Unduhan -->
          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Unduhan</h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Judul</th>
                      <th scope="col">Tahun</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                      <td>$64</td>
                    </tr>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->


        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- News & Updates Traffic -->
        <div class="card">
          <div class="card-body pb-0">
            <h5 class="card-title">News &amp; Updates </h5>

            <div class="news">
              <div class="post-item clearfix">
                <img src="assets/img/news-1.jpg" alt="">
                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-2.jpg" alt="">
                <h4><a href="#">Quidem autem et impedit</a></h4>
                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-3.jpg" alt="">
                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-4.jpg" alt="">
                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-5.jpg" alt="">
                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
              </div>

            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>