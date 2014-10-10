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
	return View::make('signin');
});
/* 

Unauthoticated group

*/
Route::group(array('before' => 'guest'),function(){
	
	/*
	CSRF protection group
	
	*/
	Route::group(array('before' => 'csrf'),function(){
	
	});
	
	Route::get('account/create',array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
	));
	
	Route::get('amanda/create',function(){
		return 'hello';
	});
});

