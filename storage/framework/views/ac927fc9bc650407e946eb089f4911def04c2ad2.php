

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('front.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    
    <section id="main-container" class="main-container">
        <div class="container">
        
            <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">

            <?php if($posts->count()): ?>                
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post">
                        <div class="post-media post-image">
                        <?php if($post->image): ?>
                            <div style="width: 690px; height: 414px d-inline">
                                <img loading="lazy" src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid" alt="<?php echo e($post->title); ?>">
                            </div>
                        <?php else: ?>    
                            <img loading="lazy" src="<?php echo e(asset('images/news/news1.jpg')); ?>" class="img-fluid" alt="post-image">
                        <?php endif; ?>
                        </div>
            
                        <div class="post-body">
                        <div class="entry-header">
                            <div class="post-meta">
                            <span class="post-author">
                                <i class="far fa-user"></i><a href="/posts?author=<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a>
                            </span>
                            <span class="post-cat">
                                <i class="far fa-folder-open"> Kategori: </i><a href="/posts?category=<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
                            </span>
                            <span class="post-meta-date"><i class="far fa-calendar"></i> <?php echo e($post->created_at->diffForHumans()); ?></span>
                            </div>
                            <h2 class="entry-title">
                                <a href="/posts/<?php echo e($post->slug); ?>">
                                    <?php echo e($post->title); ?>

                                </a>
                            </h2>
                        </div><!-- header end -->
            
                        <div class="entry-content">
                            <?php echo $post->excerpt; ?>

                        </div>
            
                        <div class="post-footer">
                            <a href="/posts/<?php echo e($post->slug); ?>" class="btn btn-primary">Continue Reading</a>
                        </div>
            
                        </div><!-- post-body end -->
                    </div><!-- 1st post end -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p class="text-center fs-4">No Post found</p>
            <?php endif; ?>
    
            <nav class="paging" aria-label="Page navigation example">
                <ul class="pagination">
                    <?php echo e($posts->links()); ?>

                </ul>
            </nav>
    
            </div><!-- Content Col end -->
    
            <div class="col-lg-4">
                <?php echo $__env->make('front.partials.sidebarRight', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div><!-- Sidebar Col end -->
    
        </div><!-- Main row end -->
    
        </div><!-- Container end -->
    </section><!-- Main container end -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/front/posts.blade.php ENDPATH**/ ?>