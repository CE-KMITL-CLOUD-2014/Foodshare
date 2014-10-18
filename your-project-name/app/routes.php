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

Route::get('/', array(
	'as' => 'home', 
	'uses' => 'HomeController@showWelcome'
));
Route::get('/signin', function()
{
	return View::make('account.signin');
});
Route::get('/db', function()
{
	return View::make('db');
});

/*
Unauthentication group
*/
Route::group(array('before' => 'guest'), function(){
	
	/*
	| CSRF Protection group
	*/
	Route::group(array('before' => 'csrf' ), function(){
		/*
		| Create account(POST)
		*/
		Route::post('/register', array(
		'as' => 'register', 
		'uses' => 'AuthController@postregister'
		));
	});
	
	/*
	| Create account 
	*/
	Route::get('/register', array(
	'as' => 'register', 
	'uses' => 'AuthController@getregister'
	));
	
});
