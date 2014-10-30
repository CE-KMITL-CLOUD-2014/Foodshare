<?php
class ProfileController extends BaseController {
	public function user($email){
		$user = User::where('email', '=', $email);
		
		if($user->count()){
			$user = $user->first();
			return View::make('profile.UserProfile')  //change frome 'profile.user' to 'profile.UserProfile'
				->with('user',$user);
		}
		return App::abort(404);
		
		
		
	}
}
