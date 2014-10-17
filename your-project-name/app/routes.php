<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/signin', function()
{
	return View::make('signin');
});
Route::get('/db', function()
{
	return View::make('db');
});
Route::get('/register', array(
	'as' => 'register', 
	'uses' => 'AuthController@register'
));
