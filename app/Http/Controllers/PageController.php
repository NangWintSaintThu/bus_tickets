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

    
     public function routefun($value='')
    {
       
        return view ('backend.routes.index') ;
        
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
		return view('backend.traveller_infos.index');
	}
	public function bookingdetail($value='')
	{
		return view('backend.bookingdetails.index');
	}
//>>>>>>> 522ea2ef5ea673dfa244edde9fc54f375587f03c
}