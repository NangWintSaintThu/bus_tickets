@extends('master')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
	<div class="container">  
	</div>
</div>

<center>
	<h2 style="background-color:gray">Choose Your Seat Number</h2>
	<div class="container-fluid m-5 py-5">
		<div class="row">
			<table cellspacing="10" cellpadding="15" border="1">
				<tr style="background-color: gray">
					<td colspan="4"><input type="button" value="Driver" disabled>
					</td>
				</tr>

				<tr>
					<td><input type="button" value="0 1"></td>
					<td><input type="button" value="02"></td>
					<td><input type="button" value="03"></td>
					<td><input type="button" value="04"></td>
				</tr>
				<tr>
					<td><input type="button" value="05"></td>
					<td><input type="button" value="06"></td>
					<td><input type="button" value="07"></td>
					<td><input type="button" value="08"></td>
				</tr>
				<tr>
					<td><input type="button" value="09"></td>
					<td><input type="button" value="10"></td>
					<td><input type="button" value="1 1"></td>
					<td><input type="button" value="1 2"></td>
				</tr>
				<tr>
					<td><input type="button" value="1 3"></td>
					<td><input type="button" value="14"></td>
					<td><input type="button" value="15"></td>
					<td><input type="button" value="16"></td>
				</tr>
				<tr>
					<td><input type="button" value="1 7"></td>
					<td><input type="button" value="18"></td>
					<td><input type="button" value="19"></td>
					<td><input type="button" value="20"></td>
				</tr>

			</table>
			<div class="row">
				<table cellspacing="10" cellpadding="15" border="1">
					<tr style="background-color: gray">
						<td colspan="5">
							<input type="button" value="Driver" disabled>
						</td>
						</tr>
						<?php
						for ($i=1; $i < ; $route->seat; $i++) { 
							?>
							<?php if($i%4==1){?>
							<tr>
								<?php }?>
								<td>
									<a href="h=javascript:void(0)" class="btn btn-outline-success btn-sm btn_check btn_available">{{$i}}</a>

								</td>
								<?php if($i%4==2){?>
								<td>
									
								</td>
								<?php }?>
								<?php if($i%4==0){?>
							</tr>
							<?php } ?>
							<?php }?>

				</table>
				
			</div>

			<div class="col-md-4 offset-1">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12" >
								<div class="form-group">
<<<<<<< HEAD
									<label class="small mb-1" for="inputname">Leaving From</label>
									<select class="form-control" name="leavingfrom">
										@foreach($cities as $city)
										<option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$leavingfrom) {{'selected'}} @endif>{{$city->name}}</option>
										@endforeach 
=======
									<span class="form-label">Leaving From</span>
									<select name="leavingfrom" id="city" class="form-control">
										<optgroup label="Choose City">
											@foreach($cities as $city)
											<option placeholder=" Choose City" value="{{$city->id}}">{{$city->name}}</option>
											@endforeach 
										</optgroup>
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
									</select>
								</div>

								<div class="form-group">
<<<<<<< HEAD
									<label class="small mb-1" for="inputname">Going To</label>
									 <select class="form-control" name="leavingfrom">
                               @foreach($cities as $city)
                               <option placeholder=" Choose City" value="{{$city->id}}" @if($city->id==$leavingfrom) {{'selected'}} @endif>{{$city->name}}</option>
                               @endforeach 
                             </select>
=======
									<span class="form-label">Going To</span>
									<select name="goingto" id="city" class="form-control">
										<optgroup label="Choose City">
											@foreach($cities as $city)
											<option value="{{$city->id}}">{{$city->name}}</option>
											@endforeach 
										</optgroup>
									</select>
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
								</div>
    
								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Departure Date</label>
									<input class="form-control py-4" id="date"   value='
									{{$city_date}}'>
								</div>
								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Number of Seat</label>
									{{-- <input class="form-control py-4" id="seat"  value='{{$city_seat}}'> <select name="city_seat" id="" class="form-control"> --}}
										<div class="form-field">
                        <div class="select-wrap">
                          <select name="city_seat" id="" class="form-control">
                           <option class="selected">{{$city_seat}}</option>
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
				</div>
			</div>
								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Seat Number</label>
									<input class="form-control py-4" id="inputDeparture DateAddress" type="text" name="seatno" value="">
								</div>

								<div class="form-group">
									<label class="small mb-1" for="inputEmailAddress">Total</label>
									<input class="form-control py-4" id="inputDeparture DateAddress" type="text"  name="price" value="">
								</div>

								<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Book Now</button>
<<<<<<< HEAD
=======

								
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
							</div>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</center>



 {{--  <div class="row mt-4">
   <div class="col-md-12">
    <table class="table table-bordered">
     <thead class="thead-dark">
      <tr>
       <th>No</th>
       <th>Photo</th>
       <th>Item Name</th>
       <th>Brand</th>
       <th>Category -> <h6 class="d-inline-block"> Subcategory </h6></th>
       <th>Qty</th>
       <!-- <th>Actions</th> -->
     </tr>
   </thead>
</table>
</div>
</div>
</div>
</div> --}}

    {{-- @php $i=1; @endphp
    @foreach($order->items as $order_detail)
    <tr>
     <td>{{$i++}}</td>
     <td><img src="{{asset($order_detail->photo)}}" width="120px" height="100px"></td>
     <td>{{$order_detail->name}}</td>
     <td>{{$order_detail->brand->name}}</td>
     
     <td>{{$order_detail->subcategory->category->name}} -> <h6 class="d-inline-block text-gray"> {{$order_detail->subcategory->name}}
     </h6></td>
     <td>{{$order_detail->pivot->qty}}</td>
     <!-- <td><</td> -->

 </tr> --}}
  {{--  @endforeach
 </tbody>
</table>
</div>
</div>

</div>
--}}
@endsection