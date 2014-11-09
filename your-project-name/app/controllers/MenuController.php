<?php

class MenuController extends BaseController {

	public function getMenu(){
		return View::make('Menu.MenuShow');	
	}
	public function addMenu(){
		return View::make('Order.setOrder');
	}
	public function setMenu(){
		//retrieve image and set parameter image
		$image=Input::file('uploadimage');
		$img_path=$image->getRealPath();
		$filename=$image->getClientOriginalName();
		$extension = $image->getClientOriginalExtension();
		
		if(Image::make($image->getRealPath())->resize(75,75)->save(public_path('img/'.$filename)))
		{	
				$newpath = public_path('img/'.$filename);
				$img_data = file_get_contents($newpath);
				$type = pathinfo($newpath, PATHINFO_EXTENSION);
				$base64 = base64_encode($img_data);
		}
		//retrieve other information
		$namemenu = Input::get('name');
		$price = Input::get('price');
		$Nameshop = Session::get('nameshop');
		
		

		$addOrder = DB::insert('insert into menu (Namemenu,Price,Nameshop,Image) values (?,?,?,?)',array($namemenu,$price,$Nameshop,$base64));

		if($addOrder){
			File::delete($newpath);
			return Redirect::route('shop-user',$Nameshop);
		}
	}
}