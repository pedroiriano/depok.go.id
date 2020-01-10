<!-- Modal -->
<div class="modal fade" id="modalLayanan-<?php echo e($category->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLayanan" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="layananTitle"><?php echo e($category->nama); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <h5 class="display-5">Pilih Layanan :</h5>
                        <select class="custom-select custom-select-lg service-selector" id="serviceselector<?php echo e($category->id); ?>">
                            <?php $__currentLoopData = $category->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($service->id); ?>" data-url="<?php echo e($service->url); ?>"><?php echo e($service->namaservice); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php $__currentLoopData = $category->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 pt-4 service" id="<?php echo e($service->id); ?>" <?php if(!$loop->first): ?> style="display: none;" <?php endif; ?>>
                            <iframe src="" data-url="<?php echo e($service->url); ?>" class="service-iframe" frameborder="0" width="100%" height="600px">
                            </iframe>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnModal').click(function(){

        // $('.service:not(:nth-child(2))').hide();
        $('.service-selector').change(function(){
            var $iframe = $('#' + $(this).val() + ' iframe');

            if ($iframe.attr('src') !== $iframe.data('url')) {
                $iframe.attr('src', $iframe.data('url'));
            }
            $(this).closest('.row').find('.service').hide();
            $('#' + $(this).val()).show();
        });
        $('.service-selector').trigger('change');
    
        });
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /Users/macbook/Sites/frontend/resources/views/includes/modal-layanan.blade.php ENDPATH**/ ?>