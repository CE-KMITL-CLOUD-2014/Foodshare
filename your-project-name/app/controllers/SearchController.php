<?php

class SearchController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function searchUserget(){
		return View::make('search.searchuser');
	}
	
	public function searchShopget(){
		return View::make('search.searchshop');
	}
	public function searchUserpost(){
		$validator = Validator::make(Input::all(),array('Email' => 'required|max:50'));//check condition
		if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('searchuser-get')
				->withErrors($validator)
				->withInput();
		}else{
			$email = Input::get('Email');
			$user = User::where('email', '=', $email);
			$user = $user->first();
			if($user != null){
				return View::make('search.searchuserresult')
					->with('user',$user);
			}else{
				return "no";//View::make('search.searchuserresult')->with('user','Can\'t find');
			}
		}
	}
	public function searchShoppost(){
		$validator = Validator::make(Input::all(),array('Nameshop' => 'required|max:50'));//check condition
		if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('searchshop-get')
				->withErrors($validator)
				->withInput();
		}else{
			$nameshop = Input::get('Nameshop');
			$shops = DB::select('select * from shop where Nameshop = ?', array($nameshop));
			if($shops != null){
				return View::make('search.searchshopresult')->with('shops',$shops);
			}else{
				return "no";//View::make('search.searchuserresult')->with('user','Can\'t find');
			}
		}
	}
}
