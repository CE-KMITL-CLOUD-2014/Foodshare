<?php

class MenuController extends BaseController {

	public function getMenu(){
		return View::make('Menu.MenuShow');	
	}
	public function addMenu(){
		return View::make('Order.setOrder');
	}
	public function setMenu(){
		$namemenu = Input::get('name');
		$price = Input::get('price');
		//Image = Input::get('detail');
		$Nameshop = Session::get('nameshop');

		$addOrder = DB::insert('insert into menu (Namemenu,Price,Nameshop) values (?,?,?)',array($namemenu,$price,$Nameshop));

		if($addOrder){
			return Redirect::route('Menu-add');
		}
	}
}