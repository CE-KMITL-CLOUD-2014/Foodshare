<?php

class MenuController extends BaseController {

	public function getMenu(){
		return View::make('Menu.MenuShow');	
	}
	public function addMenu(){
		return View::make('Order.setOrder');
	}
	public function setMenu($name){
		$ID = Session::get('name');
		$namemenu = Input::get('name');
		$price = Input::get('price');
		$Image = Input::get('detail');
		$Nameshop = DB::select('select * from shop where Nameshop = ?', array($name));

		$addOrder = DB::insert('insert into Ordermenu (ID,namemenu,Price,Image,Nameshop) values (?,?,?)',array($ID,$namemenu,$price,$Image,$Nameshop));

		if($addOrder){
			return Redirect::route('Order.setOrder');
		}
	}
}