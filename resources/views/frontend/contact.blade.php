@extends('master')
<<<<<<< HEAD
@section('contact')
  
  
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Contact Us</h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container my-5">
=======
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
>>>>>>> 59f5ad2faa485a0198433cf3a2df6cb237d3cbfc

    <div class="row justify-content-center">
      <div class="col-8">
        <form action="signin" method="POST">
              <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputName"> Name</label>
                              <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="phone">Phone Number</label>
                              <input class="form-control py-4" id="phone" type="text" placeholder="Enter Phone Number" name="phone" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputPassword">Password</label>
                              <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                              <font id="error" color="red"></font>
                            </div>

                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label class="small mb-1" for="address"> Address </label>
                        <textarea class="form-control" name="address"></textarea>
                    </div>
              
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Submit</button>
              </div>
          </form>

          
      </div>
    </div>
    
    
    

  </div>
  @endsection