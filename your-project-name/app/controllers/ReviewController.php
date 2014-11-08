<?php

class ReviewController extends BaseController {

	public function getReview(){
		return View::make('Form.ReviewForm');	
	}
	public function postReview(){
		$name = Session::get('name');
		$comment = Input::get('comment');
		$Nameshop = Session::get('nameshop');

		$Review = DB::insert('insert into review (email,comment,Nameshop) values (?,?,?)',array($name,$comment,$Nameshop));

		if($Review){
			return Redirect::route('Review-get');
		}
	}
}