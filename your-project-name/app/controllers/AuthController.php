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
			    Session::put('name', $email);
				return Redirect::route('profile-user',$email);
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
			$password = Input::get('password');
			$image = "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";
			
			//Activation code
			
			$code = str_random(60);
			
			$user = User::create(array(   //create account in database
				'email' => $email,
				'password' => Hash::make($password),
				'code' => $code,
				'active' => 0,
				'profileimage' => $image,
				'extensionimage' => 'jpg'
			));
			
			if($user){
			
				//Send email
				return Redirect::route('home')
					->with('global','Your account has been created');
			}
		}
		
	}
	public function getSignout(){
		Auth::logout();
		return Redirect::route('signin-get');
	}	
		
}