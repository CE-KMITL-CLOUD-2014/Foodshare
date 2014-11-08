@extends("layout.main")
@section("content")
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/edit.css') }}">
    <div class="container">
		<center>
		<a href="{{ URL::route('profile-user',$user->Email)}}">{{$user->Email}}</a></br>
		</center>
    </div> <!-- /container -->


@stop