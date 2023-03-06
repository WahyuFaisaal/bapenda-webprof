

<?php $__env->startSection('content'); ?>
<!-- Berita -->
<div class="col-12">
    <div class="card">

        <div class="card-body p-3">
            <a href="/admin/dashboard/doc/add" class="btn btn-primary mb-3">
                Tambah Dokumen
            </a>

        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Tahun</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>

        </div>

    </div>
    </div><!-- End Berita -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/admin/docs.blade.php ENDPATH**/ ?>