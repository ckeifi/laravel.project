<?php $__env->startSection('title'); ?>
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
Arslkv | Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<!-- Custom styles for this template -->
<?php echo $__env->make('layouts.partials.admin._styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_class'); ?>
"sidebar-mini sidebar-open"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page'); ?>
<div class="wrapper">
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->

        <?php if(Auth::guard('admin')->check()): ?>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    Hi, <?php echo e(Auth::guard('admin')->user()->name); ?>  <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
        </ul>
        <?php endif; ?>
    </nav>

    <?php echo $__env->make('layouts.partials.admin._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrapper" style="min-height: 917px;">
        <?php echo $__env->make('layouts.partials.admin._flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main content -->
        <section class="content" style="padding-top: 20px">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <!-- /.content -->
    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="row center-lg center-md center-sm center-xs">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>Copyright &copy; 2020  |  by Arslkv</p>
                </div>
            </div>
        </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.partials.admin._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/layouts/admin.blade.php ENDPATH**/ ?>