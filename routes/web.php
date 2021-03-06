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

Route::get('/', function () {
    return view('welcome');
    //return 'Hello Laravel';
});
//Frontend
Route::get('/','PageController@home')->name('homepage');

Route::get('about','PageController@about')->name('aboutpage');

Route::get('service','PageController@service')->name('servicepage');

Route::get('contact','PageController@contact')->name('contactpage');

Route::get('room','PageController@room')->name('roompage');

Route::get('roomfrontend/{id}','PageController@roomfrontend')->name('roomfrontend');

Route::get('roomdetail/{id}','PageController@roomdetail')->name('roomdetail');

Route::get('book','PageController@book')->name('bookpage');

Route::get('history/{id}', 'BookingController@history')->name('history');







Route::resource('books','BookingController');

//Backend
Route::middleware('role:Admin')->group(function () {

Route::get('dashboard','BackendController@dashboardfun');

Route::resource('roomtypes','RoomtypeController');

Route::resource('services','ServiceController');

Route::resource('rooms','RoomController');

Route::get('book_status/{id}','BookingController@book_status')->name('book_status');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
