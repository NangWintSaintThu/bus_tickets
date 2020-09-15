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
Route::get('login','PageController@login')->name('loginpage');
Route::get('register','PageController@register')->name('registerpage');
Route::get('yourticket','PageController@yourticket')->name('yourticketpage');
Route::get('contact','PageController@contact')->name('contactpage');
Route::get('route', 'PageController@routefun')->name('routepage');
Route::get('search','PageController@search')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');


<<<<<<< HEAD
// Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');
=======
/*Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');
*/// Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');

>>>>>>> d0368eecfa9ea82b5a43f02303b24f3cc0ea7361

Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');


//backendအပိုင်းor(adminအပိုင်း)
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
<<<<<<< HEAD
//<<<<<<< HEAD
=======

//Route::get('city','PageController@cityfun')->name('citypage');
//Route::get('bustype','PageController@bustypefun')->name('bustypepage');
//Route::get('buscompany','PageController@buscompanyfun')->name('buscompanypage');


Route::resource('cities','CityController');
Route::resource('bus_types','Bus_typeController');
Route::resource('buscompany','BusCompanyController');


>>>>>>> d0368eecfa9ea82b5a43f02303b24f3cc0ea7361
Route::resource('routes', 'RouteController');
//=======
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');
Route::resource('buscompanies','BusCompanyController');
<<<<<<< HEAD
=======

>>>>>>> d0368eecfa9ea82b5a43f02303b24f3cc0ea7361
Route::resource('bustypes','BusTypeController');
Route::resource('cities','CityController');





<<<<<<< HEAD
//>>>>>>> 522ea2ef5ea673dfa244edde9fc54f375587f03c
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> d0368eecfa9ea82b5a43f02303b24f3cc0ea7361
