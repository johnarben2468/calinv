@extends('layouts.main')

@section('title')
Search Results
@stop
@section('content')
<div class="margin-bottom-30">
  <div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills">
          <li class="active"><a href="fabric/management">Fabric Management </a></li>
          <li ><a href="fabric/create">Add Fabric</a></li>
        </ul>          
    </div>
  </div>
</div>   

			<?php

                $fabricCounter = $fabrics->count();
                $fabrics = $fabrics->paginate(10);
			?>
<table id="keywords" class="table table-striped display tablesorter">
	<thead>
		<tr>
			<th>Cal Code</th>
			<th>Supplier Code</th>
			<th>Remarks</th>

		</tr>
	</thead>

	<tbody>
		@foreach ($fabrics as $fabric)
			<tr>

					<td> <a href="/fabric/{{$fabric->id}}">{{ $fabric->cal_code; }}</a></td>
					<td> {{ $fabric->supplier_code; }}</td>
					<td> </td>
				
			</tr>
		@endforeach
	</tbody>
</table>
<div id="pages" align="center" >
    @if($fabricCounter != 0)
    {{ $fabrics->links() }}
    @else
    <p><i>No fabric found.</i></p>
    @endif
</div>
@stop