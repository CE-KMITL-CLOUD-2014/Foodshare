@extends("layout.main")
@section("content")
    <!--<div class="container-fluid">
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
				<a href="{{ URL::route('profile-user',$comment->Email)}}">{{ $comment->Email }} </a>:{{ $comment->Comment }} </br>
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
    </div>-->
    <div class="col-md-12">
    <div style="margin-left:10px;">
      <div class="col-md-3">
        <div class="row" >
          <div class="col-md-12 well">
            <div class="col-md-3 ">
              <img width="80" height="80" alt="star" src="data:image/{{{$user->extensionImage}}};base64,{{{$user->profileImage}}}" />
            </div>
            <div class="col-md-6 col-md-offset-1"><br><br>
             <p>{{$user->Email}}  </p> 

           </div>
         </div>
       </div>

       <div class="row" >
        <div class="col-md-12 well">
         <h4>comment</h4>
         @foreach ($comments as $comment)
         <a href="{{ URL::route('profile-user',$comment->Email)}}">{{ $comment->Email }} </a>:{{ $comment->Comment }} </br>
         @endforeach <br>
         <form role="form" class="form-order" action="{{ URL::route('Comment-set') }}" method="post" enctype="multipart/form-data">
          <textarea class="form-control" rows="3" name="comment"></textarea>
          @if($errors->has('comment'))
          {{$errors->first('comment')}}
          @endif
          <br>
          <button type="Menushare" class="btn btn-primary">Comment</button><hr>
        </form>

      </div>
    </div> 

    <div class="row" >
        <div class="col-md-12 well">
         
         <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">My Shop</h2>
  </div>
  <div class="panel-body">
                 @if ($shops!=null)
          @foreach ($shops as $shop)
          <a href="{{ URL::route('shop-user',$shop->Nameshop)}}" role="button">{{ $shop->Nameshop}}</a>
          @endforeach
        @else 
        @endif
  </div>
</div>
    </div>
    </div> 
  </div>
  <div class="col-md-9" >

    <div class="row" style="margin-left:5px;">
   <div class="col-md-12 well" >
    <div class="col-md-6" style="background-color:#b3b2de">
       <br>
          <h3>Shared Your Food</h3><br>
           <div class="edit-text"></div>
          <div class="col-md-12">
            <form action="http://foodshare3.azurewebsites.net/blob" method="post" enctype="multipart/form-data">
              <div class="form-group">
              	<input type="file" name="uploadimage">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
            <br>
      <br><br><br><br><br><br><br><br>
   </div>
<div class="col-md-7"><br>
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
 </div>
 </div> 
@stop