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
<<<<<<< HEAD
        $routes=Route::all();
        
		return view('frontend.home',compact('cities','bustypes','routes'));
=======
<<<<<<< HEAD
		return view('frontend.home',compact('cities','bustypes','routes'));
=======
<<<<<<< HEAD
        $bustypes=BusType::all();
=======
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
		return view('frontend.home',compact('cities','bustypes'));
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
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
=======
<<<<<<< HEAD
    $bustypes=Bustype::all();
		return view('frontend.selectseat',compact('bustypes'));
=======
<<<<<<< HEAD
       return view('frontend.selectseat');
=======
<<<<<<< HEAD
		return view('frontend.selectseat');
=======
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef

		return view('frontend.selectseat');
<<<<<<< HEAD
=======

>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
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
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        //dd($request);


      //for city
=======
<<<<<<< HEAD
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
        //dd($request);
      //for city
        //dd($request);



      //for city
<<<<<<< HEAD

=======
>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
        $cities=City::all();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;
<<<<<<< HEAD
       
=======
        $city_time=$request->city_time;
<<<<<<< HEAD
        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ; 

         // for route

=======
<<<<<<< HEAD

        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   


//dd($city_date);  
=======
<<<<<<< HEAD
//dd($city_date);  
//dd($city_date);
        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   
        // for route
=======
<<<<<<< HEAD
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44


>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef

        $routes=Route::where('departure_station',$leavingfrom)->where('arrival_station',$goingto)->get();

<<<<<<< HEAD
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
=======
<<<<<<< HEAD
        return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;   
       // for route
        //dd($request);s
=======
=======
 return view ('frontend.search',compact('cities','leavingfrom','goingto','city_date','city_seat','city_time')) ;  
//dd($city_date);  
//dd($city_date);

         // for route
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
        //dd($request);
>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
        $routes=Route::all();
        $depraturestation=$request->depraturestation;
        $arrivalstation=$request->arrivalstation;
        $route_time=$request->route_time;
        $route_price=$request->route_price;
        $route_bustype=$request->route_bustype;
        $route_seat=$request->city_seat;

        return view ('frontend.search',compact('routes','depraturestation','arrivalstation','route_time','route_price','route_bustype','route_seat')) ;  

        

       
<<<<<<< HEAD
=======
        return view ('frontend.search',compact('routes','route_name','depaturestation','arrivalstation','route_time','route_price','route_bustype','route_seat')) ;  
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
    }
     public function cityfun($value='')
    {
       $routes=Route::all();
        return view ('backend.cities.index',compact('routes')) ;
        
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