<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{
		return view('frontend.home');
}
    
     public function routefun($id)
    {
        $route =Route::find($id);
        return view ('backend.route',compact('route')) ;
        
    }

}