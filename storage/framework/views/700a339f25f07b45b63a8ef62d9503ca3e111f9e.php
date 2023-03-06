

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
                    <a href="" class="badge bg-info">Verifikasi<i class="bi bi-eye"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        </div>

    </div>
    </div><!-- End Berita -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/admin/users.blade.php ENDPATH**/ ?>