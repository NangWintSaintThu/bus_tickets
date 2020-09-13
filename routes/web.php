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
Route::get('route', 'PageController@routefun')->name('routepage');

Route::get('travellerinfo', 'PageController@travellerinfo')->name('travellerinfopage');

Route::get('bookingdetail', 'PageController@bookingdetail')->name('bookingdetailpage');



Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');



Route::resource('cities','CityController');
Route::resource('bus_types','Bus_typeController');



Route::resource('routes', 'RouteController');

Route::resource('travellerinfos','TravellerInfoController');
Route::resource('bookingdetails','BookingdetailController');

