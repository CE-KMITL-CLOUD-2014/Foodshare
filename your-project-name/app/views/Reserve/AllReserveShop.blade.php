<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

   

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">


    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/profile.css') }}">

  </head>
<body>
  <head>
		  <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collaspse" data-toggle="collaspe" data-target="#bs-example-navbar-collaspe-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Profile</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <a href="{{URL::route('Order-show')}}" type="Order" class="btn btn-default navbar-btn">Order</a>
                <!--<button type="Order" class="btn btn-default"><a href="{{ URL::route('Order-get') }}">Order</a></button> -->
            <a href="{{URL::route('Reserve-get')}}" type="Reserve" class="btn btn-primary navbar-btn">Reserve</a>
                <button type="Review" class="btn btn-default">Review</button>
                <button type="Shop" class="btn btn-default">Shop</button>
            <form class="navbar-form navbar-right" role="search">
                <button type="Edit" class="btn btn-default">Edit</button>
                <button type="logout" class="btn btn-default">Logout</button>
            </form>
        </div><!-- /.container-fluid -->
        </div>
      </nav>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </head>
    <div class="container-fluid">
      <h1>Show All Reserve Shop</h1>
      <div class="row">
        <div class="container">
        <div class="col-xs-4 col-md-12">
          <p>Show All the Pic Shop that can Reserve</p>
         <a href="{{URL::route('Reserve-get')}}" type="Reserve" class="btn btn-default navbar-btn">Reserve</a>
       </div>
      </div>
    </div>
  
</body>
</html>