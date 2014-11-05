<?php

class ReserveController extends BaseController {

	public function getReserve(){
		return View::make('Form.ReserveForm');	
	}
	public function postReserve()	{
		
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'name' => 'required',
				'phonenumber' => 'required',
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
			$Reserve=DB::insert('insert into Reserve (name,phonenumber,numpeople) values (?,?,?)',array($name,$phonenumber,$numpeople));
			
			if($Reserve){
				//Send email
				return Redirect::route('home')
					->with('global','Your account has been created');
			}
		}
		
	}
	public function setReserve(){
		return View::make('Reserve.setReserve');
	}
	public function showReserve(){
		return View::make('Reserve.AllReserveShop');
	}
	public function statusReserve(){
		return View::make('Form.StatusReserve');
	}
	public function addReserve(){

	}
			
			
}