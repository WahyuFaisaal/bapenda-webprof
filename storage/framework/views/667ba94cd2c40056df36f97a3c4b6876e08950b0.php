

<?php $__env->startSection('content'); ?>
<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<div class="post-content post-single">
    <div class="post-media post-image">
    <?php if($tax->image): ?>
        <div style="width: 750px; height: 450px d-inline">
            <img loading="lazy" src="<?php echo e(asset('storage/' . $tax->image)); ?>" class="img-fluid" alt="tax-image">
        </div>
    <?php else: ?>
        <img loading="lazy" src="<?php echo e(asset('images/news/news1.jpg')); ?>" class="img-fluid" alt="tax-image">    
    <?php endif; ?>
    </div>

    <div class="my-2">

        <a href="<?php echo e(route('dashboard.taxes.edit',[$tax->slug])); ?>" class="btn btn-warning"><i class="bi bi-pencil"></i> Sunting</a>

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
<?php echo $__env->make('back.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/back/dashboard/single-tax.blade.php ENDPATH**/ ?>