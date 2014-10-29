<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

   <!--Jquery-->
   <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">


    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/register.css') }}">


    

   
  </head>

  <body>
  
	
    <div class="container">
		
      <form class="form-signin" action="{{ URL::route('register-post') }} "method="post" role="form">
        <h2 class="form-signin-heading">Create an account</h2>
        <input type="email" name="email" class="form-control" {{(Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }} placeholder="Email address" required autofocus>
       @if($errors->has('email'))
			{{$errors->first('email')}}
	   @endif
	    <input type="password" name="password" class="form-control" placeholder="Password" required>
		 @if($errors->has('password'))
			{{$errors->first('password')}}
	   @endif
		<input type="password" name="password_again" class="form-control" placeholder="ConfirmPassword" required>
		@if($errors->has('password_again'))
			{{$errors->first('password_again')}}
	    @endif
				
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
		{{ Form::token() }}
      </form>
	</div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>