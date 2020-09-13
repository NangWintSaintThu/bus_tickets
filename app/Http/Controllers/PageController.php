<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{
		return view('frontend.home');
}
	public function travellerinfofun($value='')
	{
		return view('backend.travellerinfo');
	}
	public function bookingdetailfun($value='')
	{
		return view('backend.bookingdetail');
	}
}