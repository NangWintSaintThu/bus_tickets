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
			      
			       
			       <div class="form-group row {{ $errors->has('departure') ? 'has-error' : '' }}">
			        <label for="inputdeparture" class="col-sm-2 col-form-label">Departure Station</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputdeparture" name="departure" class="d-block">
			          <span class="text-danger">{{ $errors->first('departure') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('arrival') ? 'has-error' : '' }}">
			        <label for="inputArrival" class="col-sm-2 col-form-label">Arrival Station</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputArrival" name="arrival" class="d-block">
			          <span class="text-danger">{{ $errors->first('arrival') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('depTime') ? 'has-error' : '' }}">
			        <label for="inputdepTime" class="col-sm-2 col-form-label">Departure Time</label>
			        <div class="col-sm-5">
			          <input type="time" id="inputdepTime" name="depTime" class="d-block">
			          <span class="text-danger">{{ $errors->first('depTime') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputArrival" name="price" class="d-block">
			          <span class="text-danger">{{ $errors->first('price') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('bustype') ? 'has-error' : '' }}">
			        <label for="inputbustype" class="col-sm-2 col-form-label">Bus Type Id</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputbustype" name="bustype" class="d-block">
			          <span class="text-danger">{{ $errors->first('bustype') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('seat') ? 'has-error' : '' }}">
			        <label for="inputseat" class="col-sm-2 col-form-label">Seat</label>
			        <div class="col-sm-5">
			          <input type="text" id="inputseat" name="seat" class="d-block">
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