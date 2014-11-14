@section("headershop")
<!-- <nav class="navbar navbar-inverse" role="navigation">
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
        </div><!-- /.container-fluid 
        </div>
      </nav>-->

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand">Food Shop </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                @if(Session::get('name')==Session::get('emailshop'))
                <li class="active"><a href="{{URL::route('Menu-add')}}" type="MenuAdd">Add Menu</a></li>
                <li class="active"><a href="{{URL::route('Reserve-set')}}" type="SetReserve">set Reserve</a></li>
                @endif
                <li><a href="{{URL::route('Order-menu')}}" type="Order1">Order</a></li>
                <li><a href="{{URL::route('Reserve-get')}}" type="Reserve1">Reserve</a></li>
                <li><a href="{{URL::route('Review-get')}}" type="Review">Review</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{URL::route('home')}}" type="home">home</a><li>
                    <li><a href="{{URL::to('/centraledit')}}" type="Edit">Edit</a></li>
                    <li><a href="{{URL::route('signout')}}" type="Logout">Logout</a></li>
                  </ul>
              </ul>
            </div>
          </div>
        </nav>
    
@show