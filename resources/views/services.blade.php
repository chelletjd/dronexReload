@extends('layout')

@section('content')

<div class="container-fluid fondo">
    <div class="row">
      <h2>Shipping Form</h2>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <form class="form-horizontal borde" id="form" method="POST" action="/shipping/store">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="col-sm-12 col-md-4 ">
              <input type="hidden" class="form-control" id="ced" name="userID" value="{{ Auth::user()->id }}" placeholder="V-12345678">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="text">Name:</label>
            <div class="col-sm-12 col-md-4">
              <input type="text" class="form-control" id="nombre" name="name" value="{{ Auth::user()->name }}" placeholder="Full Name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="email">Email:</label>
            <div class="col-sm-12 col-md-4">
              <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="user@example.com">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2 col-md-2 col-md-offset-2" for="text">Shipping method:</label>
            <div class="radio">
              <label class="col-sm-2 col-md-1">
                <input type="radio" id="r1" value="o-h" name="method">Office - House
              </label>
              <label class="col-sm-2 col-md-1">
                <input type="radio" id="r2" value="o-o" name="method">Office - Office
              </label>
              <label class="col-sm-2 col-md-1">
                <input type="radio" id="r3" value="h-o" name="method">House - Office
              </label>
              <label class="col-sm-2 col-md-1">
                <input type="radio" id="r4" value="h-h" name="method">House - House
              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-9 col-md-2 col-md-offset-2" for="comment">Shipping Address House / Office:</label>
            <div class="col-sm-12 col-md-4">
              <textarea class="form-control" rows="5" id="shipAd" name="shipAd" placeholder="Shipping Address"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-9 col-md-2 col-md-offset-2" for="comment">Reception Address House / Office:</label>
            <div class="col-sm-12 col-md-4">
              <textarea class="form-control" rows="5" id="recepAd" name="recepAd" placeholder="Reception Address"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="text">Weight in Kg:</label>
            <div class="col-sm-12 col-md-4">
              <input type="number" class="form-control" id="weight" name="weight">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="text">Receiver ID:</label>
            <div class="col-sm-12 col-md-4 ">
              <input type="text" class="form-control" id="recId" name="recId" placeholder="V-12345678">
            </div>
          </div>
          <div class="col-sm-12 col-md-4" id="cost">
              
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
              <button type="button" id="shipment" class="btn btn-block btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row text-center">
      <h2>Shipping Options</h2>
      </div>
      <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
      <img class="imagen img-responsive center-block" src="{{ asset('./img/how1.png') }}" alt="">
      <img class="imagen img-responsive center-block" src="{{ asset('./img/how2.png') }}" alt="">
      </div>
    </div>
 </div>

@stop