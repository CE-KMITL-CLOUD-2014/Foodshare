<?php

class ReviewController extends BaseController {

	public function getReview(){
		return View::make('Form.ReviewForm');	
	}
	public function postReview(){
		$ID = Session::get('name');
		$namemenu = Input::get('name');
		$comment = Input::get('comment');
		$Nameshop = DB::select('select * from shop where Nameshop = ?', array($name));

		$Review = DB::insert('insert into review (ID,email,comment,Nameshop) values (?,?,?,?)',array($ID,$name,$comment,$Nameshop));

		if($Review){
			return Redirect::route('Form.ReviewForm');
		}
	}
	}
}