@extends('master')
@section('content') 

         
<div class="container-fluid">

 <div class="jumbotron jumbotron-fluid subtitle">
        <div class="container">
            
        </div>
    </div>
    
<div class="container-fluid mt-5">

<div class="row">
        <div class="col-md-12 mb-3">
            <h1 class="h3 mb-0 text-gray-800 d-inline-block">Booking Detail Information</h1>
            
        </div>
    </div>
	
    
    <div class="row m-2">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>id</th>
    					<th>travellerinfo_id</th>
    					<th>route_id</th>
    					<th>no_people</th>
                        <th>total</th>
                        <th>seat_no</th>
                        <th>departure_date</th>
    					
    				</tr>
    			</thead>
    	<!-- 	{{-- 	<tbody>
    				@php $i=1; @endphp
    				@foreach($order as $order)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$order->voucherno}}</td>
    					<td>{{$order->user->name}}</td>
    					<td>{{$order->total}} MMK</td>
    					<td>
    						<a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
    						<a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-success">Confirm</a>

    						<a href="#" class="btn btn-danger">Delete</a>
    					</td>
    				</tr>
    				@endforeach
    			</tbody> --}} -->
    		</table>
    	</div>
    </div>

 	</div>
   @endsection
