<!DOCTYPE html>
<html lang="en">     
<head>   
    @include('portfolio/template/styles')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arslkv</title> 

</head>
<body>
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
   
  <!-- Витрина -->

<!--Функции-->
<section class="features">
    <div class="card">
      <div class="card-image"></div>
      <div class="card-text">
        <span class="date">4 days ago</span>
        <h2>Post One</h2>
        <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
      </div>
      <div class="card-stats">
        <div class="stat">
          <div class="value">4<sup>m</sup></div>
          <div class="type">read</div>
        </div>
        <div class="stat border">
          <div class="value">5123</div>
          <div class="type">views</div>
        </div>
        <div class="stat">
          <div class="value">32</div>
          <div class="type">comments</div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-image card2"></div>
      <div class="card-text card2">
        <span class="date">1 week ago</span>
        <h2>Post Two</h2>
        <p>Adipisicing elit. Ducimus, repudiandae corrupti amet temporibus omnis provident illum maxime quod. Lorem ipsum dolor</p>
      </div>
      <div class="card-stats card2">
        <div class="stat">
          <div class="value">7<sup>m</sup></div>
          <div class="type">read</div>
        </div>
        <div class="stat border">
          <div class="value">7152</div>
          <div class="type">views</div>
        </div>
        <div class="stat">
          <div class="value">21</div>
          <div class="type">comments</div>
        </div>
      </div>
    </div>
    <div class="card">
        <div class="card-image card3"></div>
        <div class="card-text card3">
          <span class="date">3 week ago</span>
          <h2>Post Three</h2>
          <p>Repudiandae corrupti amet temporibus omnis provident illum maxime. Ducimus, lorem ipsum dolor adipisicing elit</p>
        </div>
        <div class="card-stats card3">
          <div class="stat">
            <div class="value">5<sup>m</sup></div>
            <div class="type">read</div>
          </div>
          <div class="stat border">
            <div class="value">3021</div>
            <div class="type">views</div>
          </div>
          <div class="stat">
            <div class="value">15</div>
            <div class="type">comments</div>
          </div>
        </div>
      </div>
</section>

<!-- Информация "Мой навык IT" -->
<section class="info" >
    <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <img src="img/tom.jpg" alt="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h2>My IT skills</h2>
                <ul>
                    <li><i class="fa fa-check"></i>HTML/CSS</li>
                    <li><i class="fa fa-check"></i>JavaScript</li>
                    <li><i class="fa fa-check"></i>Php</li>
                    <li><i class="fa fa-check"></i>MySql</li>
                </ul>
              </div>
        </div>
    </div>
</section>

<!-- О нас -->
<section class="company">
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <h4>Contact with Me</h4> 
              {{ date('D M Y') }}
              <ul>
                  <li><i class="fa-fa-phone"></i>+38(073)409-60-31</li>
                  <li><i class="fa-fa-evnelope"></i>support@arslkv@gmail.com</li>
              </ul>
          </div>
      </div>
  </div>

</section>

<!-- Низ -->

@include('portfolio\template\footer')

<!-- Скрипты -->

@include('portfolio/template/scripts')
</body>
</html>