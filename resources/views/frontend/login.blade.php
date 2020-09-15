@extends('master')
@section('content')
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		
  		</div>
	</div>
	
	<!-- Content -->

	<div class="container my-5">
       <h1 class="text-center text-dark"> Login </h1>
		<div class="row justify-content-center">
			<div class="col-5">
				
                   <form action="signin" method="POST">
		      		<div class="form-group">
		      			<label class="small mb-1" for="inputEmailAddress">Email</label>
		      			<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
		      		</div>
		      		
		      		<div class="form-group">
		      			<label class="small mb-1" for="inputPassword">Password</label>
		      			<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
		      		</div>
		      
		      		<div class="form-group">
		          		<div class="custom-control custom-checkbox">
		          			<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
		          			<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>


		          		</div>

		          		<a class="small" href="#">Forgot Password?</a>

		      		</div>
		      		
		      		<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
		        		
		        		<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
		      		</div>


		  		

		  		<div class=" mt-3 text-center ">
		  			<a href="{{route('registerpage')}}" class="loginLink text-decoration-none">Need an account? Sign Up!</a>
		  		</div>
			</div>
		</div>
		
</div>
	@endsection