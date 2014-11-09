@extends("layout.main")
@section("content")
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-4 col-md-2">
          <img width="150" height="150" alt="star" src="data:image/{{{$user->extensionImage}}};base64,{{{$user->profileImage}}}" />
          <p>{{$user->Email}}  </p>
			  @if ($shops!=null)
					@foreach ($shops as $shop)
						<a href="{{ URL::route('shop-user',$shop->Nameshop)}}">{{ $shop->Nameshop}}</a></br>
					@endforeach
			  @else 
			  @endif
        </div>
        <div class="col-xs-4 col-md-5">
          
			<?php
				
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
					// List blobs.
					$blob_list = $blobRestProxy->listBlobs($container_name);
					$blobs = $blob_list->getBlobs();

					echo "<table width=\"500\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
					foreach($blobs as $blob)
					{
						echo "
						  <tr>
							<td width=\"500\"><img src='".$blob->getUrl()."'></td>
						  </tr> ";
					}
					echo "</table>";
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
			?>
			<a class="btn btn-primary" href="{{ URL::route('blob-get')}}">Upload picture</a>
		</div>
		<div class="col-xs-4 col-md-5">
			@foreach ($comments as $comment)
					{{ $comment->Comment }} </br>
			@endforeach
			<form role="form" class="form-order" action="{{ URL::route('Comment-set') }}" method="post" enctype="multipart/form-data">
          		<textarea class="form-control" rows="3" name="comment"></textarea>
            	@if($errors->has('comment'))
              	{{$errors->first('comment')}}
              	@endif
              	<p></P>
			<button type="Menushare" class="btn btn-primary">Comment</button>
			</form>
        </div>
      </div>
    </div>
@stop