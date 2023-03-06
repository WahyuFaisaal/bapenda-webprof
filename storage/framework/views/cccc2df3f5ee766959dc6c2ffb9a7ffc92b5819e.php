

<?php $__env->startPush('child-css'); ?>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Berita -->
<div class="col-12">
    <div class="card">

        <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <div class="card-body p-3">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">Daftar Unduhan</h5>
                </div>
                <div class="col">
                    <a class="btn btn-primary" style="float: right" data-bs-toggle="modal" data-bs-target="#tambahdokumen">
                        Tambah Dokumen
                    </a>
                </div>
            </div>

            <!-- Vertically centered Modal -->
            <div class="modal fade" id="tambahdokumen" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Tambah Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="<?php echo e(route('dashboard.docs.store')); ?>" enctype="multipart/form-data" id="modaldokumen">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                                <div class="col-12">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" autofocus value="<?php echo e(old('title')); ?>">
                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                    
                                <div class="col-12 mt-2">
                                    <label for="file" class="col-form-label">Upload File</label>
                                    <div class="col-sm-10">
                                        <input class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="file" name="file">
                                        <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 100px" id="description" name="description"></textarea>
                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form><!-- Vertical Form -->
                    </div>
                </div>
            </div><!-- End Vertically centered Modal-->

        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Tahun</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($docs) == 0): ?>
            <tr>
                <td colspan="5">
                    <div class="no-data-found">
                        <i class="fas fa-square fa-5x"></i>
                        <div>Belum ada Dokumen</div>
                    </div>
                </td>
            </tr>
            <?php endif; ?>
            <?php $__currentLoopData = $docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td class="text-primary fw-bold"><?php echo e($doc->title); ?></td>
                <td><?php echo e($doc->description); ?></td>
                <td><?php echo e($doc->created_at->diffForHumans()); ?></td>
                <td>
                    <a href="<?php echo e(route('dashboard.docs.show', [$doc->slug])); ?>" class="badge bg-info"><i class="bi bi-arrow-down-circle"></i></a>
                    <a href="<?php echo e(route('dashboard.docs.edit',[$doc->slug])); ?>" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                    <form action="<?php echo e(route('dashboard.docs.destroy', [$doc->slug])); ?>" method="post" class="d-inline">
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

<?php $__env->startPush('child-scripts'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

    <script>
        $().ready(function() {
            $("#modaldokumen").validate({
                rules: {
                    title: {
                    required: true,
                    minlength: 8
                    },
                    file: {
                        required: true,
                        extension: "pdf|doc|docx"
                    },
                    description: {
                        required: true,
                    },
                },
                messages: {
                    title: {
                    required: "Masukkan Judul",
                    minlength: "Minimal 8 karakter"
                    },
                    file: {
                    required: "Masukkan File",
                    extension: "Data harus berupa pdf, doc, docx",
                    },
                    description: {
                    required: "Masukkan Deskripsi",
                    },
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/back/dashboard/docs.blade.php ENDPATH**/ ?>