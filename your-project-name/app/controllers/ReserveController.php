<?php

class ReserveController extends BaseController {

	public function getReserve(){
		return View::make('Form.ReserveForm');	
	}
	public function setOrder(){
	return View::make('Form.SetOrder');
	}
	public function showReserve(){
		return View::make('Reserve.AllReserveShop');
	}
	public function statusReserve(){
		return View::make('Form.StatusReserve');
	}
			
			
}