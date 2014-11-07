<?php
class ShopController extends BaseController {
	public function getcreateshop(){
	
		return View::make('account.shop');
	}
	public function postcreateshop(){
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'name' => 'required|max:50',
				'detail' => 'required',
				'price' => 'required',
				'city' => 'required',
				'type' => 'required'
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
			$price = Input::get('price');
			$city = Input::get('city');
			$type = Input::get('type');
			$seat = Input::get('seat');
			
			DB::insert('insert into shop (Email, Nameshop, Detail,Price,City,Type,Seat) values (?, ?,?,?,?,?,?)', array($email, $name,$detail,$price,$city,$type,$seat));
			
			return Redirect::route('home');
		}
	}
	
	public function shopprofile($name){
		
		$nameshop = DB::select('select * from shop where Nameshop = ?', array($name));
		if($nameshop!=null){
		return View::make('profile.ShopProfile');
		}
		else{
		return Redirect::intended('/');
		}
	}

}