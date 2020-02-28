<?php if(session('success')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e(session('success')); ?></strong>
</div>
<?php endif; ?>


<?php if(session('error')): ?>
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e(session('error')); ?></strong>
</div>
<?php endif; ?>


<?php if(session('warning')): ?>
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong><?php echo e(session('warning')); ?></strong>
</div>
<?php endif; ?>


<?php if(session('info')): ?>
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong><?php echo e(session('info')); ?></strong>
</div>
<?php endif; ?>


<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/layouts/partials/admin/_flash-message.blade.php ENDPATH**/ ?>