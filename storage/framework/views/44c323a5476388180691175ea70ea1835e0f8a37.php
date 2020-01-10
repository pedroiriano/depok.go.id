<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Pemerintah Kota Depok</title>
        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <!-- Fonts -->
        
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
        <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">
    </head>
    <body id="page-top">
        <div id="wrapper">
            <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php else: ?>
            <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <?php echo $__env->make('includes.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div class="pb-5">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                        <!-- End of Main Content -->
                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Hak Cipta &copy; Depok.go.id 2019</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->
                    </div>
                    <!-- End of Content Wrapper -->
                </div>
                <!-- End of Page Wrapper -->
                <?php endif; ?>
                <script type="text/javascript">
                    <?php echo $__env->yieldContent('js'); ?>
                </script>
            </body>
        </html><?php /**PATH /var/www/html/frontend/resources/views/includes/admin-layout.blade.php ENDPATH**/ ?>