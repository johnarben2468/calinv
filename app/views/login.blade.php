@extends('layouts.login')

@section('content')
<div><center><h2><b>Login</b></h2></center></div>
  <form class="form-horizontal templatemo-signin-form" role="form" action="login" method="post">
        @if(Session::get('message'))
          <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              {{Session::get('message')}}
        </div>
        <br>
        <br>
    </div>
        {{Session::forget('message')}}
        @endif
         @if(Session::get('logout_message'))
          <div class="col-md-12">
        <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              {{Session::get('logout_message')}}
        </div>
        <br>
        <br>
    </div>
        {{Session::forget('logout_message')}}
        @endif

        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
          </div>
        </div>
       
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Sign in" class="btn btn-default">
            </div>
          </div>
        </div>
      </form>
@stop