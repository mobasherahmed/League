<?php

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

// Welcome page links
Route::get('/','LinkController@index');

// routes of leagues resource
Route::resource('/leagues','LeagueController');

// routes of team resource
Route::resource('/teams','TeamController');

// routes of stadiums resource
Route::resource('/stadiums','StadiumController');

// routes of messages resource
Route::resource('messages', 'MessageController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get( 'user' , function(){
  return redirect('/home');
});

Route::get('contact-us', function(){
  return view('contact-us');
});

Route::get('test' , function(){
  return view('test');
});
