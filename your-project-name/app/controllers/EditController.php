<?php

class EditController extends BaseController {

	public function getedit(){
		return View::make('account.edit');
	}
	public function postedit(){
		$validator = Validator::make(Input::all(), //check condition
			array(
				'oldpassword' => 'required',  //is email and have an input
				'newpassword' => 'required|max:256|min:3',
				'password_again' => 'required|same:newpassword'
			)
		 );
        if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('edit-get')
				->withErrors($validator)
				->withInput();
		}else{
			$oldpassword = Input::get('oldpassword');
			$newpassword = Input::get('newpassword');
			$email = Session::get('name');
			$user = User::find($email);
			if (Hash::check($oldpassword, $user->Password))
			{
				$hashpassword=Hash::make($newpassword);
				$user->Password=$hashpassword;
				$user->save();
				return Redirect::route('edit-get')
					->with('global','successfully');
			}
			else{
			    return Redirect::route('edit-get')
					->with('global','Old password and new password don\'t match');
			}
		}	
	}
}