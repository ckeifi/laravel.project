<?php $__env->startSection('content'); ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.users.create")); ?>">
                Add New
            </a>
            <a class="btn btn-warning" href="<?php echo e(route("admin.users.trashed")); ?>">
                Trashed Users
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
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($user->id); ?>

                            </td>
                            <td>
                                <?php echo e($user->name ?? ''); ?>


                            </td>
                            <td>
                                <input data-id="<?php echo e($user->id); ?>" class="status" type="checkbox" name="switch" <?php echo e(($user->status == 1)? "checked":""); ?>>
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.users.show', $user->id)); ?>">View</a>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.users.edit', $user->id)); ?>">Edit</a>

                                    <form action="<?php echo e(route('admin.users.destroy',  $user->id)); ?>" method="post"  style="display: inline-block;"><?php echo method_field('DELETE'); ?> <?php echo csrf_field(); ?>
                                        <button title="Delete user" type="submit" class="btn btn-xs btn-danger">Delete</button>
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
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/bootstrap-switch.min.js')); ?>"></script>

<script>
    $(document).ready(function () {
        $("[name='switch']").bootstrapSwitch();
        
        $.each($("[name='switch']"), function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked') == true ? true : false);
        });

        $("[name='switch']").on('switchChange.bootstrapSwitch', function (e) {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var user_id = $(this).data('id'); 
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/admin/changeStatus',
                dataType : 'json',
                type: 'POST',
          
                data: {
                    status: status, 
                    user_id: user_id,
                     _token: '<?php echo e(csrf_token()); ?>'
                },
            })
            .then(function(data){
                console.log(data.success)
            });
        });

    });
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/admin/users/index.blade.php ENDPATH**/ ?>