@extends('layout')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="prueba" src="{{ asset('./img/dronex.jpg') }}">
      </div>

      <div class="item">
        <img class="prueba" src="{{ asset('./img/drone1.jpg') }}">
      </div>

      <div class="item">
        <img class="prueba" src="{{ asset('./img/drone2.jpg') }}">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>

<div class="container-fluid margen">
  <div class="row text-center">
	<div class="col-xs-12 col-sm-4">
      <i class="fa fa-exclamation-circle fa-5x"></i>
      <h3>About Us.</h3>
      <p>We are a small company in charge of making personal national
         shipments using drones for long and short distances in less time.
         Making your life easier. Send your packages with us and ensure a
         fast and effective shipping.</p>
    </div>
	<div class="col-xs-12 col-sm-4">
	  <i class="fa fa-address-book-o fa-5x"></i>
	  <h3>Contact Us.</h3>
	  <p>Contact us in our social networks, send us an email to:
	     info@dronex.com or you can write in the Contact us Section.
	     All sugestions are welcome. </p>
	</div>
	<div class="col-xs-12 col-sm-4">
	  <i class="fa fa-question fa-5x"></i>
	  <h3>How we do it?</h3>
	  <p>We have two ways of send package, you can read mora about
	     that in the About Us section</p>
	</div>
  </div>
</div>
<div class="container-fluid margen">
<div class="row text-center">
  <h3>Our Clients</h3>
</div>
  <div class="row">
      <div class="col-xs-6 col-sm-3">
        <img class="imagen img-responsive center-block" src="{{ asset('img/logo1.png') }}" alt="">
      </div>
      <div class="col-xs-6 col-sm-3">
        <img class="imagen img-responsive center-block" src="{{ asset('img/logo2.png') }}" alt="">
      </div>
      <div class="col-xs-6 col-sm-3">
        <img class="imagen img-responsive center-block" src="{{ asset('img/logo3.png') }}" alt="">
      </div>
      <div class="col-xs-6 col-sm-3">
        <img class="imagen img-responsive center-block" src="{{ asset('img/logo4.png') }}" alt="">
      </div>
  </div>
</div>

@stop