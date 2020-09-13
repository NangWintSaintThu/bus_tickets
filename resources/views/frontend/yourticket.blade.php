@extends('master')
@section('content')

<div class="col-lg-12 col-md-6 mt-0 mt-md-5 d-flex mt-5 ml-auto p-2">
           
       
       <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container mt-5"> 
         <div class="row">
            <form action="#" class="request-form ftco-animate">
              <h2>Make your Booking</h2>
              <div class="form-group">
                {{-- <label for="" class="label">Leaving From</label>
                <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> --}}
                 <span class="form-label">Leaving from</span>
                   <select class="form-control">
                    <option>Select Location</option>
                      <option>Tachlike</option>
                      <option>Kyaing Tong</option>
                      <option>Min Phate</option>
                      <option>Ta la</option>
                      
                    </select>
              </div>
              <div class="form-group">
                <span class="form-label">Going To</span>
                   <select class="form-control">
                    <option>Select Location</option>
                      <option>Tachlike</option>
                      <option>Kyaing Tong</option>
                      <option>Min Phate</option>
                      <option>Ta la</option>
                    </select>
                {{-- <label for="" class="label">Going To</label>
                <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> --}}

              </div>
              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Departure date</label>
                  <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                </div>
                
                  {{-- <label for="" class="label">Number of seat</label> --}}
                 <div class="d-flex"> 
                <div class="form-group mr-2">
                  <label for="" class="label">Phone Number</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="(09)---------">
                </div>

                  {{-- <input type="text" class="form-control" id="book_off_date" placeholder="Date"> --}}
                </div>
              </div>
              
               <div class="form-group">
                <input type="submit" value="Booking" class="btn btn-primary py-3 px-4">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
     @endsection   