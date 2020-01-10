<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title>Pemerintah Kota Depok</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/d54b50045e.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">


</head>

<body id="page-top">
    <div id="load"></div>
    <!-- Page Wrapper -->
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
                // document.onreadystatechange = function () {
                //     var state = document.readyState
                //     if (state == 'interactive') {
                //         document.getElementById('contents').style.visibility = "hidden";
                //     } else if (state == 'complete') {
                //         setTimeout(function () {
                //             document.getElementById('interactive');
                //             document.getElementById('load').style.visibility = "hidden";
                //             document.getElementById('contents').style.visibility = "visible";
                //         }, 1000);
                //     }
                // }
                window.FontAwesomeConfig = {
                    searchPseudoElements: true
                }
            </script>
</body>

</html><?php /**PATH /Users/macbook/Sites/depok/resources/views/includes/admin-layout.blade.php ENDPATH**/ ?>