@extends('layout')

@section('content')

<div class="container-fluid fondo">
    <div class="row">
      <h2>Contact Us</h2>
    </div>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
	    <form class="form-horizontal borde">
	      <div class="form-group">
	        <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="text">ID:</label>
	        <div class="col-sm-12 col-md-4">
	          <input type="text" class="form-control" id="ced" placeholder="V-12345678">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="text">Name:</label>
	        <div class="col-sm-12 col-md-4">
	          <input type="email" class="form-control" id="nombre" placeholder="Full Name">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="email">Email:</label>
	        <div class="col-sm-12 col-md-4">
	          <input type="email" class="form-control" id="email" placeholder="user@example.com">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="number">Age:</label>
	        <div class="col-sm-12 col-md-4">
	          <input type="number" class="form-control" id="age" placeholder="22">
	        </div>
	      </div>
	      <div class="form-group">
	      <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="sel1">State:</label>
	      <div class="col-sm-12 col-md-4">
	      <select class="form-control" id="sel1">
	      <option>Select</option>
	        <option>California</option>
	        <option>Florida</option>
	        <option>New York</option>
	        <option>Washington</option>
	      </select></div>
	      </div>
	      <div class="form-group">
	      <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="sel1">Type:</label>
	      <div class="col-sm-12 col-md-4">
	      <select class="form-control" id="sel1">
	      <option>Select</option>
	        <option>Suggestion</option>
	        <option>Problem</option>
	      </select></div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-sm-1 col-md-2 col-md-offset-2" for="comment">Comment:</label>
	        <div class="col-sm-12 col-md-4">
	          <textarea class="form-control" rows="5" id="comment" placeholder="Shipping Address"></textarea>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-4 col-sm-offset-4">
	          <button type="submit" class="btn btn-block btn-success">Submit</button>
	        </div>
	      </div>
	    </form>
	  </div>
	</div>
</div>