<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{
		return view('frontend.home');
}
//<<<<<<< HEAD
    
     public function routefun($id)
    {
        $route =Route::find($id);
        return view ('backend.route',compact('route')) ;
        
    }

//=======
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