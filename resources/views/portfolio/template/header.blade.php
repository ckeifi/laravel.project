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
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ route('login') }}">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          </div>
      @endif
</header>
