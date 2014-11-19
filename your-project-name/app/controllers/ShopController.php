<?php
class ShopController extends BaseController {
	public function getcreateshop(){
	
		return View::make('account.shop');
	}
	public function postcreateshop(){
		/*THis function for user who want to build a shop 
		To Created by type a detail*/
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
		/*A Shop profile for all user can access to this 
		To check that shop user is connect to shop

		*/
		$nameshops = DB::select('select * from shop where Nameshop = ?', array($name));
		$menus = DB::select('select * from menu where Nameshop = ?', array($name));
		$comments = DB::select('select * from review where Nameshop = ?', array($name));
		foreach ($nameshops as $nameshop)
		{
			$emailshop = $nameshop->Email;
			$seat=$nameshop->Seat;
		}
		if($nameshops!=null){
		Session::put('emailshop',$emailshop);
		Session::put('nameshop',$name);
		Session::put('seat',$seat);
		return View::make('profile.ShopProfile')->with('menus',$menus)->with('comments',$comments);
		}
		else{
		return Redirect::intended('/');
		}
	}
	public function getallShop(){																//To display all shop
		$shops = DB::table('shop')->get();
		return View::make('Form.ShowAllShop')->with('shops',$shops);
	}
}