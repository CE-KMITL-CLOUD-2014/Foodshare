@extends("layout.main")
@section("content")
<center>

		@if(Session::has('global'))
			<p> {{ Session::get('global')}} </p>
			</center>
		@endif
</center>	
<center>
<form action="{{ URL::route('image-post') }}" method="post" enctype="multipart/form-data">
  <input type="file" name="uploadimage"><br>
  <input type="submit" value="Upload">
  @if($errors->has('uploadimage'))
			{{$errors->first('uploadimage')}}
  @endif
  
</form>
</center>
@stop