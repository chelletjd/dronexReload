<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dronex</title>
  <link rel="stylesheet" type="text/css" href="{{ url('./css/app.css') }}">
  <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
  <link rel="icon" type="image/png" href="{{ asset('./img/icon.png') }}" />
</head>

<body>
  <nav class="navbar navbar-inverse barra">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle barra2" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/"><img class="navbar-brand logo"  src="{{ asset('./img/logo.jpg') }}" alt="Dronex"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav color">
          <li class="menu"><a href="/">Home</a></li><!--class="active"-->
          <li class="menu"><a href="about">About Us</a></li>
          @if (Auth::check())
          <li class="menu"><a href="services">Services</a></li>
          @endif
          <li class="menu"><a href="prices">Prices</a></li>
          <li class="menu"><a href="contact">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right color">
          <!-- Authentication Links -->
          @if (Auth::guest())
            <li class="menu"><a href="{{ route('register') }}"><span class="fa fa-user-o"></span> Sign Up</a></li>
            <li class="menu"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          @else
            <li class="dropdown menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu color" role="menu">
                <li>
                  <a href="/shipping/show">My Shipments</a>
                </li>
                <li class="menu">
                  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
  
  <div class="container-fluid">
    <footer class="cambia">
      <div class="container-fluid">
        <div class="row cambia">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="cuadro_intro_hover">
              <p>
                <img src="{{ asset('./img/dronex.jpg') }}" class="img-responsive pad footer-img" alt="">
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="cuadro_intro_hover ">
              <p>
                <img src="http://placehold.it/500x330" class="img-responsive pad" alt="">
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <h3>Contact:</h3>
            <p>Have a question or feedback? Contact me!</p>
            <p><a href="" title="Contact me!"><i class="fa fa-envelope"></i> Contact</a></p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <h3>Follow:</h3>
            <a href="" id="gh" target="_blank" title="Twitter">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x"></i>
            </span>Twitter</a>
            <a href=""  target="_blank" title="GitHub"><span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-github fa-stack-1x"></i>
            </span>GitHub</a>
          </div><br/>   
        </div>
        <div class="col-xs-12"><hr><p>Copyright © ChelleT</p></div>
        <button title="Back to top" class="scroll">
          <span class="arrow-up glyphicon glyphicon-chevron-up"></span>
        </button>
      </div>
    </footer>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="{{ url('./js/app.js')}}"></script>
</body>
</html>