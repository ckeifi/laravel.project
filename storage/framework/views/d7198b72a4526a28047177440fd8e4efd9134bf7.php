<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mb-3">
                <?php echo $__env->make('profile.partials._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white"><h2>Welcome back <?php echo e(Auth::user()->name); ?>!</h2> </div>
                            <div class="card-body">
                                <p class="text-center">
                                    <img class="img-responsive img-thumbnail"
                                        src="<?php echo e('https://www.gravatar.com/avatar/'.md5(Auth::user()->email).'.png?s=128&d=mm'); ?>"
                                        alt="Profile Picture"
                                    >
                                </p>
                            </div>
                            <div class="card-footer">
                                To update your profile picture, please visit <a href="https://www.gravatar.com" target="_blank">Gravatar <i class="fa fa-external-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Contact Information</div>
                            <div class="card-body">
                                <?php if(session('status')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>

                                <div class="flash-message">
                                        <?php $__currentLoopData = ['danger', 'success']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(Session::has($message)): ?>
                                                <p class="alert alert-<?php echo e($message); ?>"><?php echo e(Session::get($message)); ?></p>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
            
                                You are logged in!
                                <?php if(Session::has('username')): ?>
                                    <p class="alert alert"><?php echo e(Session::get('username')); ?> | <?php echo e(Session::get('email')); ?></p>
                                <?php endif; ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/profile/home.blade.php ENDPATH**/ ?>