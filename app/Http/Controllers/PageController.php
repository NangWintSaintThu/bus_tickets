<?php

namespace App\Http\Controllers;
use App\City;
use App\BusCompany;
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
		return view('frontend.selectseat');
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


        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ; 

       // for route
        /* $routes=Route::all();
        $route_name=$request->route_name;
        $route_=$request->city_date;
        $city_seat=$request->city_seat;
        $city_time=$request->city_time;


        return view ('frontend.search',compact('cities','city_name','city_date','city_seat','city_time')) ;*/   
    }
     public function cityfun($value='')
    {
       
        return view ('backend.routes.index') ;
        
    }
    public function bustypefun($value='')
    {
       
        return view ('backend.routes.index') ;
        
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
		return view('backend.bookingdetails.index');
	}

}