<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontendအပိုင်းor(customerအပိုင်း)
Route::get('/','PageController@home')->name('homepage');
Route::get('about','PageController@about')->name('aboutpage');
Route::get('loginpage','PageController@login')->name('loginpage');
Route::get('registerpage','PageController@register')->name('registerpage');
Route::get('yourticket','PageController@yourticket')->name('yourticketpage');
Route::get('contact','PageController@contact')->name('contactpage');
Route::get('route', 'PageController@routefun')->name('routepage');
Route::post('search','PageController@searchfun')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');
Route::post('seat','PageController@seatfun')->name('seatpage');



//backendအပိုင်းor(adminအပိုင်း)
Route::middleware('role:Admin')->group(function () {
	


  //backendအပိုင်းor(adminအပိုင်း)

Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');

//Route::get('city','PageController@cityfun')->name('citypage');
//Route::get('bustype','PageController@bustypefun')->name('bustypepage');
//Route::get('buscompany','PageController@buscompanyfun')->name('buscompanypage');
Route::resource('cities','CityController');
//Route::resource('bus_types','BusTypeController');
Route::resource('routes', 'RouteController');
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');
Route::resource('buscompanies','BusCompanyController');
Route::resource('bustypes','BusTypeController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


