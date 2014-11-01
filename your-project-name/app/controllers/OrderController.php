<?php

class OrderController extends BaseController {

	public function getOrder(){
		return View::make('Order.OrderForm');	
	}
	public function postOrder()	{
		
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'Name' => 'required|max:50|email|unique:auth',
				'Phonenumber' => 'required|max:10',
				'buildingtype' => 'required',
				'HouseNumber' => 'required',
				'Road' => 'required',
				'street' => 'required',
				'city' => 'required'
			)
		);
		
		if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('Order-menu')
				->withErrors($validator)
				->withInput();
		}else{
			$name = Input::get('name');  // retrieve inputs
			$phonenumber = Input::get('phoenumber');
			$buildingtype = Input::get('buildingtype');
			$housenumber = Input::get('houseNumber') ;
			$road = Input::get('road');
			$street = Input::get('street');
			$city = Input::get('city');
			//Activation code
			$Order = Order::create(array(   //create account in database
				'name' => $name,
				'phonenumber' => $phonenumber,
				'buildingtype' => $buildingtype,
				'houseNumber' => $housenumber,
				'road' => $road,
				'street' => $street,
				'city' => $city,
			));
			
			if($Order){
			
				//Send email
				return Redirect::route('home')
					->with('global','Your account has been created');
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