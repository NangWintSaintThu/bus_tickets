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

Route::get('travellerinfo', 'PageController@travellerinfofun')->name('travellerinfopage');

Route::get('bookingdetail', 'PageController@bookingdetailfun')->name('bookingdetailpage');



Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');


