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
			$Nameshop = Session::get('nameshop');

			$num1=(int)$Seat;

			$shopseat = DB::select('select * from shop where Nameshop=?',array($Seat));
			$num2=(int)$shopseat;
			$seat=Input::get('numpeople');
			if($seat<$shopseat){

				$Reserve=DB::insert('insert into reserv (name,lastname,Phonenumber,seat,Nameshop) values (?,?,?,?,?)',array($name,$lastname,$phonenumber,$Seat,$Nameshop));

				$newseat = $num2-$num1;

				DB::update('update shop where seat=?',array('newseat'));
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
	public function failReserve(){
		return View::make('Form.StatusReserve');
	}
	public function addReserve(){

	}
			
			
}