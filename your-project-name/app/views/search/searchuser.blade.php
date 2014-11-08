@extends("layout.main")
@section("content")
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/edit.css') }}">
    <div class="container">
	
      <form class="form-signin" action="{{ URL::route('searchuser-post') }}" method="post" role="form">
        <h2 class="form-signin-heading">Search user</h2>
        <input type="text" name="Email" class="form-control" placeholder="User Email" required>
		
        <button  type="submit" class="btn btn-default">Search</button>
      </form>
	
    </div> <!-- /container -->


@stop