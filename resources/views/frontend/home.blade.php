@extends('master')
@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('frontend/img/bg-1.jpg')}}');" data-stellar-background-ratio="0.5">
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
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
<<<<<<< HEAD
      {{-- <div class="overlay"></div>
=======
<<<<<<< HEAD
=======

      <div class="overlay"></div>
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text">
              <h1 class="mb-4">Wellcome <span>To Bus REservation</span> </h1> --}}
              {{-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
              <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="ion-ios-play"></span>
                </div>
                <div class="heading-title ml-5">
                  <span>Easy steps for renting a car</span>
                </div>
              </a> --}}
           {{--  </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
            <form action="{{route('searchpage')}}" class="request-form ftco-animate" method="post">
              @csrf
<<<<<<< HEAD
              <h2>Make your Booking</h2> --}}
=======
              <h2>Make your Booking</h2>
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7

                <span class="text-danger">{{$errors->first('please select departure place ')}}</span>
              <div class="form-group">
<<<<<<< HEAD
            <span class="form-label">Leaving From</span>
            <select name="leavingfrom" id="city" class="form-control">
              <optgroup label="Choose City">

=======
<<<<<<< HEAD
                <span class="form-label">Leaving From</span>
                <select name="leavingfrom" id="city" class="form-control">
                  <optgroup label="Choose City">
=======
 
                <span class="form-label">Leaving From</span>
                <select name="leavingfrom" id="city" class="form-control">

          <span class="text-danger">{{$errors->first('please select departure place ')}}</span>
          <div class="form-group">


                  <optgroup label="Choose City">

                <span class="form-label ">Leaving From</span>
                <select name="name" id="city" class="form-control">

                  <optgroup label="Choose City">

            <span class="form-label">Leaving From</span>
            <select name="leavingfrom" id="city" class="form-control">
              <optgroup label="Choose City">
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
                @foreach($cities as $city)
                  <option placeholder=" Choose City" value="{{$city->id}}">{{$city->name}}</option>
                @endforeach 
              </optgroup>
                </select>
                <span class="text-danger">{{ $errors->first('city') }}</span>
                </div>
             
            
              <span class="text-danger">{{$errors->first('please select departure place ')}}</span>
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
<<<<<<< HEAD
              </div>

=======
              </div>
              
=======
              </div>

            </select>
            <span class="text-danger">{{ $errors->first('city') }}</span>

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
          </div>

>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
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
<<<<<<< HEAD

=======
<<<<<<< HEAD



=======
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
                  {{-- <input type="text" class="form-control" id="book_off_date" placeholder="Date"> --}}
                </div>
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Search Now</button>
                {{-- <a href="{{route('searchpage')}}" class="btn btn-success btn-search text-my mt-4" data-message="Please select arrival place and departure place." role="button">Search Now</a> --}}
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
=======

<<<<<<< HEAD
     <section class="ftco-section services-section img bg-primary" style="background-image: url(images/bg_2.jpg);">  
=======


    <section class="ftco-sectio">
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
    
     <section class="ftco-section services-section img bg-primary" style="background-image: url(images/bg_2.jpg);">
   
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
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

<<<<<<< HEAD

 

   
<section>
=======
<<<<<<< HEAD
      {{-- <div class="col-md-3 d-flex align-self-stretch ftco-animate">
=======
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

          <div class="col-md-3">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/car-5.jpg);">
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
              <div class="img d-flex align-items-end" style="background-image: url(images/car-6.jpg);">
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
              <div class="img d-flex align-items-end" style="background-image: url(images/car-7.jpg);">
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
              <div class="img d-flex align-items-end" style="background-image: url(images/car-8.jpg);">
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
    </section> --}}

    {{-- <section class="ftco-section services-section img" style="background-image: url(images/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Work flow</span>
            <h2 class="mb-3">How it works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Pick Destination</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Select Term</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Choose A Car</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Enjoy The Ride</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section> --}}

   {{--  <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
          </div>
          <div class="col-md-6 wrap-about py-md-5 ftco-animate">
            <div class="heading-section mb-5 pl-md-5">
              <span class="subheading">About us</span>
              <h2 class="mb-4">Choose A Perfect Car</h2>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
              <p><a href="#" class="btn btn-primary">Search Vehicle</a></p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}


      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
        <div class="media block-6 services">
          <div class="media-body py-md-4"> --}}
            {{-- <div class="d-flex mb-3 align-items-center">
              <div class="icon"><span class="flaticon-route"></span></div>
              <h3 class="heading mb-0 pl-3">Search</h3>
<<<<<<< HEAD
            </div>
            
 --}}
   
{{-- <div id="speakers" class="mt-5"> --}}
=======

    {{-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            
            <h2>Our Bus List</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <img src="{{asset('frontend/buscarimg/bus1.jpg')}}" width="100px" height="100px">
                  
                  <h4>ရွှေရေကန်</h4>
                  <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
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


               <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a> 
               <div class="text pt-4">

                <div class="meta mb-3">
                  <img src="{{('frontend/buscarimg/bus2.jpg')}}" width="100px" height="100px">
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
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <img src="{{('frontend/buscarimg/bus3.jpg')}}" width="100px" height="100px">
                  <h4>မိုးကောင်းကင်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>

            </div>
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
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <img src="frontend/buscarimg/bus4.jpg" width="100px" height="100px">
                  <h4>ဆမ်လောင်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div>

        </div>      
      </div>
    </div>
  </div>
</section>

</div>
</div>
</div>
</form>
</section> 
@endsection  

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <img src="frontend/buscarimg/bus5.jpg" width="100px" height="100px">
                  <h4>တော်ဝင်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <img src="frontend/buscarimg/bus5.jpg" width="100px" height="100px">
                  <h4>တော်ဝင်</h4>
                   <p>Bus No:WW</p>
                  <p>Price:5300Ks</p>
                  <div><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Book Now</button></div>
                </div>
              </div>
            </div>
          </div> 

          </div> --}}

>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
<div id="speakers" class="mt-5">
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
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
            <img src="{{asset('frontend/tclimg/img12.jpg')}}" class="img-fluid" width="300px" height="350px">
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/tclimg/img11.jpg')}}" class="img-fluid" width="300px" height="350px">
          </div>
        </div>
      </div>
<<<<<<< HEAD
       </div>
     </div>

       
=======
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
        

>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7">
          <h2 class="secondary text-uppercase">Gallery</h2>
      </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3">
          <div class="speaker">
            <img src="{{asset('frontend/buscarimg/bus4.jpg')}}" class="img-fluid" width="300px" height="350px">
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
<<<<<<< HEAD
  </section>

    @endsection   

=======
<<<<<<< HEAD
    
    @endsection   

=======
  
        </div>


          </div>

        </div>
      </div>

    </section> 

    </form>
    </section>
    </section>  
    @endsection   
        </div>
      </div>
    </section>  
    @endsection   
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
