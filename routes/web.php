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
<<<<<<< HEAD
Route::get('route', 'PageController@routefun')->name('routepage');
Route::post('search','PageController@searchfun')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');
Route::post('seat','PageController@seatfun')->name('seatpage');


=======
<<<<<<< HEAD
//Route::get('route', 'PageController@routefun')->name('routepage');
Route::post('search','PageController@searchfun')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
Route::get('busroute','PageController@busroutefun')->name('busroutepage');

//Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');



=======
Route::get('route', 'PageController@routefun')->name('routepage');
Route::get('search','PageController@searchfun')->name('searchpage');
//Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');
//Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');
Route::get('search','PageController@search')->name('searchpage');
Route::post('search','PageController@search')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');
>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25
//backendအပိုင်းor(adminအပိုင်း)

<<<<<<< HEAD
Route::middleware('role:Admin')->group(function(){
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e

Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');

<<<<<<< HEAD

  //backendအပိုင်းor(adminအပိုင်း)

=======
Route::resource('cities','CityController');
Route::resource('bustypes','BusTypeController');
Route::resource('routes', 'RouteController');
Route::resource('buscompanies','BusCompanyController');
=======
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
=======
Route::middleware('role:Admin')->group(function () {
//backendအပိုင်းor(adminအပိုင်း)

Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
//Route::get('city','PageController@cityfun')->name('citypage');
//Route::get('bustype','PageController@bustypefun')->name('bustypepage');
//Route::get('buscompany','PageController@buscompanyfun')->name('buscompanypage');
Route::resource('cities','CityController');
<<<<<<< HEAD
//Route::resource('bus_types','BusTypeController');
=======
Route::resource('bus_types','Bus_typeController');
Route::resource('buscompany','BusCompanyController');
<<<<<<< HEAD
=======

>>>>>>> 3cf997fc174dc1261d7cc6242a1ce6c0b6aa9f03
>>>>>>> 7a6ac40e7c711a234dc0227111b1a44a532126a1
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e
Route::resource('routes', 'RouteController');
Route::resource('buscompanies','BusCompanyController');
Route::resource('bustypes','BusTypeController');
<<<<<<< HEAD
=======
Route::resource('cities','CityController');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25
});

Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e
});

>>>>>>> 7a6ac40e7c711a234dc0227111b1a44a532126a1

<<<<<<< HEAD
=======
});
Route::resource('bustypes','BusTypeController');
Route::resource('cities','CityController');
<<<<<<< HEAD
=======
>>>>>>> 88c7850dbf8e1056349025da450c104a69a522c6
>>>>>>> 3cf997fc174dc1261d7cc6242a1ce6c0b6aa9f03
>>>>>>> 7a6ac40e7c711a234dc0227111b1a44a532126a1
>>>>>>> 4421ad4830d0a1e73122e7ec1231ee05c868ff25

//for Auth
>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


