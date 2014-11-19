<?php

class EditController extends BaseController {

	public function getedit(){
		return View::make('account.edit');
	}
	public function postedit(){
		/*This is an Edit function
		you can edit the password by typing an old password and type the new */
		$validator = Validator::make(Input::all(), //check condition
			array(
				'oldpassword' => 'required',  					//is oldpassword have input
				'newpassword' => 'required|max:256|min:3',		//is oldpassword have input
				'password_again' => 'required|same:newpassword' //is oldpassword have input
			)
		 );
        if($validator->fails()){   								//if fail redirect to editpage
			return Redirect::route('edit-get')
				->withErrors($validator)
				->withInput();
		}else{
			$oldpassword = Input::get('oldpassword');		
			$newpassword = Input::get('newpassword');
			$email = Session::get('name');
			$user = User::find($email);
			if (Hash::check($oldpassword, $user->Password))		//to check is oldpasswword true or false
			{
				$hashpassword=Hash::make($newpassword);
				$user->Password=$hashpassword;
				$user->save();
				return Redirect::route('edit-get')				//if success return to edit and display success
					->with('global','successfully');
			}
			else{
			    return Redirect::route('edit-get')
					->with('global','Old password and new password don\'t match');
			}
		}	
	}
}