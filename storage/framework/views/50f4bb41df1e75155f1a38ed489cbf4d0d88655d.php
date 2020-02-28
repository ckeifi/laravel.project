<?php $__env->startSection('title'); ?>
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
| All Posts
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="my-4"><?php echo e($title); ?>

        <small>Secondary Text</small>
    </h1>

    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="<?php echo e($post->cover_path); ?>" alt="Card image cap">
        <div class="card-body">
            <a href="<?php echo e(route('blog.show', $post->slug)); ?>"><h2 class="card-title"><?php echo e($post->title); ?></h2></a>
            <p class="card-text"><?php echo e($post->description); ?></p>
            <a href="<?php echo e(route('blog.show', $post->slug)); ?>" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on <?php echo e($post->created_at); ?> by: 
            <a href="#"><?php echo e($post->user->name); ?></a>
            <span class="float-right">Visits: <?php echo e($post->visits); ?></span>
        </div>
    </div>
            
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No posts yet...</p>
    <?php endif; ?>
    <!-- Blog Post -->
    

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <?php echo e($posts->links()); ?>

    </ul>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>

<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">Web Design</a>
                        </li>
                        <li>
                            <a href="#">HTML</a>
                        </li>
                        <li>
                            <a href="#">Freebies</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">JavaScript</a>
                        </li>
                        <li>
                            <a href="#">CSS</a>
                        </li>
                        <li>
                            <a href="#">Tutorials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new
            Bootstrap 4 card containers!
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/blog/index.blade.php ENDPATH**/ ?>