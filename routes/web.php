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
<<<<<<< HEAD
Route::get('book','PageController@book')->name('bookpage');
Route::get('contact','PageController@contact')->name('contactpage');
Route::get('loginpage','PageController@loginfun')->name('loginpage');
Route::get('registerpage','PageController@register')->name('registerpage');
Route::post('search','PageController@searchfun')->name('searchpage');
=======
Route::get('loginpage','PageController@loginfun')->name('loginpage');
Route::get('registerpage','PageController@register')->name('registerpage');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::get('book','PageController@book')->name('bookpage');
Route::get('contact','PageController@contact')->name('contactpage');

=======
<<<<<<< HEAD
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44

=======
>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
Route::get('yourticket','PageController@yourticket')->name('yourticketpage');
Route::get('contact','PageController@contact')->name('contactpage');
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
Route::get('route', 'PageController@routefun')->name('routepage');
Route::post('search','PageController@searchfun')->name('searchpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
<<<<<<< HEAD
Route::get('book','PageController@book')->name('bookpage');
=======
<<<<<<< HEAD

Route::get('book','PageController@book')->name('bookpage');

Route::get('route', 'PageController@routefun')->name('routepage');

Route::get('busroute','PageController@busroutefun')->name('busroutepage');


//backendအပိုင်းor(adminအပိုင်း)


Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
=======
<<<<<<< HEAD

Route::get('book','PageController@book')->name('bookpage');

>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
Route::post('seat','PageController@seatfun')->name('seatpage');
Route::get('selectseat','PageController@selectseat')->name('selectseatpage');
//backendအပိုင်းor(adminအပိုင်း)
<<<<<<< HEAD
Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
=======
Route::middleware('role:Admin')->group(function(){
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
/////Route::middleware('role:Admin')->group(function (){
//backendအပိုင်းor(adminအပိုင်း)
/////Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
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
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
Route::get('seat','PageController@seatfun')->name('seatpage');
Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');
Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');

<<<<<<< HEAD
=======
<<<<<<< HEAD

//backendအပိုင်းor(adminအပိုင်း)

<<<<<<< HEAD
Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
=======
Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef


//backendအပိုင်းor(adminအပိုင်း)
Route::middleware('role:Admin')->group(function () {
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
<<<<<<< HEAD
=======
>>>>>>> 939d146fb1dc4046e3cf1dc27338fc38addc3f5b
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44
>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7
Route::resource('cities','CityController');
Route::resource('bustypes','BusTypeController');
Route::resource('buscompanies','BusCompanyController');
<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::resource('routes', 'RouteController');
=======
<<<<<<< HEAD
});

=======
<<<<<<< HEAD
});
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7

});
<<<<<<< HEAD
=======
=======
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44
>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7

>>>>>>> 55d9569c7092df12139cbdfb7b524e8f8d5211ef
Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');
<<<<<<< HEAD

//for Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
=======
});

<<<<<<< HEAD
=======
>>>>>>> 3280294b9fbfdb0160c2ee5a01bc1d4dd8108d17
>>>>>>> 15e7b5d3ca8951b70585a3894187672fb6225b44
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> 0c72d5b8e473b874b95b46911dea9ad2b7b9d5e7

