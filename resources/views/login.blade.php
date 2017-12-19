@extends('layout')

@section('content')

<div class="container-fluid fondo">
  <div class="row">
    <h2>Login</h2>
  </div>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <form id="loginform" class="form-horizontal borde" role="form">
        <div class="input-group margen">
          <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
          <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
        </div>
        <div class="input-group margen">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
        </div>
        <div class="input-group">
          <div class="checkbox">
            <label>
              <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
            </label>
          </div>
        </div>
        <div style="margin-top:10px" class="form-group">
          <div class="col-sm-12 controls">
            <a id="btn-login" href="#" class="btn btn-block btn-success">Login  </a>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12 control">
            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                Don't have an account! 
              <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                  Sign Up Here
              </a>
            </div>
          </div>
        </div>    
      </form>
    </div>
  </div>
</div>

@stop