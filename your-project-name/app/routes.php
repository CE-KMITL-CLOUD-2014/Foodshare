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

Route::get('/user/{email}', array (
	'as' => 'profile-user',
	'uses' => 'ProfileController@user'
));

Route::get('/image', array (
	'as' => 'image-get',
	'uses' => 'ImageController@home'
));

Route::post('/image', array (
	'as' => 'image-post',
	'uses' => 'ImageController@uploadimage'
));

Route::get('/blob', array (
	'as' => 'blob-get',
	'uses' => 'ImageController@home'
));

Route::post('/blob', array (
	'as' => 'blob-post',
	'uses' => 'ImageController@imageblob'
));


Route::get('/detail', function(){
	return View::make('detail');
});
/*
| Authentication filter
*/
Route::group(array('before' => 'auth' ), function() {
	/*
	| sign out (GET)
	*/
	
	Route::get('/signout',array(
		'as' => 'signout',
		'uses' => 'AuthController@getSignout'
	));
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
		'as' => 'register-post', 
		'uses' => 'AuthController@postRegister'
		));
		
		/*
		| Signin (POST)
		*/
		Route::post('/signin', array(
		'as' => 'signin-post', 
		'uses' => 'AuthController@postSignin'
		));
	});
	/*
	| Sign in (GET)
	*/
	Route::get('/signin', array(
	'as' => 'signin-get', 
	'uses' => 'AuthController@getSignin'
	));
	
	/*
	| Create account (GET)
	*/
	Route::get('/register', array(
	'as' => 'register-get', 
	'uses' => 'AuthController@getRegister'
	));
	
});
/////Order//////
Route::get('/Order3', array(
	'as' => 'Order-get', 
	'uses' => 'OrderController@getOrder'
));

Route::get('/Order2',array(
	'as' => 'Order-menu',
	'uses' => 'OrderController@menuOrder'
));

Route::get('/Order1',array(
	'as' => 'Order-show',
	'uses' => 'OrderController@showOrder'
));
Route::get('/shopOrder1',array(
	'as' => 'Order-set',
	'uses' => 'OrderController@setOrder'
));

Route::get('/Reserve2', array(
	'as' => 'Reserve-get', 
	'uses' => 'ReserveController@getReserve'
));

Route::get('/Reserve1', array(
	'as' => 'Reserve-show', 
	'uses' => 'ReserveController@showReserve'
));

Route::get('/Review',array(
	'as' => 'Review-get',
	'uses' => 'ReviewController@getReview'
));

Route::get('/Menu',array(
	'as' => 'Menu-get',
	'uses' => 'MenuController@getMenu'

));

Route::get('/Edit',array(
	'as' => 'Edit-get',
	'uses' => 'EditController@getEdit'

));


Route::get('/shopuser', function(){
	return View::make('profile.ShopProfile');
});