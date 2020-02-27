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
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Github</a></li>
                <li><a href="#">Instagram</a></li>
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
  <section class="showcase">
    <div class="container">
        <div class="row center-xs center-sm center-md center-lg ">
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-7 showcase-content">
                <h1>Welcome to<span class="primary-text"> Webside</span></h1>
                <p>Personality  blog of ME </p>
            </div>
        </div>
    </div>
</section>
<!--Функции-->
<section class="features">
  <div class="container">
      <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Features</h2>
              <p>Languaches wich i learn</p>
              <!-- Иконки 1 -->
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="./img/html-css.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Html/CSS</h5>
                      <p class="card-text">Learning 30hours.</p>
                      <p class="card-text"><small class="text-muted">Last updated 25.02.2020</small></p>
                    </div>
                  </div>
                </div>
              </div>
               <!-- Иконки 2 -->
               <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="./img/php_PNG45.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Php/JavaScripts</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 25.02.2020</small></p>
                    </div>
                  </div>
                </div>
              </div>
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