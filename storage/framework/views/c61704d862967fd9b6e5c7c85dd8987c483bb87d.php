

<?php $__env->startSection('content'); ?>
<div class="post-content post-single">
    <div class="post-media post-image">
    <?php if($tax->image): ?>
        <img loading="lazy" src="<?php echo e(asset('storage/' . $tax->image)); ?>" class="img-fluid" alt="post-image">
    <?php else: ?>
        <img loading="lazy" src="<?php echo e(asset('images/news/news1.jpg')); ?>" class="img-fluid" alt="post-image">
        
    <?php endif; ?>
    </div>

    <div class="my-2">

        <a href="/admin/dashboard/taxes" class="btn btn-success"><i class="bi bi-arrow-left"></i> Kembali</a>
        <a href="/admin/dashboard/taxes/<?php echo e($tax->id); ?>/edit" class="btn btn-warning"><i class="bi bi-pencil"></i> Sunting</a>

    </div>
    <div class="entry-header">
    <div class="post-body">
            <div class="post-meta">
                <h2 class="entry-title"><?php echo e($tax->title); ?></h2>
            </div><!-- header end -->
        </div>
    </div>

    <div class="entry-content">
        <?php echo $tax->body; ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/admin/single-tax.blade.php ENDPATH**/ ?>