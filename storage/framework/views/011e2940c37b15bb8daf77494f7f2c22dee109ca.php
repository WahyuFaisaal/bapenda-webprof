<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Bapenda | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php echo $__env->make('admin.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <?php echo $__env->yieldPushContent('child-scripts'); ?>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html><?php /**PATH C:\laragon\www\bapenda\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>