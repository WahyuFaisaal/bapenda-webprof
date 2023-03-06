

<?php $__env->startSection('content'); ?>
<!-- Berita -->
<div class="col-12">
    <div class="card">

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="card-body p-3">

        <div class="row">
            <div class="col">
                <h5 class="card-title">Daftar Berita</h5>
            </div>
            <div class="col">
                <a href="<?php echo e(route('dashboard.posts.create')); ?>" class="btn btn-primary mb-3" style="float: right">Buat Berita</a>
            </div>
        </div>        

            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if($posts->count() == 0): ?>
                <tr>
                    <td colspan="5">
                        <div class="no-data-found">
                            <i class="fas fa-square fa-5x"></i>
                            <div>Belum ada Berita</div>
                        </div>
                    </td>
                </tr>                
                <?php endif; ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><a href="<?php echo e(route('dashboard.posts.show', [$post->slug])); ?>" class="text-primary fw-bold"><?php echo e($post->title); ?></a></td>
                    <td><?php echo e($post->created_at->format('Y-m-d')); ?></td>
                    <td><?php echo e($post->category->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('dashboard.posts.show', [$post->slug])); ?>" class="badge bg-info"><i class="bi bi-eye"></i></a>
                        <a href="<?php echo e(route('dashboard.posts.edit', [$post->slug])); ?>"  class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                        <form action="<?php echo e(route('dashboard.posts.destroy', [$post->slug])); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-x-circle"></i></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>

    </div>
    </div><!-- End Berita -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/back/dashboard/posts.blade.php ENDPATH**/ ?>