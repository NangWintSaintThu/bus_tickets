  @extends('master')
  @section('content') 

<div class="row mt-5">
      <h1> Bus Type </h1>
  </div>

 <div class="card ">
  <div class="row ">
    @foreach($bustypes as $bustype)
    <div class="col-md-4">
     <a href="{{route('seatpage')}}"><img src="{{asset('frontend/img/background.jpg')}}" alt="Img"></a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
           <p class="text-truncate">{{$bustype->name}}</p>
         <a href="{{route('seatpage')}}" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id = '{{$bustype->id}}' data-name = '{{$bustype->name}}' data-photo = '{{$bustype->photo}}'>Select Seat</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
