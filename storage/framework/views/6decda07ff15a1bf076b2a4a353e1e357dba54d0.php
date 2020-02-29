<?php $__env->startSection('content'); ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.tags.create")); ?>">
                Add New
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        <?php echo e($title); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">
                            Id
                        </th>
                        <th>
                            Name
                        </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($tag->id); ?>

                            </td>
                            <td>
                                <?php echo e($tag->name ?? ''); ?>

                            </td>
                            
                            <td>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.tags.show', $tag->id)); ?>">View</a>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.tags.edit', $tag->id)); ?>">Edit</a>

                                    <form action="<?php echo e(route('admin.tags.destroy',  $tag->id)); ?>" method="post"  style="display: inline-block;"><?php echo method_field('DELETE'); ?> <?php echo csrf_field(); ?>
                                        <button title="Delete tag" type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </form>  
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/admin/tags/index.blade.php ENDPATH**/ ?>