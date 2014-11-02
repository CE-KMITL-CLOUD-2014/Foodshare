<?php

class EmailController extends BaseController {
	public function home() {
	
		Mail::send('emails.auth.test', array('name' => 'Alex' ), function ($message) {
			$message->to('testfoodshareshare@gmail.com','Alex Garrett')->subject('Test email');
		});
		
		return 'success';
	}
}