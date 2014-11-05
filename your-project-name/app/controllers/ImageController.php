<?php

class ImageController extends BaseController {
	public function home(){
	
		return View::make('image.image');
	}
	
	public function uploadimage(){
		$input=Input::all();
		$rules=array('uploadimage' => 'required|image');
	    $validator = Validator::make($input, $rules);     //check condition
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
	
	public function imageblob(){
	
	    $input=Input::all();
	    $rules=array('uploadimage' => 'required|image');
	    $validator = Validator::make($input, $rules);   //check condition
		if ($validator->fails()){      								//if fail redirect to form
			return Redirect::route('image-get')->withErrors($validator);
		}else{
		
		}
	
		$file='sdkazure\vendor\autoload.php';
		File::requireOnce($file);
		File::requireOnce('sdkazure\vendor\microsoft\windowsazure\WindowsAzure\WindowsAzure.php');
		
		
		// Create Connection String
		$connectionString = "DefaultEndpointsProtocol=http;AccountName=foodshare;AccountKey=rsolzaz1eoRyLwUcIOD3FH6PpiVSWs4GRXtf5NQhgHPa++tazwLJNjhLMoBEOVRVmzLSBOPmOxhxfdE411D04A==";
        
		// Create blob REST proxy.
		$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);

		/*$createContainerOptions = new CreateContainerOptions(); 

		$createContainerOptions->setPublicAccess(PublicAccessType::CONTAINER_AND_BLOBS);

		// Set container metadata
		$createContainerOptions->addMetaData("key1", "value1");
		$createContainerOptions->addMetaData("key2", "value2");

		try {
			// Create container.
			$blobRestProxy->createContainer("pictures", $createContainerOptions);

			$blobRestProxy->createContainer("movies", $createContainerOptions);

			echo "Container 'pictures' and 'movies' created. ";
		}
		catch(ServiceException $e){
			// Handle exception based on error codes and messages.
			// Error codes and messages are here: 
			// http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
			$code = $e->getCode();
			$error_message = $e->getMessage();
			echo $code.": ".$error_message."<br />";
		}


		$blobRestProxy  = null;*/
		
		$content = fopen($_FILES["uploadimage"]["tmp_name"], "r");
		$blob_name = $_FILES["uploadimage"]["name"];

		try {
			//Upload blob
			$blobRestProxy->createBlockBlob("pictures", $blob_name, $content);
			
			echo "'$blob_name' has been uploaded.";
		}
		catch(ServiceException $e){
			// Handle exception based on error codes and messages.
			// Error codes and messages are here: 
			// http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
			$code = $e->getCode();
			$error_message = $e->getMessage();
			echo $code.": ".$error_message."<br />";
		}


		$blobRestProxy  = null;
		
	}
	
}