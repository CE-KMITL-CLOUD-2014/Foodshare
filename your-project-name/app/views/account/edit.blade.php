@extends("layout.main")
@section("content")
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/edit.css') }}">
    <div class="container">
	<center>
		@if(Session::has('global'))
			<p> {{ Session::get('global')}} </p>
			</center>
		@endif
	</center>
      <form class="form-signin" action="{{ URL::route('edit-post') }}" method="post" role="form">
        <h2 class="form-signin-heading">Edit account</h2>
        <input type="password" name="oldpassword" class="form-control" placeholder="OldPassword" required>
		@if($errors->has('oldpassword'))
			{{ $errors->first('oldpassword') }}
		@endif
	    <input type="password" name="newpassword" class="form-control" placeholder="NewPassword" required>
		@if($errors->has('newpassword'))
			{{ $errors->first('newpassword') }}
		@endif
		<input type="password" name="password_again" class="form-control" placeholder="ConfirmPassword" required>	
        <button  type="submit" class="btn btn-default">Change</button>
      </form>
	</div>
    </div> <!-- /container -->


@stop