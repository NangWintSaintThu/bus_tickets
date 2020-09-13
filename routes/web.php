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
//Route::get('/', 'PageController@home')->name('homepage');
Route::get('/','PageController@home')->name('homepage');
Route::get('about','PageController@about')->name('aboutpage');
Route::get('yourticket','PageController@yourticket')->name('yourticketpage');
Route::get('contact','PageController@contact')->name('contactpage');
Route::get('route', 'PageController@routefun')->name('routepage');
Route::get('search','PageController@searchfun')->name('searchpage');

Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');

Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');



Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
//<<<<<<< HEAD
Route::resource('routes', 'RouteController');
//=======
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');


//>>>>>>> 522ea2ef5ea673dfa244edde9fc54f375587f03c
