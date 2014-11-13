<?php

class CommentController extends BaseController {

	public function postComment(){
		$owneruser = Session::get('Ownername');
		$comment = Input::get('comment');
		$user= Session::get('name');
		if(DB::insert('insert into comment (Email,Comment,OwnerEmail) values (?,?,?)',array($user,$comment,$owneruser))){
			return Redirect::route('profile-user',$owneruser);
		}else{
			return Redirect::route('profile-user',$owneruser);
		}
		
	}
}