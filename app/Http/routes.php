<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*index*/
Route::get('/login', function () {
    return view('index');
});

/*utama*/

Route::get('/', 'PangdarController@index');

Route::get('index', function(){
	return view('index');
});



Route::get('isnan', function(){
	return view('utama');
});



Route::get('admin', 'AdminController@index');
Route::get('pangdar', 'PangdarController@index'); 
Route::get('pangdar/{id}', 'PangdarController@show'); 
