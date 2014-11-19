<?php

class ReserveController extends BaseController {

	public function getReserve(){
		return View::make('Form.ReserveForm');	
	}
	public function postReserve()	{
		/*this function for user who want to Reserve a shop 
		Type an information of your Reserve
		It will send email to shopuser for confirm*/
		$validator = Validator::make(Input::all(),   		//check condition
			array(
				'name' => 'required',
				'lastname' => 'required',
				'phonenumber' => 'required|numeric',
				'numpeople' => 'required|numeric',
				'Date'=>'required'
			)
		);
		
		if($validator->fails()){   							//if fail redirect to register page
			return Redirect::route('Reserve-show')
				->withErrors($validator)
				->withInput();
		}else{
			$name = Input::get('name'); 					 // retrieve inputs
			$lastname = Input::get('lastname');
			$phonenumber = Input::get('phonenumber');
			$Seat = Input::get('numpeople');
			$nameshop = Session::get('nameshop');
			$date = input::get('Date');

			$num1;
			$num1=(int)$Seat;								//Change into int
			$seats = DB::select('select Seat from shop where Nameshop = ?', array($nameshop));   //select seat from shop
			$numkeep;
			foreach($seats as $seat){
				$numkeep=$seat->Seat;
			}
			$seat2=(string)$Seat;

			if($num1<$numkeep){								//if Reserve seat from user typing is lessthan shop seat it will reserve

				$Reserve=DB::insert('insert into reserv (name,lastname,Phonenumber,seat,Nameshop) values (?,?,?,?,?)',array($name,$lastname,$phonenumber,$Seat,$nameshop));
				//Send email when Reserve
				Mail::send('emails.reserve', array('name' => $name,'lastname' => $lastname,'phonenumber' => $phonenumber, 'numpeople' => $seat2,'date'=>$date ), function ($message){
					$nameshop=Session::get('nameshop');
					$emails = DB::select('select Email from shop where Nameshop = ?', array($nameshop));
					$sendemail;
					foreach($emails as $email){
						$sendemail=$email->Email;
					}
				$message->to($sendemail,'Dear')->subject('Reserv');
			});
				$newseat = $numkeep-$num1;

				DB::table('shop')
            		->where('Nameshop', $nameshop)
            		->update(array('Seat' => $newseat));

				//DB::update('update shop set seat = 50  where Seat = ?',array($newseat));
				//Activation code
			
				if($Reserve){
				//Send email
				return Redirect::route('shop-user',$nameshop);
				}
			} 
			else{
				//cant reserve
				return Redirect::route('Reserve-fail')
				->with('global','Have bot enough seat for u');
			}
		}
		
	}
	public function setReserve(){
		return View::make('Reserve.setReserve');
	}
	public function reReserve(){
		/*this function is for shop user
		For set seat back again */
		$Seat = Input::get('avaliable');		//input
		$nameshop = Session::get('nameshop');
		DB::table('shop')
            ->where('Nameshop', $nameshop)
            ->update(array('Seat' => $Seat));
		return Redirect::route('shop-user',$nameshop);

	}
	public function failReserve(){
		return View::make('Reserve.StatusReserve');
	}
	public function addReserve(){

	}
			
			
}