<?php

class AuthController extends BaseController {
	public function getregister() {
	
	return View::make('account.register');
	}
	public function postregister()	{
		
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|max:50|email|unique:auth',
				'password' => 'required|max:256|min:3',
				'password_again' => 'required|same:password'
			)
		);
		
		if($validator->fails()){
			return Redirect::route('register')
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
		
		
}