
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="container py-5 text-center">
        <h1 class="display-5 py-4">Semua Layanan Depok Single Window</h1>
        <p class="lead">Depok Single Window adalah Media bagi masyarakat Kota Depok untuk memudahkan layanan
        Informasi yang dapat diakses di smartphone hanya dengan satu aplikasi</p>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-4 col-md-2 my-3">
                        <a href="#" class="btnModal" data-toggle="modal" data-target="#modalLayanan-<?php echo e($category->id); ?>" data-content="#" style="color:#1d1d1d;text-decoration:none">
                            <div class="card h-100 card-service">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="<?php echo e(asset('img/icon/'. $category->icon)); ?>" alt=""
                                        class="img-fluid w-50">
                                        <h5 class="card-title pt-2 f-12"><?php echo e($category->nama); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php echo $__env->make('includes.modal-layanan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frontend/resources/views/layanan.blade.php ENDPATH**/ ?>