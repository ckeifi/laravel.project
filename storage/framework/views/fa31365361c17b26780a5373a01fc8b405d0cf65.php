<?php $__env->startSection('content'); ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.posts.create")); ?>">
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
                            Title
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
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($post->id); ?>

                            </td>
                            <td>
                                <?php echo e($post->title ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e(\App\Enums\PostEnumStatusType::getDescription($post->status) ?? ''); ?>

                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.posts.show', $post->id)); ?>">View</a>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.posts.edit', $post->id)); ?>">Edit</a>

                                    <form action="<?php echo e(route('admin.posts.destroy',  $post->id)); ?>" method="post"  style="display: inline-block;"><?php echo method_field('DELETE'); ?> <?php echo csrf_field(); ?>
                                        <button title="Delete post" type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </form>  
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($posts->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>