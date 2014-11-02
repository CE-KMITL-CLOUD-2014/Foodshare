@extends("layout.main")
@section("content")
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/edit.css') }}">
    <div class="container">
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Edit account</h2>
        <input type="password" name="oldpassword" class="form-control" placeholder="OldPassword" required>
	    <input type="password" name="newpassword" class="form-control" placeholder="NewPassword" required>
		<input type="password" name="password_again" class="form-control" placeholder="ConfirmPassword" required>	
        <button class="btn btn-lg btn-primary btn-block" type="submit">Change</button>
      </form>
	</div>
    </div> <!-- /container -->


@stop