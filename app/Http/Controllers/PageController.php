<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{
		return view('frontend.home');
    }


     public function about($value='')
	{
		return view('frontend.about');
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

     public function searchfun($value='')
    {
        return view ('frontend.search') ;   
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
       
        return view ('backend.routes.index') ;
        
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