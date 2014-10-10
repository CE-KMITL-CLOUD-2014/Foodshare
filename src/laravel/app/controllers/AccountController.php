<?php
class AccountController extends BaseController{

	public function getCreate(){
		return Response::view('register');
	}
	public function postCreate(){
	
	}
}