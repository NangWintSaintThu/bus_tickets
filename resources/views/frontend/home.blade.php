@extends('master')
@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('frontend/img/bg-1.jpg')}}');" data-stellar-background-ratio="0.5">

  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center">
      <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
        <div class="text">
          <h1 class="mb-4">Wellcome <span>To Bus Reservation</span> </h1>

        </div>
      </div>
      <div class="col-lg-2 col"></div>
      <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
        <form action="{{route('searchpage')}}" class="request-form ftco-animate" method="post">
          @csrf
          <h2>Make your Booking</h2>

            <span class="form-label">Leaving From</span>
            <select name="leavingfrom" id="city" class="form-control">
              <optgroup label="Choose City">
                @foreach($cities as $city)
                <option placeholder=" Choose City" value="{{$city->id}}">{{$city->name}}</option>
                @endforeach 
              </optgroup>
            </select>
            <span class="text-danger">{{ $errors->first('city') }}</span>
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
              </div>
          </div>

          <div class="d-flex">
            <div class="form-group mr-2">
              <label for="" class="label">Departure date</label>
              <input type="text" class="form-control" id="book_pick_date" placeholder="Date" name="city_date">
            </div>
            <div class="form-group ml-2">
              <label for="" class="label">Number of seat</label> 
              <span class="form-label">Number of seat</span>
              <select class="form-control" name="city_seat">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>


          </div>
        </div>
        <div class="form-group">
          <label for="" class="label">Pick-up time</label>
          <input type="text" class="form-control" id="time_pick" placeholder="Time" name="city_time">
        </div> 

        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Search Now</button>


    <section class="ftco-section">
      <div class="container-fluid px-4">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">What we offer</span>
            <h2 class="mb-2">Choose Your Car</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">$25</span>
                  <p class="from-day">
                    <span>From</span>
                    <span>/Day</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                <span>Audi</span>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/car-2.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">$25</span>
                  <p class="from-day">
                    <span>From</span>
                    <span>/Day</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                <span>Ford</span>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/car-3.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">$25</span>
                  <p class="from-day">
                    <span>From</span>
                    <span>/Day</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                <span>Cheverolet</span>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/car-4.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">$25</span>
                  <p class="from-day">
                    <span>From</span>
                    <span>/Day</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                <span>Mercedes</span>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
              </div>
            </div>
          </div>

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


      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services">
          <div class="media-body py-md-4">
            <div class="d-flex mb-3 align-items-center">
              <div class="icon"><span class="flaticon-route"></span></div>
              <h3 class="heading mb-0 pl-3">Search</h3>

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

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              <a href="" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
               <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a> 
               <div class="text pt-4">

                <div class="meta mb-3">
                  <h4>ရွှေမြို့တော်</h4>
                  <hr>
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
            <p>Pay for the tickets Credit Cards or cash</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
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
<div id="speakers" class="mt-5">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7">
          <h2 class="secondary text-uppercase">Popular Route</h2>
         
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/tclimg/img1.jpg')}}" class="img-fluid" width="300px" height="350px">
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/tclimg/img6.jpg')}}" class="img-fluid" width="300px" height="350px">
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/tclimg/img9.jpg')}}" class="img-fluid" width="300px" height="350px">
          </div>
        </div>
      </div>
        {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="image/speakers/4.jpg" class="img-fluid">
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="image/speakers/5.jpg" class="img-fluid">
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="image/speakers/6.jpg" class="img-fluid">
            </div>
        </div> --}}
        </div>

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7">
          <h2 class="secondary text-uppercase">Gallery</h2>
      </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/buscarimg/bus1.jpg')}}" class="img-fluid" width="300px" height="350px">
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/buscarimg/bus2.jpg')}}" class="img-fluid" width="300px" height="350px">
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/buscarimg/bus3.jpg')}}" class="img-fluid" width="300px" height="350px">
          </div>
        </div>
      </div>
    </div>
  
        </div>

          </div>

        </div>
      </div>

    </section> 

    </form>
    </section>
    </section>  
    @endsection   
