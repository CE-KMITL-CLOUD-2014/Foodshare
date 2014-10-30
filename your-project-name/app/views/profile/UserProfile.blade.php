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
            <a href="{{URL::route('Order-show')}}" type="Order1" class="btn btn-default navbar-btn">Order</a>
                <!--<button type="Order" class="btn btn-default"><a href="{{ URL::route('Order-get') }}">Order</a></button> -->
            <a href="{{URL::route('Reserve-show')}}" type="Reserve1" class="btn btn-primary navbar-btn">Reserve</a>
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
      <div class="row">
        <div class="col-xs-4 col-md-2">
          <img src="#" >
          <p>This layout to show your profile picture</p>
        </div>
        <div class="col-xs-4 col-md-5">
          <button type="FoodShare" class="btn btn-primary">FoodShare</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies sapien quam, id tincidunt libero maximus a. Mauris dapibus sed ex ut ornare. Duis varius arcu nec leo fermentum, sit amet convallis orci sollicitudin. Proin pellentesque, massa id tristique tempor, risus mi aliquet risus, at convallis nibh sapien id lacus. Sed nec sem dignissim, malesuada justo eget, tincidunt dolor. Curabitur sed leo efficitur, varius enim id, venenatis velit. Nullam vehicula ut ipsum viverra suscipit. Donec justo ipsum, volutpat sit amet feugiat eu, elementum in orci. Aenean ut ex sit amet nisi egestas interdum. Vestibulum ultrices molestie tortor in tempor. Nullam tincidunt venenatis libero, nec sodales tellus finibus sit amet. Nullam at felis sed sapien fringilla rhoncus id venenatis odio.</p>
        </div>
        <div class="col-xs-4 col-md-5">
          <img src="#" >
          <button type="Menushare" class="btn btn-primary">MenuShare</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies sapien quam, id tincidunt libero maximus a. Mauris dapibus sed ex ut ornare. Duis varius arcu nec leo fermentum, sit amet convallis orci sollicitudin. Proin pellentesque, massa id tristique tempor, risus mi aliquet risus, at convallis nibh sapien id lacus. Sed nec sem dignissim, malesuada justo eget, tincidunt dolor. Curabitur sed leo efficitur, varius enim id, venenatis velit. Nullam vehicula ut ipsum viverra suscipit. Donec justo ipsum, volutpat sit amet feugiat eu, elementum in orci. Aenean ut ex sit amet nisi egestas interdum. Vestibulum ultrices molestie tortor in tempor. Nullam tincidunt venenatis libero, nec sodales tellus finibus sit amet. Nullam at felis sed sapien fringilla rhoncus id venenatis odio.</p>
        </div>
      </div>
    </div>
  
</body>
</html>