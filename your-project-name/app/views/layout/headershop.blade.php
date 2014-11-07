@section("headershop")
 <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collaspse" data-toggle="collaspe" data-target="#bs-example-navbar-collaspe-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <form class="navbar-form navbar-left" role="search">
               <a class="navbar-brand">Shop Profile</a>
               <a href="{{URL::route('Order-set')}}" type="Order1" class="btn btn-default navbar-btn">Edit Order</a>
                <!--<button type="Order" class="btn btn-default"><a href="{{ URL::route('Order-get') }}">Order</a></button> -->
               <a href="{{URL::route('Reserve-show')}}" type="Reserve1" class="btn btn-primary navbar-btn">Edit Reserve</a>
               <a href="{{URL::route('Review-get')}}" type="Review" class="btn btn-success navbar-btn">Review</a>
               <a href="{{URL::route('Menu-get')}}" type="Menu" class="btn btn-danger navbar-btn">Edit Shop</a>
               <a href="{{URL::route('Menu-get')}}" type="Menu" class="btn btn-danger navbar-btn">Notification</a>
            </form>
            <form class="navbar-form navbar-right" role="search">
              <a href="{{URL::to('/centraledit')}}" type="Edit" class="btn btn-info navbar-btn">Edit</a>
              <a href="{{URL::route('signout')}}" type="Logout" class="btn btn-warning navbar-btn">Logout</a>
            </form>
        </div><!-- /.container-fluid -->
        </div>
      </nav>
    
@show