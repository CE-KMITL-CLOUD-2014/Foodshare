<?php
class ShopController extends BaseController {
	public function getcreateshop(){
	
		return View::make('account.shop');
	}
	public function postcreateshop(){
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'name' => 'required|max:50',
				'detail' => 'required'
			)
		);
		
		if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('createshop-get')
				->withErrors($validator)
				->withInput();
		}else{
			$email = Session::get('name');
			$name = input::get('name');
			$detail = Input::get('detail');
			DB::insert('insert into shop (Email, Name, Detail) values (?, ?,?)', array($email, $name,$detail));
			
			return 'insert successfull';
		}
	}
	
	public function shopprofile(){
	
	
	}

}