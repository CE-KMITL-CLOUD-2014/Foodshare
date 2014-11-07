<?php
class ProfileController extends BaseController {
	public function user($email){
		$user = User::where('email', '=', $email);
		$shops = DB::select('select * from shop where Email = ?', array($email));
		
		if($user->count()){
			$user = $user->first();
			
			return View::make('profile.UserProfile')  
				->with('user',$user)->with('shops',$shops);
		}
		return App::abort(404);
		
		
		
	}
}
