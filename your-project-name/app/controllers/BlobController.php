<?php

class BlobController extends BaseController {
	
	public function createblob(){
	
		$file1=public_path('sdkazure\vendor\autoload.php');
		$file2 = public_path('sdkazure\vendor\microsoft\windowsazure\WindowsAzure\WindowsAzure.php');
		File::requireOnce($file1);
		File::requireOnce($file2);
		
		
		// Create Connection String
$connectionString = "DefaultEndpointsProtocol=http;AccountName=foodshare;AccountKey=rsolzaz1eoRyLwUcIOD3FH6PpiVSWs4GRXtf5NQhgHPa++tazwLJNjhLMoBEOVRVmzLSBOPmOxhxfdE411D04A==";

// Create blob REST proxy.
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);

$createContainerOptions = new CreateContainerOptions(); 

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


$blobRestProxy  = null;
		
	}
	
}