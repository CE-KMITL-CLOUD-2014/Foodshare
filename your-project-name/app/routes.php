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
Route::get('/mail', array (
	'as' => 'mail',
	'uses' => 'EmailController@home'
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
	/*
	| home
	*/
	Route::get('/', array(
	'as' => 'home', 
	'uses' => 'HomeController@showWelcome'
	));
	
	/*
	|  Profile
	*/
	Route::get('/user/{email}', array (
	'as' => 'profile-user',
	'uses' => 'ProfileController@user'
	));
	/*
	| Edit password
	*/
	Route::get('/edit',array(
	'as' => 'edit-get',
	'uses' => 'EditController@home'
	));
	Route::post('/edit',array(
	'as' => 'edit-post',
	'uses' => 'EditController@editpassword'
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
	
	/*
	| Detail of this server
	*/
	Route::get('/detail', function(){
	return View::make('detail');
	});
	
});
/////Order//////
Route::get('/Order3', array(
	'as' => 'Order-get', 
	'uses' => 'OrderController@getOrder'
));

Route::post('/Order3', array(
		'as' => 'Order-post', 
		'uses' => 'OrderController@postOrder'
));

Route::get('/Order2',array(
	'as' => 'Order-menu',
	'uses' => 'OrderController@menuOrder'
));

Route::get('/Order1',array(
	'as' => 'Order-show',
	'uses' => 'OrderController@showOrder'
));

Route::get('/setOrder',array(
	'as' => 'Order-set',
	'uses' => 'OrderController@setOrder'
));

Route::post('/setOrder',array(
	'as' => 'Order-add',
	'uses' => 'OrderController@addOrder'
));

Route::get('/Reserve2', array(
	'as' => 'Reserve-get', 
	'uses' => 'ReserveController@getReserve'
));

Route::post('/Reserve2', array(
	'as' => 'Reserve-post', 
	'uses' => 'ReserveController@postReserve'
));

Route::get('/Reserve1', array(
	'as' => 'Reserve-show', 
	'uses' => 'ReserveController@showReserve'
));
Route::get('/setReserve',array(
	'as' => 'Reserve-set',
	'uses' => 'ReserveController@setReserve'
));
Route::get('/Review',array(
	'as' => 'Review-get',
	'uses' => 'ReviewController@getReview'
));

Route::get('/Menu',array(
	'as' => 'Menu-get',
	'uses' => 'MenuController@getMenu'

));


Route::get('/shopuser', function(){
	return View::make('profile.ShopProfile');
});