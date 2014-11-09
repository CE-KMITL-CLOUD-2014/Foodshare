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
				@if (Session::get('name') == Session::get('emailshop'))
				
               <a href="{{URL::route('Menu-add')}}" type="MenuAdd" class="btn btn-default navbar-btn">Add Menu</a>
               <a href="{{URL::route('Reserve-set')}}" type="SetReserve" class="btn btn-success navbar-btn">set Reserve</a>
				@endif
               <a href="{{URL::route('Order-menu')}}" type="Order1" class="btn btn-default navbar-btn">Order</a>
               <a href="{{URL::route('Reserve-get')}}" type="Reserve1" class="btn btn-primary navbar-btn">Reserve</a>
               <a href="{{URL::route('Review-get')}}" type="Review" class="btn btn-success navbar-btn">Review</a>

            </form>
            <form class="navbar-form navbar-right" role="search">
              <a href="{{URL::route('home')}}" type="home" class="btn btn-primary navbar-btn">home</a>
              <a href="{{URL::to('/centraledit')}}" type="Edit" class="btn btn-info navbar-btn">Edit</a>
              <a href="{{URL::route('signout')}}" type="Logout" class="btn btn-warning navbar-btn">Logout</a>
            </form>
        </div><!-- /.container-fluid -->
        </div>
      </nav>
    
@show