<?php

class AuthController extends BaseController {

	public function getSignin(){
		return View::make('account.signin');
	}
	
	public function postSignin(){
		$validator = Validator::make(Input::all(), //check condition
			array(
				'email' => 'required|email',  //is email and have an input
				'password' => 'required'   //have an input
			)
		);
		if($validator->fails()){            //redirect to signin if error
			return Redirect::route('signin-get')
				->withErrors($validator)
				->withInput();
			
		}else{         //retrieve input into variables
			$email=Input::get('email');
			$password = Input::get('password');
			$remember=(Input::has('remember')) ? true : false ;
			$auth=Auth::attempt(['email' => $email, 'password' => $password], $remember);   //insert into database
			
			if($auth){    // if success redirect to homepage
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
		
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'email' => 'required|max:50|email|unique:auth',
				'password' => 'required|max:256|min:3',
				'password_again' => 'required|same:password'
			)
		);
		
		if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('register-get')
				->withErrors($validator)
				->withInput();
		}else{
			$email = Input::get('email');  // retrieve inputs
			$username = Input::get('uername');
			$password = Input::get('password');
			
			//Activation code
			
			$code = str_random(60);
			
			$user = User::create(array(   //create account in database
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