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

Route::get('book','PageController@book')->name('bookpage');

Route::post('seat','PageController@seatfun')->name('seatpage');

Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');

Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');


//backendအပိုင်းor(adminအပိုင်း)

Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');

Route::resource('cities','CityController');
Route::resource('bustypes','BusTypeController');
Route::resource('routes', 'RouteController');
Route::resource('buscompanies','BusCompanyController');
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


