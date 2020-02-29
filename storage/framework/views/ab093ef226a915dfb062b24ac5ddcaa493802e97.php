<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    | <?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Post Content Column -->
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4"><?php echo e($post->title); ?></h1>

    <!-- Author -->
    <p class="lead">
        by
        <a href="#"><?php echo e($post->user->name); ?></a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on January <?php echo e($post->created_at); ?> <span class="float-right">Visits: <?php echo e($post->visits); ?></span></p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="<?php echo e($post->cover_path); ?>" alt="<?php echo e($post->title); ?>">

    <hr>

    <!-- Post Content -->
    <p class="lead"><?php echo e($post->content); ?></p>
    <p><strong>Categories: </strong> 
    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="" class="badge badge-pill badge-info"><?php echo e($cats->name); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
    <hr>

    <!-- Comments Form -->
    <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Single Comment -->
    <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
            lacinia congue felis in faucibus.
        </div>
    </div>

    <!-- Comment with nested comments -->
    <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
            vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
            lacinia congue felis in faucibus.

            <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

        </div>
    </div>

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

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/blog/show.blade.php ENDPATH**/ ?>