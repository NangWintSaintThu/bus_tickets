@extends('backendtemplate')
@section('content') 

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h1 class="h3 mb-0 text-gray-800 d-inline-block">Booking Detail Information</h1>
            
        </div>
    </div>
    
    
    <div class="row m-2">
<<<<<<< HEAD
=======
<<<<<<< HEAD
{{-- 
=======

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD

=======
>>>>>>> 808e42de1145c8463cfe104053df8154a61e95d4
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead bg-primary text-light">
    				<tr>
    					<th>id</th>
    					<th>travellerinfo_id</th>
    					<th>route_id</th>
    					<th>no_people</th>
<<<<<<< HEAD

=======
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
                     <th>total</th>
                     <th>seat_no</th>
                     <th>departure_date</th>
                     
                 </tr>
             </thead> --}}

<<<<<<< HEAD
     
=======
             <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>User No</th>
                            <th>Route</th>
                            <th>No People</th>
                            <th>Total</th>
                            <th>Seat No</th>
                            <th>Departure Date</th>
                            
                        </tr>
                    </thead>
<<<<<<< HEAD
                </table>
            </div>
        </div>
    </div>
@endsection
    

   
=======
=======
               <th>total</th>
              <th>seat_no</th>
              <th>departure_date</th>
    					
    				</tr>
    			</thead>
<<<<<<< HEAD
            </table>
        </div>
=======
>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>User No</th>
                        <th>Route</th>
                        <th>No People</th>
                        <th>Total</th>
                        <th>Seat No</th>
                        <th>Departure Date</th>
                        
                    </tr>
                </thead>
<<<<<<< HEAD
>>>>>>> 808e42de1145c8463cfe104053df8154a61e95d4
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7

    	{{-- <tbody> 
    				@php $i=1; @endphp
    				@foreach($orders as $order)
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
    			
    		</tbody> --}}
        </table>
    </div>
</div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
