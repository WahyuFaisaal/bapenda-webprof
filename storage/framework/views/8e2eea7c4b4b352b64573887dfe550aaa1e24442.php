<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-heading">Menu</li>
    
    <li class="nav-item">
      <a class="nav-link <?php echo e(request()->route()->named('dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="">
        <i class="bi bi-currency-dollar"></i><span>Pajak</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="dropdown-divider"></li>
        <?php $taxes = App\Models\Tax::all() ?> 
        <?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(route('dashboard.taxes.show', [$tax->slug])); ?>">
              <i class="bi bi-circle"></i><span><?php echo e($tax->title); ?></span>
            </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </li>

    
    <li class="nav-item">
      <a class="nav-link <?php echo e(request()->route()->named('dashboard.posts') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard.posts')); ?>">
        <i class="bi bi-megaphone"></i>
        <span>Berita</span>
      </a>
    </li>

    
    <li class="nav-item">
      <a class="nav-link <?php echo e(request()->route()->named('dashboard.docs') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard.docs')); ?>">
        <i class="bi bi-box-arrow-down"></i>
        <span>Unduhan</span>
      </a>
    </li>
  </ul>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
  
  <ul class="sidebar-nav">
    <li class="nav-heading">Administrator</li>

    
    <li class="nav-item">
      <a class="nav-link <?php echo e(request()->route()->named('admin.taxes') ? 'active' : ''); ?>" href="<?php echo e(route('admin.taxes')); ?>">
        <i class="bi bi-card-list"></i>
        <span>Tambah Pajak</span>
      </a>
    </li>

    
    <li class="nav-item">
      <a class="nav-link <?php echo e(request()->route()->named('admin.users') ? 'active' : ''); ?>" href="<?php echo e(route('admin.users')); ?>">
        <i class="bi bi-person"></i>
        <span>Verifikasi User</span>
      </a>
    </li>
  </ul>
  <?php endif; ?>

</aside><!-- End Sidebar--><?php /**PATH C:\laragon\www\bapenda\resources\views/back/partials/sidebar.blade.php ENDPATH**/ ?>