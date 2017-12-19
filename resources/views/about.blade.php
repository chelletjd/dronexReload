@extends('layout')

@section('content')

<div class="container-fluid fondo1">
    <section>
      <div class="col-sm-12">
      <img class="imagen img-responsive center-block" src="{{ asset('./img/about.png') }}" alt="">
      </div>
    </section>
    <section>
      <div class="row">
        <h2>More Information.</h2>
      </div>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-4 formato">
        <p><span>A drone, in a technological context, is an unmanned aircraft.
          Drones are more formally known as unmanned aerial vehicles
          (UAVs) or unmanned aircraft systems (UASes). Essentially,
          a drone is a flying robot. The aircrafts may be remotely
          controlled or can fly autonomously through software-controlled
          flight plans in their embedded systems working in conjunction
          with onboard sensors and GPS.</span></p>
        </div>
        <div class="col-sm-4">
          <img class="img-responsive " src="{{ asset('./img/about1.png') }}" alt="">
        </div>
        </div>
      <div class="row">
        <h2>How we do it?</h2>
      </div>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-4">
          <img class="img-responsive " src="{{ asset('./img/about2.png') }}" alt="">
        </div>
        <div class="col-sm-4 formato">
        <p><span>With us you have two options you can take the package to one of
                our offices and send the package either to another office or home
                direction. Another option is that you tell us that look for the
                package in your home and send it to an office or home direction.
                We make everything for your confort and happiness.</span></p>
        </div>
        </div>
    </section>
</div>

@stop