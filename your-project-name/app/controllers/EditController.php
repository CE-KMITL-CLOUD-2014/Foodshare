<?php

class EditController extends BaseController {

	public function home(){
		return View::make('account.edit');
	}
	public function getEdit(){
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
		
		
		}		
	}
}