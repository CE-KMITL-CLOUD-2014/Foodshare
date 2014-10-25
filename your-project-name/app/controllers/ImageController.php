<?php

class ImageController extends BaseController {
	public function home(){
	
		return View::make('image');
	}
	
	public function uploadimage(){
		$input=Input::all();
		$rules=array('uploadimage' => 'required|image');
	      $validator = Validator::make($input, $rules);
		if ($validator->fails()){
			return Redirect::route('image-get')->withErrors($validator);
		}else{
		$image=Input::file('uploadimage');
		//$upload=DB::insert('insert into Table1 (ID, imagecolumn) values (?, ?)', array(1, $image));
		//$filename =  
		
		var_dump($image->getRealPath());
		var_dump($image->getClientOriginalName());
		//var_dump(get_class_methods(Input::file('uploadimage')));
		Image::make($image->getRealPath());
		}
		/*if($upload){
			echo "upload success";
		}else {
			echo "fail to upload" ;
		}*/
	} 			
	
}