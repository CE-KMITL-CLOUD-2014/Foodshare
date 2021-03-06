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
				'username' => 'required|unique:auth',
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
			$username = Input::get('username');
			//Activation code
			
			$code = str_random(60);
			
			$user = User::create(array(   //create account in database
				'email' => $email,
				'password' => Hash::make($password),
				'code' => $code,
				'active' => 0,
				'profileimage' => $image,
				'extensionimage' => 'jpg',
				'username' => $username
			));
			
			if($user){
				
				//create container
				
				$file1=public_path('sdkazure\vendor\autoload.php');
						$file2 = public_path('sdkazure\vendor\microsoft\windowsazure\WindowsAzure\WindowsAzure.php');
						File::requireOnce($file1);
						File::requireOnce($file2);
									
				// Create Connection String
				$connectionString = "DefaultEndpointsProtocol=http;AccountName=foodshare;AccountKey=rsolzaz1eoRyLwUcIOD3FH6PpiVSWs4GRXtf5NQhgHPa++tazwLJNjhLMoBEOVRVmzLSBOPmOxhxfdE411D04A==";

				// Create blob REST proxy.
				$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);

				$createContainerOptions = new CreateContainerOptions(); 

				$createContainerOptions->setPublicAccess(PublicAccessType::CONTAINER_AND_BLOBS);

				// Set container metadata
				$createContainerOptions->addMetaData("key1", "value1");
				$createContainerOptions->addMetaData("key2", "value2");

				try {
					
					// Create container.
					$blobRestProxy->createContainer($username, $createContainerOptions);

				}
				catch(ServiceException $e){
					// Handle exception based on error codes and messages.
					// Error codes and messages are here: 
					// http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
					$code = $e->getCode();
					$error_message = $e->getMessage();
					echo $code.": ".$error_message."<br />";
				}
				$blobRestProxy  = null;			
				return Redirect::route('home')	//Redirect to homepage
					->with('global','Your account has been created');
			}else{
				return Redirect::route('register-get');
			}
		}
	}
	public function getSignout(){
		Auth::logout();
		return Redirect::route('signin-get');
	}	
	
	public function getForgotPassword(){
	
		return View::make('account.forgot');
	}
	
	public function postForgotPassword(){
	
		$validator = Validator::make(Input::all(),
		array(
				'email' => 'required|email'
				)
		);
		if($validator->fails()){
			return Redirect::route('forgot-get')
			->withErrors($validator)
			->withInput();
		}else{
		
			$user = User::where('Email', '=' , Input::get('email'));
			
			if($user->count()){
				$user = $user->first();
				
				$code = str_random(60);
				$password = str_random(10);
				
				$user->Code =$code;
				$user->Password_temp = Hash::make($password);
				
				if($user->save()){
					Mail::send('emails.forgot',array('url' =>URL::route('recover-get',$code),'password' => $password),function($message) use ($user) {
						$message->to($user->Email)->subject('Your new password');
					});
					
					return Redirect::route('signin-get')->with('global','We have sent you a new password');
				}	
			}
		}
		
			return Redirect::route('forgot-get')->with('global','Could not request');
		}
		
		public function getRecovery($code){
				$user = User::where('Code', '=',$code)->where('Password_temp','!=','');
							
							
				if($user->count()){
					$user = $user->first();			
					$user->Password = $user->Password_temp;
					$user->Password_temp = '';
					$user->Code = '';
					
					if($user->save()){
						return Redirect::route('signin-get')->with('global','Your account has been recover and you can sign in with your new password.');	
					}
				}	
				return Redirect::route('signin-get')->with('global','Cloud not recovery your account.');
		}
}