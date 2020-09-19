<?php

namespace App\Http\Controllers;
use App\City;
use App\BusCompany;
use App\Route;
use App\BusType;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{      
        $bustypes=BusType::all();
        $cities=City::all();
		return view('frontend.home',compact('cities','bustypes','routes'));
    }


     public function about($value='')
	{
		return view('frontend.about');
    }

    

     public function selectseat($value='')
	{

		return view('frontend.selectseat');
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
        $cities=City::all();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
       

        $routes=Route::where('departure_station',$leavingfrom)->where('arrival_station',$goingto)->get();

        $bustypes=BusType::all();
        return view ('frontend.search',compact('routes','leavingfrom','goingto','city_date','cities','city_seat')) ;   

        $routes=Route::all();
        $name=$request->name;
        $departure_station=$request->departurestation;
        $arrival_station=$request->arrivalstation;
        $departure_time=$request->departuretime;
        $price=$request->price;
        $bus_type_id=$request->bustypeid;
        $seat=$request->busseat;
       
        return view ('frontend.search',compact('routes','name','departure_station','arrival_station','departure_time','price','bus_type_id','seat')) ;  
    }
     public function cityfun($value='')
    {
       $routes=Route::all();
        return view ('backend.cities.index',compact('routes')) ;
        
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


        return view ('frontend.seat',compact('cities','leavingfrom','goingto','city_date','city_seat')) ;  

        // $cities=City::all();
        // $leavingfrom=$request->leavingfrom;
        // $goingto=$request->goingto;
        // $city_date=$request->city_date;
        // $city_seat=$request->city_seat;
        // $city_time=$request->city_time;

        // return view ('frontend.seat',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   
    
  }

}