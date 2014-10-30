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


    <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/order.css') }}">

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
            <a href="{{URL::route('Reserve-show')}}" type="Reserve" class="btn btn-primary navbar-btn">Reserve</a>
                <button type="Review" class="btn btn-default">Review</button>
                <button type="Shop" class="btn btn-default">Shop</button>
            <form class="navbar-form navbar-right" role="search">
                <button type="Edit" class="btn btn-default">Edit</button>
                <button type="logout" class="btn btn-default">Logout</button>
            </form>
        </div><!-- /.container-fluid -->
        </div>
      </nav>
  </head>
    <form role="form" class="form-order">
       <div class="container-fluid">
          <h2>Information to order</h2>
          <p></p>
            <div class="form-group">
                  <label for="examplename">Name</label>
                  <input type="email" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="examplePhonenumber">Phone Number</label>
                  <input type="Phone number" class="form-control" id="Phone number" placeholder="Phone number">
                </div>
              <div class="checkbox">
                  <label>
                    <input type="checkbox"> Apartment
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Home
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Office
                  </label>
                </div>
                <div class="form-group">
                  <label for="House Number">No.</label>
                  <input type="House Number" class="form-control" id="HoseNumber" placeholder="No.">
                </div>

                <div class="form-group">
                  <label for="Road">Road</label>
                  <input type="Road" class="form-control" id="Road" placeholder="Road">
                </div>

                <div class="form-group">
                  <label for="street">street</label>
                  <input type="street" class="form-control" id="street" placeholder="street">
                </div>

                <div class="form-group">
                  <label for="city">city</label>
                  <input type="city" class="form-control" id="city" placeholder="city">
                </div>

                <a href="{{URL::route('home')}}" type="Order3" class="btn btn-default">Submit</a>
        </form>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>