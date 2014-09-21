@extends('layouts.main')

@section('title')
New Fabric
@stop

@section('content')
 <div class="margin-bottom-30">
            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills">
                  <li ><a href="management">Fabric Management </a></li>
                  <li class="active"><a href="create">Add Fabric</a></li>
            
                </ul>          
              </div>
            </div>
          </div>   
<br>
<br>

<form class="form-horizontal templatemo-signin-form"
      id="my-awesome-dropzone" role="form" action="create" method="post" enctype="multipart/form-data">

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
        <div class="form-group <?php if($errors->first('supplier_code'))
              echo 'row has-error has-feedback'
              ?>" >
          <div class="col-md-12">
            <label for="supplier_code" class="col-sm-2 control-label">Supplier Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="supplier_code" name="supplier_code" placeholder="Supplier Code"
               <?php
              if(NULL!=Input::old('supplier_code'))
              echo "value='".Input::old('supplier_code')."'";
              ?>
              >
               @if($errors->first('supplier_code'))
              <span class="fa fa-times form-control-feedback"></span>
              {{$errors->first('supplier_code')}}
              @endif
            </div>
          </div>              
        </div>
        <div class="form-group <?php if($errors->first('file'))
              echo 'row has-error has-feedback'
              ?>" >
          <div class="col-md-12">
            <label for="file" class="col-sm-2 control-label">File</label>
            <div class="col-sm-10">
              <div class="fallback">
                <input type="file" class="form-control" id="file" name="file" >
              @if($errors->first('file'))
              <span class="fa fa-times form-control-feedback"></span>
              {{$errors->first('file')}}
              @endif
              </div>
              
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