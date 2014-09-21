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
          <li class="active"><a href="{{ URL::to('fabric/'.$fabric->id) }}">{{$fabric->cal_code}} </a></li>
          <li ><a href="{{ URL::to('debit/'.$fabric->id) }}">Debit</a></li>
          <li ><a href="{{ URL::to('credit/'.$fabric->id) }}">Credit</a></li>
        </ul>          
    </div>
  </div>
</div>   


<div class="row">
    <div class="col-md-6">
<div  class="templatemo-signin-form">
 <div class="form-group">
    <div class="col-md-12">
      <label for="cal_code" class="col-sm-2 control-label">Cal Code</label>
      <div class="col-sm-10">
         	{{$fabric->cal_code}}
            </div>
          </div>              
    </div>
        <br>
        <br>
        <div class="form-group" >
          <div class="col-md-12">
            <label for="supplier_code" class="col-sm-2 control-label">Supplier Code</label>
            <div class="col-sm-10">
              {{$fabric->supplier_code}}
            </div>
          </div>              
        </div>
	<br>
	<br>
   <div class="form-group" >
          <div class="col-md-12">
            <label for="supplier_code" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
  
             <a href="{{asset('uploads/fabric/'.$fabric->file)}}" data-lightbox="{{$fabric->cal_code}}" title="{{$fabric->cal_code}}">
            <img class="img-thumbnail" src="{{asset('uploads/fabric/'.$fabric->file)}}" style="width: 200px; height: 200px;" />
        	</a>

            </div>
          </div>              
        </div>
             
  </div>
  </div>

<div class="col-md-6">

 </div>


</div>

@stop