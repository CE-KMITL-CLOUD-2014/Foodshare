<?php

class ReserveController extends BaseController {

	public function getReserve(){
		return View::make('Form.ReserveForm');	
	}
	public function postReserve()	{
		
		$validator = Validator::make(Input::all(),   //check condition
			array(
				'name' => 'required',
				'lastname' => 'required',
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
			$lastname = Input::get('lastname');
			$phonenumber = Input::get('phonenumber');
			$Seat = Input::get('numpeople');
			$Nameshop = Session::get('nameshop')

			$shopseat = DB::select('select * from shop where Nameshop=?',array($Seat));
			$seat=Input::get('numpeople');
			if($seat<$shopseat){

				$Reserve=DB::insert('insert into reserve (name,lastname,Phonenumber,seat,Nameshop) values (?,?,?,?,?)',array($name,$lastname,$phonenumber,$Seat,$Nameshop));

				$shopseat=$shopseat-$seat;
			
			//Activation code
			
				if($Reserve){
				//Send email
				return Redirect::route('home')
					->with('global','Your account has been created');
				}
			} 
			else{
				return Redirect::route('home')
				->with('global','Have bot enough seat for u');
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