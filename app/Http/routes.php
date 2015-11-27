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



#Views
Route::get('/', 'AppController@index');
Route::get('register', 'AppController@register');
Route::get('login', 'AppController@login');
Route::get('home', 'AppController@index');



#Services for User Profile
Route::post('registerUser', 'AppController@registerUser');
Route::post('getUserProfile', 'AppController@getUserProfile');
Route::post('loginUser', 'AppController@loginUser');
Route::post('resetPassword', 'AppController@resetPassword');
Route::post('changePassword', 'AppController@changePassword');
Route::post('getUserAddress', 'AppController@getUserAddress');
Route::post('setUserAddress', 'AppController@setUserAddress');
Route::post('setUserCategory', 'AppController@setUserCategory');


#Services for Category
Route::post('getCategory', 'AppController@getCategory');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
