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

Route::get('/home', ['middleware'=>['stormpath.auth'], function() {
	return view('welcome');
}]);
 
// This route is only accessible by a guest
Route::get('/', ['middleware' => ['stormpath.guest'], function() {
    return 'You are a guest!';
}]);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::auth();

// Route::get('/home', 'HomeController@index');
