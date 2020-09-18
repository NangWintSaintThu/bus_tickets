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
<<<<<<< HEAD

Route::get('yourticket','PageController@yourticket')->name('yourticketpage');

Route::get('contact','PageController@contact')->name('contactpage');

Route::get('route', 'PageController@routefun')->name('routepage');

Route::post('search','PageController@searchfun')->name('searchpage');

Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
=======
Route::get('book','PageController@book')->name('bookpage');
Route::get('contact','PageController@contact')->name('contactpage');
<<<<<<< HEAD
Route::get('route', 'PageController@routefun')->name('routepage');

//Route::get('route', 'PageController@routefun')->name('routepage');
Route::post('search','PageController@searchfun')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
Route::get('busroute','PageController@busroutefun')->name('busroutepage');
/*Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');*/

//backendအပိုင်းor(adminအပိုင်း)
<<<<<<< HEAD
Route::middleware('role:Admin')->group(function(){
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
Route::middleware('role:Admin')->group(function (){
//backendအပိုင်းor(adminအပိုင်း)
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
//Route::get('city','PageController@cityfun')->name('citypage');
//Route::get('bustype','PageController@bustypefun')->name('bustypepage');
//Route::get('buscompany','PageController@buscompanyfun')->name('buscompanypage');
Route::resource('cities','CityController');
Route::resource('bus_types','Bus_typeController');
Route::resource('buscompany','BusCompanyController');
Route::resource('routes', 'RouteController');
Route::resource('buscompanies','BusCompanyController');
Route::resource('bustypes','BusTypeController');
Route::resource('cities','CityController');
=======
>>>>>>> 808e42de1145c8463cfe104053df8154a61e95d4

Route::get('seat','PageController@seatfun')->name('seatpage');

<<<<<<< HEAD
Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');

Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');




  //backendအပိုင်းor(adminအပိုင်း)
//Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');

Route::resource('cities','CityController');
Route::resource('bustypes','BusTypeController');
Route::resource('buscompanies','BusCompanyController');
Route::resource('routes', 'RouteController');
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');
//});

=======
Route::middleware('role:Admin')->group(function(){
=======
Route::get('route', 'PageController@routefun')->name('routepage')
Route::post('search','PageController@searchfun')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');
Route::post('seat','PageController@seatfun')->name('seatpage');





//backendအပိုင်းor(adminအပိုင်း)
>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e


<<<<<<< HEAD
=======
Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e
Route::resource('cities','CityController');
Route::resource('bustypes','BusTypeController');
Route::resource('routes', 'RouteController');
Route::resource('buscompanies','BusCompanyController');
<<<<<<< HEAD
>>>>>>> 633941e63c6f4a20cf5aee273615af9c47f31e18
});
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');
<<<<<<< HEAD
});
Route::resource('bustypes','BusTypeController');
Route::resource('cities','CityController');
=======



//for Auth
=======
>>>>>>> 633941e63c6f4a20cf5aee273615af9c47f31e18

Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');

>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e
>>>>>>> 808e42de1145c8463cfe104053df8154a61e95d4
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


