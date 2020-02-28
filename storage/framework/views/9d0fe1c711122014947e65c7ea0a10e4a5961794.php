<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?>  - <?php echo $__env->yieldContent('title'); ?></title>
    
    <!-- Include Styles -->
    <?php echo $__env->make('layouts.partials.shared._styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
    <?php echo $__env->yieldContent('styles'); ?>
    <?php echo $__env->yieldContent('meta'); ?>
</head>
<body class=<?php echo $__env->yieldContent('body_class'); ?>>
    <?php echo $__env->yieldContent('page'); ?>
    
    <!-- Include Scripts -->
    <?php echo $__env->make('layouts.partials.shared._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/layouts/master.blade.php ENDPATH**/ ?>