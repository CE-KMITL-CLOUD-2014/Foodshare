<?php

class AuthController extends BaseController {

	public function getSignin(){
		return View::make('account.signin');
	}
	
	public function postSignin(){
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|email',
				'password' => 'required'
			)
		);
		if($validator->fails()){
			return Redirect::route('signin-get')
				->withErrors($validator)
				->withInput();
			
		}else{
			$email=Input::get('email');
			$password = Input::get('password');
			$remember=(Input::has('remember')) ? true : false ;
			$auth=Auth::attempt(['email' => $email, 'password' => $password], $remember);
			
			if($auth){
				return Redirect::intended('/');
			}else{
				return Redirect::route('signin-get')
					->with('global','Email or Password error');
			}
		}
		return Redirect::route('signin-get')
			->with('global', 'There was a problem signin you in');
	}
	public function getRegister() {
	
	return View::make('account.register');
	}
	public function postRegister()	{
		
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|max:50|email|unique:auth',
				'password' => 'required|max:256|min:3',
				'password_again' => 'required|same:password'
			)
		);
		
		if($validator->fails()){
			return Redirect::route('register-get')
				->withErrors($validator)
				->withInput();
		}else{
			$email = Input::get('email');
			$username = Input::get('uername');
			$password = Input::get('password');
			
			//Activation code
			
			$code = str_random(60);
			
			$user = User::create(array(
				'email' => $email,
				'username' => $username,
				'password' => Hash::make($password),
				'code' => $code,
				'active' => 0,
			
			));
			
			if($user){
			
				//Send email
				return Redirect::to('/')
					->with('global','Your account has been created');
			}
		}
		
	}
	public function getSignout(){
		Auth::logout();
		return Redirect::route('home');
	}	
		
}