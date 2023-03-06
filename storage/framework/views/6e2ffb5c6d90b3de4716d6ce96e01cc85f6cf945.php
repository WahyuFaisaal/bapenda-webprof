

<?php $__env->startPush('child-css'); ?>
    
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">

        <div class="col-lg-8">
        <h5 class="card-title">Sunting Berita</h5>
        <form method="post" action="<?php echo e(route('dashboard.taxes.update',[$tax->slug])); ?>" enctype="multipart/form-data">
            <?php echo method_field('patch'); ?>
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
unset($__errorArgs, $__bag); ?>" id="title" name="title" autofocus value="<?php echo e(old('title', $tax->title)); ?>">
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
                <label for="image" class="col-sm-2 col-form-label">Upload Gambar</label>
                <input type="hidden" name="old_image" value="<?php echo e($tax->image); ?>">
                <div class="col-sm-10">
                    <?php if($tax->image): ?>
                        <img src="<?php echo e(asset('storage/' . $tax->image)); ?>" class="img-preview img-fluid mb-3 col-sm-5" alt="<?php echo e($tax->title); ?>">                    
                    <?php else: ?>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    <?php endif; ?>
                    <input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="image" name="image" onchange="imagePreview()">
                    <?php $__errorArgs = ['image'];
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
            
            <label for="body" class="form-label mt-4">Isi Pajak</label>
            <?php $__errorArgs = ['body'];
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
                <input type="hidden" name="body" class="body" id="body">
                <div id="editor">
            </div>
            </div>
            <!-- Button -->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Perbaharui</button>
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
        quill.root.innerHTML = <?php echo json_encode(old('body', $tax->body)); ?>;

        function imagePreview() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/back/dashboard/edit-tax.blade.php ENDPATH**/ ?>