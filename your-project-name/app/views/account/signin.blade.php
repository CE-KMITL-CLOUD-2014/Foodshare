<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">


    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/signin.css') }}">


    

   
  </head>

  <body>
	
    <div class="container">
@if(Session::has('global'))
		<p> {{ Session::get('global')}} </p>
@endif
      <form class="form-signin" action="{{ URL::route('signin-post') }}" method="post" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" name="email" class="form-control" {{(Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }} placeholder="Email address" required autofocus>
		@if($errors->has('email'))
			{{ $errors->first('email') }}
		@endif
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        @if($errors->has('password'))
			{{$errors->first('password') }}
		@endif
		<label class="checkbox">
          <input type="checkbox" name="remember" > Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		{{Form::token()}}
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>