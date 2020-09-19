@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Route Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('routes.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      
			       <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
              <label for="inputname" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-5">
                <input type="text" id="inputname" name="name" class="d-block">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
            </div>
			       <div class="form-group row {{ $errors->has('departure_station') ? 'has-error' : '' }}">
			        <label for="inputdeparture" class="col-sm-2 col-form-label">Departure Station</label>
			        <div class="col-sm-5">
			        	{{-- @foreach($routes as $route) --}}
<<<<<<< HEAD
			          <input type="text"{{--  id="inputdeparture" name="depraturestation" class="d-block" value='{{ $depraturestation}}'> --}}
			          value="{{$route->id}}" @if($route->id==$depraturestation) @endif>{{$route->name}}>
                        {{--  @endforeach --}}
			          <span class="text-danger">{{ $errors->first('departure') }}</span>
=======
			          <input type="text" id="inputdeparture" name="departurestation" class="d-block" >
                        {{--  @endforeach --}}
			          <span class="text-danger">{{ $errors->first('departure_station') }}</span>
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('arrival_station') ? 'has-error' : '' }}">
			        <label for="inputArrival" class="col-sm-2 col-form-label">Arrival Station</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputArrival" name="arrivalstation" class="d-block" >
			          <span class="text-danger">{{ $errors->first('arrival_station') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('departure_time') ? 'has-error' : '' }}">
			        <label for="inputdepTime" class="col-sm-2 col-form-label">Departure Time</label>
			        <div class="col-sm-5">
			          <input type="time" id="inputdepTime" name="route_time" class="d-block" >
			          <span class="text-danger">{{ $errors->first('departure_time') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputArrival" name="price" class="d-block" >
			          <span class="text-danger">{{ $errors->first('price') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('bus_type_id') ? 'has-error' : '' }}">
			        <label for="inputbustype" class="col-sm-2 col-form-label">Bus Type Id</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputbustype" name="bus_type_id" class="d-block" >
			          <span class="text-danger">{{ $errors->first('bus_type_id') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('busseat') ? 'has-error' : '' }}">
			        <label for="inputseat" class="col-sm-2 col-form-label">Seat</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputseat" name="busseat" class="d-block" >
			          <span class="text-danger">{{ $errors->first('seat') }}</span>
			        </div>
			      </div>

			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Create">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection