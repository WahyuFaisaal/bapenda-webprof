

<?php $__env->startSection('content'); ?>

<div class="col-12">
    <div class="card">

        <div class="card-body p-3">
            <h5 class="card-title">Daftar Pajak</h5>
            <a href="/admin/taxes/create" class="btn btn-primary mb-3">
                Buat Pajak
            </a>

        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><a href="/admin/taxes/<?php echo e($tax->id); ?>" class="text-primary fw-bold"><?php echo e($tax->title); ?></a></td>
                <td><?php echo e($tax->excerpt); ?></td>
                <td>
                    <a href="/admin/taxes/<?php echo e($tax->id); ?>" class="badge bg-info"><i class="bi bi-eye"></i></a>
                    <a href="/admin/taxes/<?php echo e($tax->id); ?>/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                    <form action="/admin/taxes/<?php echo e($tax->id); ?>" method="post" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-x-circle"></i></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/admin/admin-taxes.blade.php ENDPATH**/ ?>