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
<<<<<<< HEAD
}
      public function login($value='')
	{
		return view('frontend.login');
}     
       public function register($value='')
	{
		return view('frontend.register');
}
=======
    }
>>>>>>> 59f5ad2faa485a0198433cf3a2df6cb237d3cbfc

    
     public function routefun($value='')
    {
        return view ('backend.routes.index') ;   
    }

     public function searchfun($value='')
    {
        return view ('frontend.search') ;   
    }


	public function travellerinfo($value='')
	{
		return view('frontend.travellerinfo');
	}

	public function bookingdetail($value='')
	{
		return view('frontend.bookingdetail');
	}
//>>>>>>> 522ea2ef5ea673dfa244edde9fc54f375587f03c
}