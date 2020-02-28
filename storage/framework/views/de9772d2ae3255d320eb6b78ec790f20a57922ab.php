<?php $__env->startSection('title'); ?>
  ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
     | Blog Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <!-- Custom styles for this template -->
    <?php echo $__env->make('layouts.partials.app._styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
    <!-- Custom meta for this template -->
    <?php echo $__env->make('layouts.partials.app._meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_class'); ?>
    "blog-body"
  <!-- Custom bady class for this template -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page'); ?>

    <?php echo $__env->make('layouts.partials.app._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Content -->
    <div class="container" id="app">

        <div class="row">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->yieldContent('sidebar'); ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php echo $__env->make('layouts.partials.app._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<!-- Custom scripts for this template -->
<?php echo $__env->make('layouts.partials.app._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/layouts/blog.blade.php ENDPATH**/ ?>