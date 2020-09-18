<?php

namespace App\Http\Controllers;
use App\City;
use App\BusCompany;
use App\Route;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{
        $cities=City::all();
		return view('frontend.home',compact('cities'));
    }


     public function about($value='')
	{
		return view('frontend.about');
    }

    

     public function selectseat($value='')
	{
<<<<<<< HEAD
		return view('frontend.selectseat'/*,compact('search')*/);
=======
		return view('frontend.selectseat');
>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e
    }

     
      public function book(Request $request)
	{
     $cities=City::all();
        $id=$request->id;
        $city_name=$request->city_name;
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
        $city_time=$request->city_time;
         $city_total=$request->city_total;
        return view ('frontend.book',compact('cities','id','city_name','leavingfrom','goingto','city_date','city_seat','city_time','city_total')) ;  
		
    }

  
     public function contact($value='')
	{
		return view('frontend.contact');

}
      public function login($value='')
	{
		return view('frontend.login');
}     
       public function register($value='')
	{
		return view('frontend.register');
}


    
     public function routefun($value='')
    {
        return view ('backend.routes.index') ;   
    }

     public function searchfun(Request $request)
    {
        //dd($request);

<<<<<<< HEAD

      //for city


=======
<<<<<<< HEAD
      //for city

=======
<<<<<<< HEAD
=======
      //for city

>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e
>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e
        $cities=City::all();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
        $city_time=$request->city_time;


//dd($city_date);  
//dd($city_date);

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   

>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25
>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e
        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ; 
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e

        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   
       // for route
        //dd($request);
        $routes=Route::all();
        $departure_station=$request->depature_station;
        $arrival_station=$request->arrival_station;
        $route_time=$request->route_time;
        $route_price=$request->route_price;
        $route_bustype=$request->route_bustype;
        $city_seat=$request->city_seat;
       

<<<<<<< HEAD
        return view ('frontend.search',compact('routes','route_name','departure_station','arrival_station','route_time','route_price','route_bustype','route_seat')) ;  
=======
        return view ('frontend.search',compact('routes','route_name','depaturestation','arrivalstation','route_time','route_price','route_bustype','route_seat')) ;  
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e

    }
     public function cityfun($value='')
    {
       
        return view ('backend.cities.index') ;
        
    }
    public function bustypefun($value='')
    {
       
        return view ('backend.bustypes.index') ;
        
    }
    public function buscompanyfun($value='')
    {
       
        return view ('backend.buscompanies.index') ;
        
    }

	public function travellerinfo($value='')
	{
		return view('backend.travellerinfos.index');
	}

	public function bookingdetail($value='')
	{
		return view('backend.bookingdetails.bookingdetaillist');
	}
    public function seatfun(Request $request)
  {
        //$seats=Seat::all();
        $cities=City::all();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
        $city_time=$request->city_time;

dd($city_date);


        return view ('frontend.seat',compact('cities','leavingfrom','goingto','city_date','city_seat')) ;   
    
  }

}