

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('front.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    
    <section id="main-container" class="main-container">
        <div class="container">
        <div class="row">
    
            <?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                <div class="post">
                    
                    <div class="post-body">
                    <div class="entry-header">
                        <h2 class="entry-title">
                            <a href="/taxes/<?php echo e($tax->slug); ?>">
                                <?php echo e($tax->title); ?>

                            </a>
                        </h2>
                    </div><!-- header end -->
        
                    <div class="entry-content">
                        <?php echo $tax->body; ?>

                    </div>
        
                    <div class="post-footer">
                        <a href="/taxes/<?php echo e($tax->slug); ?>" class="btn btn-primary">Continue Reading</a>
                    </div>
        
                    </div><!-- post-body end -->
                </div><!-- 1st post end -->
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        </div><!-- Main row end -->
    
    </div><!-- Container end -->
    </section><!-- Main container end -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/front/taxes.blade.php ENDPATH**/ ?>