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
            </select>
            <span class="text-danger">{{ $errors->first('city') }}</span>



          </div>
          <div class="d-flex">
            <div class="form-group mr-2">
              <label for="" class="label">Departure date</label>
              <input type="text" class="form-control" id="book_pick_date" placeholder="Date" name="city_date">
            </div>
            <div class="form-group ml-2">
             {{--  <label for="" class="label">Number of seat</label> --}} 
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


  

          <!-- Discount Item -->
         {{--  <div class="row mt-5">
            <h1>Our Bus List/h1>
            </div>
            <!-- Disocunt Item -->
            <div class="row">
              <div class="col-12">
                <div class="MultiCarousel" data-bustypes="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  @foreach($bustypes as $bustype)
                  <div class="MultiCarousel-inner">
                    <div class="bustype">
                      <a href="">
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

                          <a href="#" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id='{{$bustype->id}}' dabustypeta-name='{{$bustype->name}}' data-photo='{{$bustype->photo}}' data-price='{{$bustype->price}}' data-discount='{{$bustype->discount}}'>Add to Cart</a>
                        </div>
                      </a>
                    </div>
                  </div>
                  @endforeach
                  <button class="btn btnMain leftLst"><</button>
                  <button class="btn btnMain rightLst">></button>
                </div>
              </div>
            </div> --}}

          </div>
        </div>
      </div>
    </form>
  </section> 
  @endsection   