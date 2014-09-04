@extends('layouts.login')

@section('content')
  <form class="form-horizontal templatemo-signin-form" role="form" action="createfabric" method="post" enctype="multipart/form-data">
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

        <div class="form-group">
          <div class="col-md-12">
            <label for="name" class="col-sm-2 control-label">Fabric Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Fabric name">
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="file" class="col-sm-2 control-label">File</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="file" name="file" >
            </div>
          </div>
        </div>
       
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Save" class="btn btn-default">
            </div>
          </div>
        </div>
      </form>
@stop