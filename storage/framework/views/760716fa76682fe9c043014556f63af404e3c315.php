<header id="header" class="header-two">
<div class="site-navigation">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                
                <div class="logo">
                    <a class="d-block" href="/">
                    <img loading="lazy" src="<?php echo e(asset('images/Logo_Bapenda.png')); ?>" alt="Bapenda Gowa">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>"><a class="nav-link" href="/">Beranda</a></li>
                        <li class="nav-item <?php echo e(Request::is('about') ? 'active' : ''); ?>"><a class="nav-link" href="/about">Tentang Kami</a></li>
                        <li class="nav-item dropdown">
                            <a href="/taxes" class="nav-link dropdown-toggle" data-toggle="dropdown">Pajak <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <?php
                                    $taxes = App\Models\Tax::all();
                                ?>
                                <?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="<?php echo e(Request::is('taxes') ? 'active' : ''); ?>"><a href="/taxes/<?php echo e($tax->slug); ?>"><?php echo e($tax->title); ?></a></li>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('posts*') ? 'active' : ''); ?>"><a class="nav-link" href="/posts">Berita</a></li>
                        <li class="nav-item <?php echo e(Request::is('contact') ? 'active' : ''); ?>"><a class="nav-link" href="/contact">Kontak</a></li>
                        <li class="nav-item <?php echo e(Request::is('doc') ? 'active' : ''); ?>"><a class="nav-link" href="/doc">Dokumen</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

</div>
<!--/ Navigation end -->
</header>
<!--/ Header end --><?php /**PATH C:\laragon\www\bapenda\resources\views/front/partials/header.blade.php ENDPATH**/ ?>