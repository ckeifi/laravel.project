<div class="list-group">
    <a href="<?php echo e(route('profile.home')); ?>"
        class="list-group-item <?php echo e(Request::is('profile.home') ? 'bg-primary text-white' : ''); ?>">Dashboard
    </a>
    <a href="<?php echo e(route('profile.info')); ?>"
        class="list-group-item <?php echo e(Request::is('profile.info') ? 'bg-primary text-white' : ''); ?>">Contact Info
    </a>
</div><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/profile/partials/_menu.blade.php ENDPATH**/ ?>