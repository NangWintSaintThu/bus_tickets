@extends('backendtemplate')
@section('content') 
         
<div class="container-fluid">
<div class="row">
        <div class="col-md-12 mb-3">
            <h1 class="h3 mb-0 text-gray-800 d-inline-block">Booking Detail Information</h1>
            
        </div>
    </div>
	
    
    <div class="row m-2">

    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead bg-primary text-light">
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
            </table>
        </div>
    </div>
</div>


    	
   @endsection
