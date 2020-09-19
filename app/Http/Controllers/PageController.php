<?php

namespace App\Http\Controllers;
use App\City;
use App\BusCompany;
use App\Route;
use App\BusType;
use App\Traveller;
use App\BookingDetail;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{      
        $bustypes=BusType::all();
        $cities=City::all();
        $routes=Route::all();
        
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
      public function loginfun($value='')
	{
		return view('frontend.login');
}     
       public function register($value='')
	{
		return view('frontend.register');
}
  
     

     public function searchfun(Request $request)
    {

        //dd($request);
      //for city
        //dd($request);



      //for city

        $cities=City::all();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
        $city_time=$request->city_time;
        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ; 

         // for route

        $routes=Route::all();
        $depraturestation=$request->depraturestation;
        $arrivalstation=$request->arrivalstation;
        $route_time=$request->route_time;
        $route_price=$request->route_price;
        $route_bustype=$request->route_bustype;
        $route_seat=$request->city_seat;

        return view ('frontend.search',compact('routes','depraturestation','arrivalstation','route_time','route_price','route_bustype','route_seat')) ;  

        

       
    }
     public function cityfun($value='')
    {
       
        return view ('backend.cities.index') ;
        
    }

    public function routefun($value='')
    {
        return view ('backend.routes.index') ;   
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



//dd($city_date);

        return view ('frontend.seat',compact('cities','leavingfrom','goingto','city_date','city_seat')) ;  

        
    
  }

}