@extends('layouts.main')

@section('title')
Fabric Management
@stop
@section('header')

@stop
@section('content')

<div class="margin-bottom-30">
  <div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills">
          <li class="active"><a href="{{ URL::to('debit') }}">Debit</a></li>
          <li ><a href="{{ URL::to('credit') }}">Credit</a></li>
        </ul>          
    </div>
  </div>
</div>   


<div class="col-md-6">


      <h2>Debit</h2>
      <form class="form-horizontal templatemo-signin-form"
      id="my-awesome-dropzone" role="form" action="debit" method="post" enctype="multipart/form-data">

  @if(Session::get('error_message'))
    <div class="col-md-12">
      <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          {{Session::get('error_message')}}
      </div>
      <br>
      <br>
    </div>
    {{Session::forget('error_message')}}
  @endif

  @if(Session::get('success_message'))
    <div class="col-md-12">
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        {{Session::get('success_message')}}
      </div>
      <br>
      <br>
    </div>
    {{Session::forget('success_message')}}
  @endif

  <div class="form-group  
    <?php 
      if($errors->first('cal_code'))
        echo 'row has-error has-feedback'
    ?>" >
    <div class="col-md-12">
      <label for="cal_code" class="col-sm-2 control-label">Cal Code</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="cal_code" name="cal_code" placeholder="Cal Code" 
              <?php
              if(NULL!=Input::old('cal_code'))
              echo "value='".Input::old('cal_code')."'";
              ?>
          >
              @if($errors->first('cal_code'))
              <span class="fa fa-times form-control-feedback"></span>
              {{$errors->first('cal_code')}}
              @endif
            </div>
          </div>              
        </div>
          <div class="form-group  
    <?php 
      if($errors->first('roll_code'))
        echo 'row has-error has-feedback'
    ?>" >
    <div class="col-md-12">
      <label for="roll_code" class="col-sm-2 control-label">Roll Code</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="roll_code" name="roll_code" placeholder="Roll Code" 
              <?php
              if(NULL!=Input::old('roll_code'))
              echo "value='".Input::old('roll_code')."'";
              ?>
          >
              @if($errors->first('roll_code'))
              <span class="fa fa-times form-control-feedback"></span>
              {{$errors->first('roll_code')}}
              @endif
            </div>
          </div>              
        </div>
        <div class="form-group <?php if($errors->first('yards'))
              echo 'row has-error has-feedback'
              ?>" >
          <div class="col-md-12">
            <label for="yards" class="col-sm-2 control-label">Yards</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="yards" name="yards" placeholder="Yards"
               <?php
              if(NULL!=Input::old('yards'))
              echo "value='".Input::old('yards')."'";
              ?>
              >
               @if($errors->first('yards'))
              <span class="fa fa-times form-control-feedback"></span>
              {{$errors->first('yards')}}
              @endif
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
    </div>

@stop