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
	'uses' => 'HomeController@home'
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
	Route::get('/centraledit', function(){
	return View::make('edit.edit');
	});
	Route::get('/edit',array(
	'as' => 'edit-get',
	'uses' => 'EditController@getedit'
	));
	Route::post('/edit',array(
	'as' => 'edit-post',
	'uses' => 'EditController@postedit'
	));
	/*
	| Create shop
	*/
	Route::get('/createshop',array(
	'as' => 'createshop-get',
	'uses' => 'ShopController@getcreateshop'
	));
	Route::post('/createshop',array(
	'as' => 'createshop-post',
	'uses' => 'ShopController@postcreateshop'
	));
	/*
	| shop profile
	*/
	Route::get('/shop/{name}', array (
	'as' => 'shop-user',
	'uses' => 'ShopController@shopprofile'
	));
	/*
	| Search
	*/
	Route::get('/centralsearch', function(){
	return View::make('search.centralsearch');
	});
	Route::get('/search/user', array (
	'as' => 'searchuser-get',
	'uses' => 'SearchController@searchUserget'
	));
	Route::get('/search/shop', array (
	'as' => 'searchshop-get',
	'uses' => 'SearchController@searchShopget'
	));
	Route::post('/search/user', array (
	'as' => 'searchuser-post',
	'uses' => 'SearchController@searchUserpost'
	));
	Route::post('/search/shop', array (
	'as' => 'searchshop-post',
	'uses' => 'SearchController@searchShoppost'
	));
	/*
	| Edit profile image
	*/
	Route::get('/image', array (
	'as' => 'image-get',
	'uses' => 'ImageController@home'
	));
	Route::post('/image', array (
		'as' => 'image-post',
		'uses' => 'ImageController@uploadimage'
	));
	/*
	| Blob use for review
	*/
	Route::get('/blob', array (
	'as' => 'blob-get',
	'uses' => 'BlobController@home'
	));
	Route::post('/blob', array (
	'as' => 'blob-post',
	'uses' => 'BlobController@createblob'
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
		/*
		| forgot password post
		*/
		Route::post('/forgot', array(
		'as' => 'forgot-post', 
		'uses' => 'AuthController@postForgotPassword'
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
	
	/*
	| forgot password
	*/
	Route::get('/forgot', array(
	'as' => 'forgot-get', 
	'uses' => 'AuthController@getForgotPassword'
	));
	
	Route::get('recover/{code}',array(
	'as' => 'recover-get',
	'uses' => 'AuthController@getRecovery'
	));
	
	
});
/////Order//////

Route::post('/Order3', array(
		'as' => 'Order-post', 
		'uses' => 'OrderController@postOrder'
));

Route::get('/Order2',array(
	'as' => 'Order-menu',
	'uses' => 'OrderController@menuOrder'
));

////add menu/////
Route::get('/addMenu',array(
	'as' => 'Menu-add',
	'uses' => 'MenuController@addMenu'
));

Route::post('/addMenu',array(
	'as' => 'Menu-set',
	'uses' => 'MenuController@setMenu'
));
///// Reserve ////
Route::get('/Reserve2', array(
	'as' => 'Reserve-get', 
	'uses' => 'ReserveController@getReserve'
));

Route::post('/Reserve2', array(
	'as' => 'Reserve-post', 
	'uses' => 'ReserveController@postReserve'
));
Route::get('/Reserve/Fail',array(
	'as' => 'Reserve-fail',
	'uses' => 'ReserveController@failReserve'
));
Route::post('/setReserve', array(
	'as' => 'Reserve-add', 
	'uses' => 'ReserveController@reReserve'
));
Route::get('/setReserve',array(
	'as' => 'Reserve-set',
	'uses' => 'ReserveController@setReserve'
));

/////Review////
Route::get('/Review',array(
	'as' => 'Review-get',
	'uses' => 'ReviewController@getReview'
));

Route::post('/Review', array(
	'as' => 'Review-post',
	'uses' => 'ReviewController@postReview'
));
////comment/////
Route::post('/comment',array(
	'as' => 'Comment-set',
	'uses' => 'CommentController@postComment'
));

Route::get('/Menu',array(
	'as' => 'Menu-get',
	'uses' => 'MenuController@getMenu'

));
Route::get('/allshop', array(
	'as' => 'Shop-show',
	'uses' =>'ShopController@getallShop'
));


Route::get('/shopuser', function(){
	return View::make('profile.ShopProfile');
});