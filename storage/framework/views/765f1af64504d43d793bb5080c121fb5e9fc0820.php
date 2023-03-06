

<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card">

        <div class="card-body p-3">

        <h5 class="card-title">Verifikasi User</h5>
        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td class="text-primary fw-bold"><?php echo e($user->name); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td>
                    <?php if($user->is_admin == 1): ?>
                        <span class="badge bg-success text-dark"><i class="bi bi-check-circle me-1"></i> Sudah Verifikasi</span>
                    <?php else: ?>
                        <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i> Belum Verifikasi</span>
                    <?php endif; ?>
                </td>
                <td>
                    <div>
                        <button class="nav-link px-3 bg-white border-0" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-check-circle"></i> Verifikasi</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Sunting</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-x-circle"></i> Hapus</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        </div>

    </div>
    </div><!-- End Berita -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/back/admin/users.blade.php ENDPATH**/ ?>