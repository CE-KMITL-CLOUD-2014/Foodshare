<?php

class BlobController extends BaseController {
	public function home(){
		return View::make('image.blob');
	}
	public function createblob(){
	
		$input=Input::all();
		$rules=array('uploadimage' => 'required|image');
	    $validator = Validator::make($input, $rules);     //check condition
		if ($validator->fails()){      								//if fail redirect to form
			return Redirect::route('blob-get')->withErrors($validator);
		}else{
			$image=Input::file('uploadimage');
			$img_path=$image->getRealPath();
			$filename=$image->getClientOriginalName();
		    $extension = $image->getClientOriginalExtension();
			if(Image::make($image->getRealPath())->resize(300,300)->save(public_path('img/'.$filename))){
			
				$newpath = public_path('img/'.$filename);
				$img_data = file_get_contents($newpath);
			
				$file1=public_path('sdkazure\vendor\autoload.php');
				$file2 = public_path('sdkazure\vendor\microsoft\windowsazure\WindowsAzure\WindowsAzure.php');
				File::requireOnce($file1);
				File::requireOnce($file2);
			
				$container_name=Session::get('username');
				
						// Create Connection String
				$connectionString = "DefaultEndpointsProtocol=http;AccountName=foodshare;AccountKey=rsolzaz1eoRyLwUcIOD3FH6PpiVSWs4GRXtf5NQhgHPa++tazwLJNjhLMoBEOVRVmzLSBOPmOxhxfdE411D04A==";

				// Create blob REST proxy.
				$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);

				try {
					//Upload blob
					$blobRestProxy->createBlockBlob($container_name, $filename, $img_data);  //cintainer name blob name  content
					File::delete($newpath); //delete image in web
					return Redirect::route('home');
				}
				catch(ServiceException $e){
					// Handle exception based on error codes and messages.
					// Error codes and messages are here: 
					// http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
					$code = $e->getCode();
					$error_message = $e->getMessage();
					echo $code.": ".$error_message."<br />";
				}
			}else{
				$blobRestProxy  = null;
			}
		}
	}
}