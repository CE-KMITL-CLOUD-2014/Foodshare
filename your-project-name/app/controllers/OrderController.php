<?php

class OrderController extends BaseController {

	public function getOrder(){
		return View::make('Order.OrderForm');	
	}
	public function postOrder()	{
		
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'name' => 'required',
				'phonenumber' => 'required',
				'buildingtype' => 'required',
				'housenumber' => 'required',
				'road' => 'required',
				'street' => 'required',
				'city' => 'required'
			)
		);
		
		if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('Order-get')
				->withErrors($validator)
				->withInput();
		}else{
			$name = Input::get('name');  // retrieve inputs
			$phonenumber = Input::get('phonenumber');
			$buildingtype = Input::get('buildingtype');
			$housenumber = Input::get('housenumber') ;
			$road = Input::get('road');
			$street = Input::get('street');
			$city = Input::get('city');
			//DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));

			//$order=order::insert('insert into order(name,phonenumber,buildingtype,housenumber,road,street,city) values()',array($name,$phonenumber,$buildingtype,$housenumber,$road,$street,$city));  //create account in database
			$order=DB::insert('insert into Orders (name,phonenumber,buildingtype,housenumber,road,street,city) values (?,?,?,?,?,?,?)',array($name,$phonenumber,$buildingtype,$housenumber,$road,$street,$city));
			//Activation code
			/*$order = order::create(array(   //create account in database
				'name' => $name,
				'phonenumber' => $phonenumber,
				'buildingtype' => $buildingtype,
				'housenumber' => $housenumber,
				'road' => $road,
				'street' => $street,
				'city' => $city,
			));*/
			
			if($order){
				//Send email
				return Redirect::route('profile-user',Session::get('name'))
					->with('global','Ordered');
			}
		}
		
	}
	public function setOrder(){
		return View::make('Order.setOrder');
	}
	public function showOrder(){
		return View::make('Order.AllOrderShop');
	}
	public function menuOrder(){
		return View::make('Order.OrderMenu');
	}
			
}