@extends('backendtemplate')
@section('content')
   <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Route Create Form</h1>
        </div>
              <div class="row">
              	<div class="col-md-12">
              		<form action="{{route('routes.update',$route->id)}}" method="post" enctype="multipart/form-data">
              			@csrf
                        <div class="form-group row">
                                <label for="inputtime" class="col-sm-2 col-form-label" >Departure_Station</label>
                                 <div class="col-sm-10">
                                  <input type="departure_station" class="form-control" id="inputstation" name="departurestation" value="{{$route->departure_station}}">
                                  <span class="text-danger">{{$errors->first('departurestation')}}</span>
                             </div>
                  
                             </div>
                             <div class="form-group row">
                                <label for="inputtime" class="col-sm-2 col-form-label">Arrival_Station</label>
                                 <div class="col-sm-10">
                                  <input type="arrival_station" class="file" id="inputphoto" name="arrivalstation" value="{{$route->arrival_station}}">
                                  <span class="text-danger">{{$errors->first('arrivalstation')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputphoto" class="col-sm-2 col-form-label">Departure_Time</label>
                                 <div class="col-sm-10">
                                  <input type="time" class="file" id="inputtime" name="departuretime" value="{{$route->departure_time}}">
                                  <span class="text-danger">{{$errors->first('departuretime')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputprice" class="col-sm-2 col-form-label">Price</label>
                                 <div class="col-sm-10">
                                  <input type="price" class="file" id="inputprice" name="price" value="{{$route->price}}">
                                  <span class="text-danger">{{$errors->first('price')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputbus" class="col-sm-2 col-form-label">Bus Type</label>
                                 <div class="col-sm-10">
                                  <input type="text" class="file" id="inputbus" name="bustypeid" value="{{$route->bus_type_id}}">
                                  <span class="text-danger">{{$errors->first('bustypeid')}}</span>
                             </div>
                             </div>

                              <div class="form-group row">
                                <label for="inputseat" class="col-sm-2 col-form-label">Seat</label>
                                 <div class="col-sm-10">
                                  <input type="arrival_station" class="file" id="inputseat" name="busseat" value="{{$route->seat}}">
                                  <span class="text-danger">{{$errors->first('busseat')}}</span>
                             </div>
                             </div>

                             

                               <div class="form-group row">
                               <div class="col-sm-10">
                               <button type="create" class="btn btn-primary" name="btnsubmit" value="Create">Create</button>
                             </div>
                            </div>
                           </form>
                         </div>
                       </div> 
                       @endsection