<?php

class ImageController extends BaseController {
	public function home(){
	
		return View::make('image.image');
	}
	
	public function uploadimage(){
		/*This function is for upload image to the Profile Picture*/
		$input=Input::all();
		$rules=array('uploadimage' => 'required|image');
	    $validator = Validator::make($input, $rules);     			//check condition
		if ($validator->fails()){      								//if fail redirect to form
			return Redirect::route('image-get')->withErrors($validator);
		}else{
			$image=Input::file('uploadimage');
			$img_path=$image->getRealPath();
			$filename=$image->getClientOriginalName();
		    $extension = $image->getClientOriginalExtension();
			if(Image::make($image->getRealPath())->resize(150,150)->save(public_path('img/'.$filename)))
			{	
				$newpath = public_path('img/'.$filename);
				$img_data = file_get_contents($newpath);
				$type = pathinfo($newpath, PATHINFO_EXTENSION);
				$base64 = base64_encode($img_data);
				$email = Session::get('name');
				$user = User::find($email);
				$user->profileImage=$base64;
				$user->extensionImage = $extension;
				$user->save();
				File::delete($newpath);
				return Redirect::route('image-get')
					->with('global','successfully');
			}
			else{
				return 'fail';
			}
		}	
	 }	 			
}