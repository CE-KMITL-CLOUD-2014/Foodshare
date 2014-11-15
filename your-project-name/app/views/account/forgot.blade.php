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
		
      <form action="{{ URL::route('forgot-post') }} "method="post" role="form">
			<div class="field">
				<input type="email" name="email" class="form-control" {{(Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }} placeholder="Email address" required autofocus>
				@if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
			</div>
			<input type="submit" value="Recover" >
			{{ Form::token() }}
      </form>
	</div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>