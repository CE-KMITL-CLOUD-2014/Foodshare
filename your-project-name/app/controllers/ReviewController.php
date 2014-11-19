<?php

class ReviewController extends BaseController {

	public function getReview(){
		return View::make('Form.ReviewForm');	
	}
	public function postReview(){
		/*this function is to review the shop */
		$name = Session::get('name');
		$comment = Input::get('comment');
		$Nameshop = Session::get('nameshop');

		$Review = DB::insert('insert into review (Email,Comment,Nameshop) values (?,?,?)',array($name,$comment,$Nameshop));

		if($Review){
			return Redirect::route('shop-user',$Nameshop);
		}
	}
}