<header>
    <img class="logo" src="img/logo.png" alt="logo" title=""Arslkv>
    <nav>
        <ul class="nav_links">
            <li><a href="https://ua.linkedin.com/in/svyat-voytenko-b6b7ab1a2">LinkedIn</a></li>
            <li><a href="https://github.com/ckeifi">Github</a></li>
            <li><a href="http://instagram.com/arslkv_">Instagram</a></li>
            <li><a href="/blog">Blog</a></li>
        </ul>
    </nav>
    <div class="flex-center position-ref full-height">
      <?php if(Route::has('login')): ?>
          <div class="top-right links">
              <?php if(auth()->guard()->check()): ?>
                  <a href="<?php echo e(url('/home')); ?>">Home</a>
              <?php else: ?>
                  <a href="<?php echo e(route('login')); ?>">Login</a>

                  <?php if(Route::has('register')): ?>
                      <a href="<?php echo e(route('register')); ?>">Register</a>
                  <?php endif; ?>
              <?php endif; ?>
          </div>
      <?php endif; ?>
</header>
<?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/portfolio/template/header.blade.php ENDPATH**/ ?>