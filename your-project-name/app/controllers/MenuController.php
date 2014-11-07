<?php

class MenuController extends BaseController {

	public function getMenu(){
		return View::make('Menu.MenuShow');	
	}
	public function addMenu(){
		return View::make('Order.setOrder');
	}
	public function setMenu(){
		$name = Input::get('name');
		$price = Input::get('price');
		$detail = Input::get('detail');

		$addOrder = DB::insert('insert into Ordermenu (name,price,detail) values (?,?,?)',array($name,$price,$detail));

		if($addOrder){
			return Redirect::route('Order.setOrder');
		}
	}
	}
}