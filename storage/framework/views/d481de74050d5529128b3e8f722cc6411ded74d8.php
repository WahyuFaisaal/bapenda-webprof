<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="">
      <span class="d-none d-lg-block"> Bapenda Gowa</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item">
        <form action="<?php echo e(route('logout')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit" class="nav-link px-3 bg-light border-0" style="height: 60px; position:relative">
          <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </button>
      </form>
      </li><!-- End Profile Nav -->
    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header --><?php /**PATH C:\laragon\www\bapenda\resources\views/admin/partials/header.blade.php ENDPATH**/ ?>