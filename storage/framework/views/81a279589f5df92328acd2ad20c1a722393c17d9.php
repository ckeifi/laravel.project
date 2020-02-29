<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header"><?php echo e($title); ?></div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.tags.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($tag) ? $tag->name : '')); ?>">
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block"></p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Save">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/admin/tags/create.blade.php ENDPATH**/ ?>