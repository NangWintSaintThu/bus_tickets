<?php

namespace App\Http\Controllers;
use App\City;
use App\BusCompany;
use App\Route;
use App\BusType;
<<<<<<< HEAD
use App\Traveller;
use App\BookingDetail;
=======

>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{      
        $bustypes=BusType::all();
        $cities=City::all();
<<<<<<< HEAD
        $bustypes=BusType::all();
=======
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
		return view('frontend.home',compact('cities','bustypes'));
    }


     public function about($value='')
	{
		return view('frontend.about');
    }

    

     public function selectseat($value='')
	{
<<<<<<< HEAD
       return view('frontend.selectseat');
=======
<<<<<<< HEAD
		return view('frontend.selectseat');
=======

		return view('frontend.selectseat'/*,compact('search')*/);
		return view('frontend.selectseat');

>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
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
      public function loginfun($value='')
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
<<<<<<< HEAD
        //dd($request);
      //for city
=======

<<<<<<< HEAD
=======
        //dd($request);



      //for city
>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
        $cities=City::all();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
        $city_time=$request->city_time;
<<<<<<< HEAD
//dd($city_date);  
//dd($city_date);
        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   
        // for route
=======
<<<<<<< HEAD


        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   


=======
 return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;  
//dd($city_date);  
//dd($city_date);

         // for route
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
        //dd($request);
>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
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
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
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
        // $city_time=$request->city_time;


<<<<<<< HEAD
//dd($city_date);
=======
        return view ('frontend.seat',compact('cities','leavingfrom','goingto','city_date','city_seat')) ;  
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17

        // $cities=City::all();
        // $leavingfrom=$request->leavingfrom;
        // $goingto=$request->goingto;
        // $city_date=$request->city_date;
        // $city_seat=$request->city_seat;
        // $city_time=$request->city_time;

        // return view ('frontend.seat',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   
    
  }

}