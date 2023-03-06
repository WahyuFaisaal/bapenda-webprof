<div class="sidebar sidebar-right">
    <div class="widget recent-posts">

    <form action="/posts" id="search-additional-form" method="GET" class="search-widget mb-5">
        <?php if(request('category')): ?>
            <input type="hidden" name="category" value="<?php echo e(request('category')); ?>"/>
        <?php endif; ?>
        <?php if(request('author')): ?>
            <input type="hidden" name="author" value="<?php echo e(request('author')); ?>"/>
        <?php endif; ?>
        <input type="text" name="search" placeholder="Cari Berita..." class="form-control" value="<?php echo e(request('search')); ?>"/>
    </form>
    
    <h3 class="widget-title">Berita Terbaru</h3>
    <ul class="list-unstyled">
        <?php $__currentLoopData = $latestPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="d-flex align-items-center">
            <div class="posts-thumb">
                <?php if($post->image): ?>
                    <div>
                        <a href="#"><img loading="lazy" src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid" alt="<?php echo e($post->title); ?>"></a>
                    </div>
                <?php else: ?>    
                    <a href="#"><img loading="lazy" alt="img" src="<?php echo e(asset('images/news/news1.jpg')); ?>"></a>
                <?php endif; ?>
            </div>
            <div class="post-info">
                <h4 class="entry-title">
                <a href="/posts/<?php echo e($lp->slug); ?>"><?php echo e($lp->title); ?></a>
                </h4>
            </div>
            </li><!-- 1st post end-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    </div><!-- Recent post end -->

    <div class="widget">
    <h3 class="widget-title">Kategori</h3>
    <ul class="arrow nav nav-tabs">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="/posts?category=<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a></li>                        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div><!-- Categories end -->

</div><!-- Sidebar end --><?php /**PATH C:\laragon\www\bapenda\resources\views/front/partials/sidebarRight.blade.php ENDPATH**/ ?>