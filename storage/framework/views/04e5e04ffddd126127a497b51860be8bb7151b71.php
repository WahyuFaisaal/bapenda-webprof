<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bapenda Gowa | <?php echo e($title); ?></title>

    <!-- Favicon ================================================== -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/Bapenda.png')); ?>">

    <!-- CSS ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/bootstrap.min.css')); ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome/css/all.min.css')); ?>">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/animate-css/animate.css')); ?>">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/slick/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/slick/slick-theme.css')); ?>">
    <!-- Colorbox -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/colorbox/colorbox.css')); ?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="body-inner">
        
        <?php echo $__env->make('front.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
        <?php echo $__env->yieldContent('content'); ?>
        
        <?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
        <script src="<?php echo e(asset('plugins/jQuery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/bootstrap/bootstrap.min.js')); ?>" defer></script>
        <script src="<?php echo e(asset('plugins/slick/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/slick/slick-animation.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/colorbox/jquery.colorbox.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/shuffle/shuffle.min.js')); ?>" defer></script>
    
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <script src="<?php echo e(asset('plugins/google-map/map.js')); ?>" defer></script>
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    
    </div>

</body>
</html><?php /**PATH C:\laragon\www\bapenda\resources\views/front/layouts/main.blade.php ENDPATH**/ ?>