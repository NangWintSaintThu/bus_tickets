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
});

Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');



//for Auth
=======

Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');

>>>>>>> 6aff1f81e5c2ac9fc923e5820018ffcb658e615e
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


