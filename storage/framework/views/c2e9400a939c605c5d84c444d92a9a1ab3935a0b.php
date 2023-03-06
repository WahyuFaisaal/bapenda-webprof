

<?php $__env->startSection('content'); ?>

<section id="main-container" class="main-container">
    <div class="container">
    <div class="row">

        <div class="post-content post-single">
            <div class="post-media post-image">
            <?php if($tax->image): ?>
            <div style="width: 720px; height: 432px d-inline">
                <img loading="lazy" src="<?php echo e(asset('storage/' . $tax->image)); ?>" class="img-fluid" alt="<?php echo e($tax->slug); ?>">
            </div>
            <?php else: ?>
                <img loading="lazy" src="<?php echo e(asset('images/news/news1.jpg')); ?>" class="img-fluid" alt="tax-image">    
            <?php endif; ?>
            </div>

            <div class="post-body">
            <div class="entry-header">
                <h2 class="entry-title">
                    <?php echo e($tax->title); ?>

                </h2>
            </div><!-- header end -->

            <div class="entry-content">
                <?php echo $tax->body; ?>

            </div>


            </div><!-- post-body end -->
        </div><!-- post content end -->

    </div><!-- Main row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/front/tax.blade.php ENDPATH**/ ?>