<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'	
]);


Route::get('/user/signup', [
	'uses' => 'UserController@getSignup',
	'as' => 'user.signup',
	'middleware' => 'guest'	
]);

Route::post('/user/signup', [
	'uses' => 'UserController@postSignup',
	'as' => 'user.signup',	
	'middleware' => 'guest'	
]);

Route::get('/user/signin', [
	'uses' => 'UserController@getSignin',
	'as' => 'user.signin',
	'middleware' => 'guest'		
]);

Route::post('/user/signin', [
	'uses' => 'UserController@postSignin',
	'as' => 'user.signin',
	'middleware' => 'guest'		
]);

Route::get('/user/profile',[
	'uses' => 'UserController@getProfile',
	'as' => 'user.profile',
	'middleware' => 'auth'	
]);

Route::get('/user/logout',[
	'uses' => 'UserController@getLogout',
	'as' => 'user.logout',
	'middleware' => 'auth'	
]);

Route::get('/add-to-cart/{id}',[
	'uses' => 'ProductController@getAddToCart',
	'as' => 'porduct.addToCart'
]);