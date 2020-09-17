@extends('master')
@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('frontend/img/bg-1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text">
              <h1 class="mb-4">Wellcome <span>To Bus REservation</span> </h1>
              {{-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
              <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="ion-ios-play"></span>
                </div>
                <div class="heading-title ml-5">
                  <span>Easy steps for renting a car</span>
                </div>
              </a> --}}
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
            <form action="{{route('searchpage')}}" class="request-form ftco-animate" method="post">
              @csrf
              <h2>Make your Booking</h2>

              
                {{-- <label for="" class="label">Leaving From</label>
                <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> --}}
                 {{-- <span class="form-label">Leaving from</span>
                   <select class="form-control">
                    <option>Select Location</option>
                      <option>Tachlike</option>
                      <option>Kyaing Tong</option>
                      <option>Mong Phyak</option>
                      <option>Tar Lay</option>
                      
                    </select> --}}
                  {{-- </div> --}}
                   {{-- <label for="inputPhoto" class="col-sm-2 col-form-label">Leaving From</label> --}}
                <span class="text-danger">{{$errors->first('please select departure place ')}}</span>
              <div class="form-group">

                <span class="form-label">Leaving From</span>
                <select name="leavingfrom" id="city" class="form-control">
                  <optgroup label="Choose City">
                @foreach($cities as $city)
                  <option placeholder=" Choose City" value="{{$city->id}}">{{$city->name}}</option>
                @endforeach 
              </optgroup>
                </select>
                <span class="text-danger">{{ $errors->first('city') }}</span>
                   
                {{-- <label for="" class="label">Going To</label>
                <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> --}}

              </div>
             
            
              <span class="text-dsanger">{{$errors->first('please select departure place ')}}</span>
              <div class="form-group">
                <span class="form-label">Going To</span>
                <select name="goingto" id="city" class="form-control">
                  <optgroup label="Choose City">
                @foreach($cities as $city)
                  <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach 
              </optgroup>
                </select>
                <span class="text-danger">{{ $errors->first('city') }}</span>
                   
                {{-- <label for="" class="label">Going To</label>
                <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> --}}

              </div>
              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Departure date</label>
                  <input type="text" class="form-control" id="book_pick_date" placeholder="Date" name="city_date">
                </div>
                <div class="form-group ml-2">
                  {{-- <label for="" class="label">Number of seat</label> --}}
                  <span class="form-label">Number of seat</span>
                    <select class="form-control" name="city_seat">

                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                    </select>

                  {{-- <input type="text" class="form-control" id="book_off_date" placeholder="Date"> --}}
                </div>
              </div>
              <div class="form-group">
                <label for="" class="label">Pick-up time</label>
                <input type="text" class="form-control" id="time_pick" placeholder="Time" name="city_time">
              </div> 
              
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Search Now</button>
                {{-- <a href="{{route('searchpage')}}" class="btn btn-success btn-search text-my mt-4" data-message="Please select arrival place and departure place." role="button">Search Now</a> --}}
                
              </div>
      
          </div>
        </div>
      </div>
    </div>

    
     <section class="ftco-section services-section img bg-primary" style="background-image: url(images/bg_2.jpg);">
   
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            
            <h2 class="mb-2">Buy bus tickets in 3 easy steps</h2>
          </div>
        </div>
        <div class="row d-flex">
          {{-- <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-customer-support"></span></div>
                  <h3 class="heading mb-0 pl-3">Search</h3>
                </div>
                <p>Choose your origin,destination,journey dates and search for buses</p>
              </div>
            </div>      
          </div> --}}
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-route"></span></div>
                  <h3 class="heading mb-0 pl-3">Search</h3>
                </div>
                <p>Choose your origin,destination,journey dates and search for buses</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-rent"></span></div>
                  <h3 class="heading mb-0 pl-3">Select</h3>
                </div>
                <p>Select your desired trip and choose your seats</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-"></span></div>
                  <h3 class="heading mb-0 pl-3">Payment</h3>
                </div>
                <p>Pay for the tickets Credit Cards or cash</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

   
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            
            <h2>Our Bus List</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="" class="block-20" style="background-image: url({{asset('frontend/img/background.jpg')}});">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <h4>ရွှေရေကန်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <h4>ရွှေမြို့တော်</h4>
                  <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <h4>မိုးကောင်းကင်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <h4>ဆမ်လောင်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a href="" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <h4>တော်ဝင်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </section> 
    @endsection   