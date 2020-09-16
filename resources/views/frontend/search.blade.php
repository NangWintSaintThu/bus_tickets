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
  
      <div class="col-lg-12 col-md-6 mt-0 mt-md-5 d-flex mt-5">
           
   
       <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container mt-5"> 
         <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate mb-5">
              <form action="#" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Leaving from</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                           <select class="form-control">
                              <option>Select Location</option>
                              <option>Tachlike</option>
                              <option>Kyaing Tong</option>
                              <option>Min Phate</option>
                              <option>Ta la</option>
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
                    <select class="form-control">
                        <option>Select Location</option>
                        <option>Tachileik</option>
                        <option>Kyaing Tong</option>
                        <option>Min Phate</option>
                        <option>Ta la</option>
                    </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                    <label for="" class="label">Departure date</label>
                  <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                        </div>
                      </div>
                   
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Number of seat</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
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
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <a href="{{route('selectseatpage')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Search Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <div class="container ">  
         <div class="row mt-3">
          <div class=" col-md-4 ">
            <h4>Time</h4>
  <input class="time-option" type="radio" name="time-option" id="time-option" value="time-option" checked>
  <label class="time-option" for="time-option">
    8:00AM
  </label>
<br>
  <input class="time-option" type="radio" name="time-option" id="time-option" value="time-option" checked>
  <label class="time-option" for="time-option">
    7:00AM
  </label>
<br>
  <input class="time-option" type="radio" name="time-option" id="time-option" value="time-option" checked>
  <label class="time-option" for="time-option">
    12:00AM
  </label>
</div>
</div>
</div>

    @endsection   