<?php

class ReserveController extends BaseController {

	public function getReserve(){
		return View::make('Form.ReserveForm');	
	}
	public function postReserve()	{
		
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'name' => 'required|max:50|email|unique:auth',
				'Phonenumber' => 'required|max:10',
				'numpeople' => 'required',
			)
		);
		
		if($validator->fails()){   //if fail redirect to register page
			return Redirect::route('Reserve-show')
				->withErrors($validator)
				->withInput();
		}else{
			$name = Input::get('name');  // retrieve inputs
			$phonenumber = Input::get('phonenumber');
			$numpeople = Input::get('numpeople');
			
			//Activation code
			$Reserve = Reserve::create(array(   //create account in database
				'name' => $name,
				'phonenumber' => $phonenumber,
				'numpeople' => $numpeople,
			));
			
			if($Reserve){
				//Send email
				return Redirect::route('home')
					->with('global','Your account has been created');
			}
		}
		
	}
	public function setOrder(){
		return View::make('Form.SetOrder');
	}
	public function showReserve(){
		return View::make('Reserve.AllReserveShop');
	}
	public function statusReserve(){
		return View::make('Form.StatusReserve');
	}
			
			
}