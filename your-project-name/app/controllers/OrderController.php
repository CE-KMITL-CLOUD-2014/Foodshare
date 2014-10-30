<?php

class OrderController extends BaseController {

	public function getOrder(){
		return View::make('Order.OrderForm');	
	}
	public function setOrder(){
		return View::make('Form.SetOrder');
	}
	public function showOrder(){
		return View::make('Order.AllOrderShop');
	}
	public function menuOrder(){
		return View::make('Order.OrderMenu');
	}
			
}