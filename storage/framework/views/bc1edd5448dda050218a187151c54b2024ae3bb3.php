

<?php $__env->startPush('child-css'); ?>
    
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">

        <div class="col-lg-8">
        <h5 class="card-title">Tambah Dokumen</h5>
        <form method="post" action="<?php echo e(route('dashboard.docs.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
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
                <label for="file" class="col-sm-2 col-form-label">Upload File</label>
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
            
            <label for="description" class="form-label mt-4">Deskripsi</label>
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
            <div>
                <input type="hidden" name="description" class="description" id="description">
                <div id="editor">
            </div>
            </div>
            <!-- Button -->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>
        </form><!-- Vertical Form -->
        

    </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('child-scripts'); ?>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        var quill = new Quill('#editor', {
        theme: 'snow'
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.querySelector("input[name='body']").value = quill.root.innerHTML;
        });
        quill.root.innerHTML = <?php echo json_encode(old('body')); ?>;
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/back/dashboard/create-doc.blade.php ENDPATH**/ ?>