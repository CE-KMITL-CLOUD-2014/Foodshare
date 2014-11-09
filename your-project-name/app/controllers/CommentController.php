<?php

class CommentController extends BaseController {

	public function postComment(){
		$user = Session::get('name');
		$comment = Input::get('comment');

		$comment = DB::insert('insert into comment (Email,Comment) values (?,?)',array($user,$comment));

		if($comment){
			return Redirect::route('home');
		}
	}
}