<div class="modal fade" id="modal-infografis-<?php echo e($info->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Infografis</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<center>
				<img src="<?php echo e(asset('uploads/infografis/'.$info->imageName)); ?>" alt="" class="img-fluid">
				</center>
				<h6 class="h6">Sumber: <?php echo e($info->sumber); ?></h6>
			</div>
		</div>
	</div>
</div><?php /**PATH /Users/macbook/Sites/depok/resources/views/includes/modal-infografis.blade.php ENDPATH**/ ?>