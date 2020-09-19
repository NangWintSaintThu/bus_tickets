  @extends('master')
  @section('content') 

   <div class="row mt-5">
      <h1> Bus Type </h1>
    </div>

      <!-- Disocunt Item -->

      <!-- line no 113 to 136 -->
    <div class="row">
      <div class="col-12">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
          @foreach($bustypes as $bustype)
                 <div class="MultiCarousel-inner">
                    <div class="bustype">
                        <div class="pad15">
                         <a href="{{route('seatpage')}}"> <img src="{{ asset($bustype->photo)}}" class="img-fluid"></a>
                            <p class="text-truncate">{{$bustype->name}}</p>
                            <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                    <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                  </ul>
                </div>

                <a href="{{route('seatpage')}}" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id = '{{$bustype->id}}' data-name = '{{$bustype->name}}' data-photo = '{{$bustype->photo}}'>Select Seat</a>

                        </div>
                    </div>
                    
                </div>
                @endforeach
                <button class="btn btnMain leftLst"><</button>
                <button class="btn btnMain rightLst">></button>
            </div>
        </div>
    </div>