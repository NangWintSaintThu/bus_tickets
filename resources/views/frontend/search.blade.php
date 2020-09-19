@extends('master')
@section('content')
{{-- <div class="hero-wrap" style="background-image: url('{{ asset('frontend/img/background.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end"> --}}
           <div class="jumbotron jumbotron-fluid subtitle">
            <div class="container">

            </div>
          </div>

         {{--  <div class="col-lg-12 col-md-6 mt-0 mt-md-5 d-flex mt-5"> --}}


           <section class="ftco-section ftco-no-pb ftco-no-pt">
            <div class="container mt-5"> 
             <div class="row">
              <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate mb-5">
                  <form action="#" class="search-property-1">
                    <div class="row">
                      <div class="col-lg align-items-end">
                        <div class="form-group">
                          <label for="#">Leaving From</label>
                          <div class="form-field">
                            <div class="select-wrap">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select class="form-control" name="leavingfrom">
                               @foreach($cities as $city)
                               <option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$leavingfrom) {{'selected'}} @endif>{{$city->name}}</option>
                               @endforeach 
                             </select>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg align-items-end">
                      <div class="form-group">
                        <label for="#">Going To</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select class="form-control" name="goingto">
                             @foreach($cities as $city)
<<<<<<< HEAD
                               <option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$goingto) {{'selected'}} @endif>{{$city->name}}</option>
                               @endforeach  
=======

                               <option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$goingto) {{'selected'}} @endif>{{$city->name}}</option>
                               @endforeach  

>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
                           </select>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="" class="label">Departure date</label>
                      <input type="text" class="form-control" id="book_pick_date"  value='{{$city_date}}'>
                    </div>
                  </div>
             
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Number of seat</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="city_seat" id="" class="form-control">
                           <option class="selected">{{$city_seat}}</option>
                           <option value="">1</option>
                           <option value="">2</option>
                           <option value="">3</option>
                           <option value="">4</option>
                           <option value="">5</option>
                           <option value="">6</option>

                         </select>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
               <div>
                 @foreach($routes as $route)
                 <div class="row">
                  <div class="col-md-12 mx-auto">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="{{asset($route->photo)}}" width="120px" height="100px">
                          </div>
                          <div class="col-md-4">
                            <h4>{{$route->bustype->name}}</h4>
                            <p>{{$route->departure->name}}._.{{$route->arrival->name}}</p>
                          </div>

                          <div class="col-md-4">
                            <form action="{{route('seatpage')}}" method="post" class="d-inline-block">
                              @csrf
                              <input type="hidden" name="leavingfrom" value="{{$leavingfrom}}">
                              <input type="hidden" name="goingto" value="{{$goingto}}">
                              <input type="hidden" name="time" value="{{$city_seat}}">
                              <input type="hidden" name="seat" value="{{$route_id}}">

                               <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Search Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div
           {{--  </section>


                            
                            </form>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               </div> --}}

@endforeach
</div>
</section>

@endsection   