<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{
		return view('frontend.home');
}

    
     public function routefun($value='')
    {
       
        return view ('backend.routes.index') ;
        
    }


	public function travellerinfofun($value='')
	{
		return view('backend.travellerinfo');
	}
	public function bookingdetailfun($value='')
	{
		return view('backend.bookingdetail');
	}
//>>>>>>> 522ea2ef5ea673dfa244edde9fc54f375587f03c
}