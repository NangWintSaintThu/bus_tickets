@extends('master')
@section('content')
   
 <div class="col-lg-18 col-md-12 mt-0 mt-md-5 d-flex mt-5">
           
   
       <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container mt-5"> 
         <div class="row">
         	<form action="" method=""class="mt-5">
         		<h1>Contact Us</h1>
           <div class="form-group">
                 <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Name</label>
                  <input type="text" class="form-control" id="name">
                </div>
                  </div>
              </div>

               <div class="form-group">
                 <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Phone Number</label>
                  <input type="text" class="form-control" id="name"
                  placeholder="(09)---------">
                </div>
                  </div>
              </div>

               <div class="form-group">
                 <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Emaile</label>
                  <input type="text" class="form-control" id="email" >
                </div>
                  </div>
              </div>

                <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary py-3 px-4">
              </div>
          </div>
      </div>
  </form>
</div>
</div>
</section>
  </div> 

 @endsection 