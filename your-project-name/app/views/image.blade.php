<!DOCTYPE html>
<html>
<head>
<title>uploadimage</title>
</head>
<body>

<form action="{{ URL::route('image-post') }}" method="post" enctype="multipart/form-data">
  <input type="file" name="uploadimage"><br>
  <input type="submit" value="Upload">
  @if($errors->has('uploadimage'))
			{{$errors->first('uploadimage')}}
  @endif
  
 
  
</form>


</body>
</html>