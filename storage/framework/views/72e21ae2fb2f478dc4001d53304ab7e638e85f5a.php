<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('node_modules/tinymce/tinymce.js')); ?>"></script>
<div class="container-fluid">
    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">User</h1>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frontend/resources/views/admin/user.blade.php ENDPATH**/ ?>