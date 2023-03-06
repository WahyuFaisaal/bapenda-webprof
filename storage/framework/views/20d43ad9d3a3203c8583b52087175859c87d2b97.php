

<?php $__env->startSection('content'); ?>
  <div class="pagetitle">
    <h1>Selamat datang, <?php echo e(auth()->user()->name); ?>!</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <?php if(session()->has('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo e(session('success')); ?>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">
          
          <!-- Berita -->
          <div class="col-12">
            <div class="card">

              <div class="card-body pb-0">
                <h5 class="card-title">Beritamu</h5>

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
                    $posts = App\Models\Post::where('user_id', auth()->user()->id)->limit(5)->get();
                  ?>
                  <?php if($posts->count() == 0): ?>
                  <tr>
                    <td colspan="4">
                      <div class="no-data-found-small">
                        <i class="fas fa-square fa-2x"></i>
                        <div>Belum ada berita.</div>
                      </div>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><a href="#" class="text-primary fw-bold"><?php echo e($post->title); ?></a></td>
                      <td><?php echo e($post->created_at->format('Y-m-d')); ?></td>
                      <td><?php echo e($post->category->name); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
              </table>
                <a href="<?php echo e(route('dashboard.posts')); ?>" class="btn btn-outline-primary mb-3">Semua Beritamu <i class="bi bi-arrow-right"></i></a>
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
                  <?php
                    $docs = App\Models\Doc::orderBy('created_at')->limit(5)->get();
                  ?>
                  <?php if($docs->count() == 0): ?>
                  <tr>
                    <td colspan="3">
                      <div class="no-data-found-small">
                        <i class="fas fa-square fa-2x"></i>
                        <div>Belum ada dokumen.</div>
                      </div>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <?php $__currentLoopData = $docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="text-primary fw-bold"><?php echo e($doc->title); ?></td>
                      <td><?php echo e($doc->updated_at); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <a href="<?php echo e(route('dashboard.docs')); ?>" class="btn btn-outline-primary mb-3">Semua Dokumen <i class="bi bi-arrow-right"></i></a>
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
            <h5 class="card-title">Semua Berita Terbaru</h5>

            <div class="news">
              <?php
                $posts = App\Models\Post::orderBy('created_at', 'desc')->limit(5)->get();
              ?>
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="post-item clearfix mb-1">
                <?php if($post->image): ?>
                  <div style="width: 80px; height: 45px d-inline">
                      <img loading="lazy" src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid" alt="<?php echo e($post->title); ?>">
                  </div>
                <?php else: ?>    
                <img src="assets/img/news-1.jpg" alt="">
                <?php endif; ?>
                
                <h4><a href="#"><?php echo e($post->title); ?></a></h4>
                <p><?php echo e($post->excerpt); ?></p>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('back.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/back/dashboard/dashboard.blade.php ENDPATH**/ ?>