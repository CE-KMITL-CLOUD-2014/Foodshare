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

			$shopseats = DB::select('select * from shop where Nameshop=?',array($Nameshop));
			foreach($shopseats as $shopseat){
				$seatnum=($shopseat->Seat);
			}
			echo $seatnum;
			//$num2=(int)$seatnum;
			$seat=Input::get('numpeople');
			if($num1>$seatnum){

				$Reserve=DB::insert('insert into reserv (name,lastname,Phonenumber,seat,Nameshop) values (?,?,?,?,?)',array($name,$lastname,$phonenumber,$Seat,$Nameshop));

				$newseat = $seatnum-$num1;

<<<<<<< HEAD
				DB::update('update shop set seat  where Seat = ?',array($newseat));
			//Activation code
=======
				DB::update('update shop set seat = 50 where Seat = ?',array($newseat));
>>>>>>> origin/master
			
				if($Reserve){
				
				return Redirect::route('home')
					->with('global','Your account has been created');
				}
			} 
			else{
				return Redirect::route('Reserve-fail')
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
		return View::make('Reserve.StatusReserve');
	}
	public function addReserve(){

	}
			
			
}