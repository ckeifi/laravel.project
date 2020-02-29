<?php $__env->startSection('content'); ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.users.index")); ?>">
                All users
            </a>
            <a class="btn btn-success" href="<?php echo e(route("admin.users.create")); ?>">
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
                            Status
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <?php echo e($user->id); ?>

                            </td>
                            <td>
                                <?php echo e($user->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e(\App\Enums\UserStatus::getDescription($user->status) ?? ''); ?>

                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.users.restore',  $user->id)); ?>" method="post" style="display: inline">
                                    <?php echo csrf_field(); ?>
                                    <button title="Restore user" type="submit" class="btn btn-xs btn-primary">Restore</button>
                                </form>    
                                <form action="<?php echo e(route('admin.users.force',  $user->id)); ?>" method="post" style="display: inline">
                                    <?php echo method_field('DELETE'); ?> 
                                    <?php echo csrf_field(); ?>
                                    <button title="Force Delete user" type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>  
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>No trashed users yet...</p>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/admin/users/trashed.blade.php ENDPATH**/ ?>