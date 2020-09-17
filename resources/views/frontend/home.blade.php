@extends('master')
@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('frontend/img/bg-1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text">
              <h1 class="mb-4">Wellcome <span>To Bus REservation</span> </h1>
             
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
            <form action="{{route('searchpage')}}" class="request-form ftco-animate" method="post">
              @csrf
              <h2>Make your Booking</h2>

            
                <span class="text-danger">{{$errors->first('please select departure place ')}}</span>
              <div class="form-group">
<<<<<<< HEAD

                <span class="form-label">Leaving From</span>
                <select name="leavingfrom" id="city" class="form-control">
=======
 
                <span class="form-label">Leaving From</span>
                <select name="leavingfrom" id="city" class="form-control">

>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25
                <span class="form-label ">Leaving From</span>
                <select name="name" id="city" class="form-control">

                  <optgroup label="Choose City">
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
<<<<<<< HEAD
                     

=======

                     

                      

>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25
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
               
                
              </div>
            </form>
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
    <section class="ftco-section">
=======
    {{-- <section class="ftco-section">
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

    {{-- <section class="ftco-section">
>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25
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
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
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
          </div> --}}

<!-- Discount Item -->
    <div class="row mt-5">
      <h1>Our Bus List/h1>
    </div>
        <!-- Disocunt Item -->
        <div class="row">
      <div class="col-12">
        <div class="MultiCarousel" data-bustypes="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
          @foreach($bustypes as $bustype)
                     <div class="MultiCarousel-inner">
                    <div class="bustype">
                      <a href="{{route('itemdetailpage',$bustype->id)}}">
                        <div class="pad15">
                          <img src="{{asset($bustype->photo)}}" class="img-fluid">
                            <p class="text-truncate">{{$bustype->name}}</p>
                            <p class="bustype-price">
                              <strike>{{$bustype->discount}} Ks </strike> 
                              <span class="d-block">{{$bustype->price}} Ks</span>
                            </p>

                            <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-bustype"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-bustype"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-bustype"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-bustype"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-bustype"><i class='bx bxs-star-half' ></i></li>
                  </ul>
                </div>

                <a href="#" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id='{{$bustype->id}}' dabustypeta-name='{{$bustype->name}}' data-photo='{{$bustype->photo}}' data-price='{{$bustype->price}}' data-discount='{{$bustype->discount}}'>Add to Cart</abustype
                        </div>
                    </a>
                    </div>
                </div>
                @endforeach
                <button class="btn btnMain leftLst"><</button>
                <button class="btn btnMain rightLst">></button>
            </div>
        </div>
    </div>

        </div>
        </div>
      </div>
    </section>  
    @endsection   