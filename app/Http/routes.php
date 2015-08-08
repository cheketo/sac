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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function(){
	return redirect('auth/login');
});

/*
Route::get('profile', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...
}]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);	
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['middleware'=>'auth'], function(){

	// Admin Index
	Route::get('admin',function() {
		return view('admin.index');
	});

	// Users
	Route::get('users',function() {
		return view('admin.users');
	});

	// Status routes
	Route::resource('status', 'StatusController');

});