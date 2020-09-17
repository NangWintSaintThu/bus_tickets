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
		return view('frontend.selectseat',compact('routes'));
    }

     
      public function yourticket($value='')
	{
		return view('frontend.yourticket');
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

     public function search(Request $request)
    {
        //dd($request);

      //for city

        $cities=City::all();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
        $city_time=$request->city_time;

//dd($city_date);


        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   

        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ; 

       // for route
        //dd($request);
        $routes=Route::all();
        $depaturestation=$request->depaturestation;
        $arrivalstation=$request->arrivalstation;
        $route_time=$request->route_time;
        $route_price=$request->route_price;
        $route_bustype=$request->route_bustype;
        $city_seat=$request->city_seat;
       

        return view ('frontend.search',compact('routes','route_name','depaturestation','arrivalstation','route_time','route_price','route_bustype','route_seat')) ;  

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

}