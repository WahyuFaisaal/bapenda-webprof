

<?php $__env->startSection('content'); ?>
    <div id="banner-area" class="banner-area" style="background-image:url(<?php echo e(asset('images/banner/banner1.jpg')); ?>)">
        <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                    <h1 class="banner-title"><?php echo e($title); ?></h1>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end --> 
    
    <section id="main-container" class="main-container">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
    
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                <div class="post">
                    <div class="post-media post-image">
                    <img loading="lazy" src="<?php echo e(asset('images/news/news1.jpg')); ?>" class="img-fluid" alt="post-image">
                    </div>
        
                    <div class="post-body">
                    <div class="entry-header">
                        <div class="post-meta">
                        <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                        </div>
                        <h2 class="entry-title">
                            <a href="/categories/<?php echo e($category->slug); ?>">
                                <?php echo e($category->name); ?>

                            </a>
                        </h2>
                    </div><!-- header end -->
        
                    </div><!-- post-body end -->
                </div><!-- 1st post end -->
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
            <nav class="paging" aria-label="Page navigation example">
                <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                </ul>
            </nav>
    
            </div><!-- Content Col end -->
    
            <div class="col-lg-4">
    
            <div class="sidebar sidebar-right">
                <div class="widget recent-posts">
                <h3 class="widget-title">Recent Posts</h3>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                    <div class="posts-thumb">
                        <a href="#"><img loading="lazy" alt="img" src="images/news/news1.jpg"></a>
                    </div>
                    <div class="post-info">
                        <h4 class="entry-title">
                        <a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
                        </h4>
                    </div>
                    </li><!-- 1st post end-->
    
                    <li class="d-flex align-items-center">
                    <div class="posts-thumb">
                        <a href="#"><img loading="lazy" alt="img" src="images/news/news2.jpg"></a>
                    </div>
                    <div class="post-info">
                        <h4 class="entry-title">
                        <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                        </h4>
                    </div>
                    </li><!-- 2nd post end-->
    
                    <li class="d-flex align-items-center">
                    <div class="posts-thumb">
                        <a href="#"><img loading="lazy" alt="img" src="images/news/news3.jpg"></a>
                    </div>
                    <div class="post-info">
                        <h4 class="entry-title">
                        <a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
                        </h4>
                    </div>
                    </li><!-- 3rd post end-->
    
                </ul>
    
                </div><!-- Recent post end -->
    
                <div class="widget">
                <h3 class="widget-title">Categories</h3>
                <ul class="arrow nav nav-tabs">
                    <li><a href="#">Construction</a></li>
                    <li><a href="#">Commercial</a></li>
                    <li><a href="#">Building</a></li>
                    <li><a href="#">Safety</a></li>
                    <li><a href="#">Structure</a></li>
                </ul>
                </div><!-- Categories end -->
    
            </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->
    
        </div><!-- Main row end -->
    
        </div><!-- Container end -->
    </section><!-- Main container end -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/front/categories.blade.php ENDPATH**/ ?>