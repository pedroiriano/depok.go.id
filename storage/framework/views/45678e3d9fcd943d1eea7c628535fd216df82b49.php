
<?php $__env->startSection('content'); ?>
<div class="container-fluid py-5">
   <div class="container">
   <div class="row">
      <div class="col-12">
         <h1 class="display-3 py-5">Agenda</h1>
      </div>
      <div class="col-12">
         <?php $__currentLoopData = $agendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="row mb-3">
            <div class="col-2">
            <img src="<?php echo e(asset('uploads/agenda/'.$agenda->imageName)); ?>" alt="" class="img-fluid">
            </div>
            <div class="col">
               <h5 class="h5">
                  <?php echo e($agenda->nama); ?>    
               </h5>
               <p class="lead"> Tanggal: <?php echo e($agenda->tanggal); ?> </p>
               <p class="lead"> Sumber: <?php echo e($agenda->sumber); ?> </p>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
</div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Sites/depok/resources/views/agenda.blade.php ENDPATH**/ ?>