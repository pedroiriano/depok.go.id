<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Portal Resmi Pemerintah Kota Depok</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('img/favicon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('img/favicon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/favicon/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('img/favicon/site.webmanifest')); ?>">
</head>

<body>
    <div id="app">
        
        <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
    <?php echo $__env->yieldContent('js'); ?>
</html><?php /**PATH C:\xampp\htdocs\depok.go.id\resources\views/includes/layout.blade.php ENDPATH**/ ?>