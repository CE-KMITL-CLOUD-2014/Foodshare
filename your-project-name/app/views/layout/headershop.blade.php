@section("headershop")
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
                <li class="active"><a href="{{URL::route('home')}}" type="home">home</a><li>
                <li><a href="{{URL::route('Order-menu')}}" type="Order1">Order</a></li>
                <li><a href="{{URL::route('Reserve-get')}}" type="Reserve1">Reserve</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{URL::to('/centraledit')}}" type="Edit">Edit</a></li>
                    <li><a href="{{URL::route('signout')}}" type="Logout">Logout</a></li>
                  </ul>
              </ul>
            </div>
          </div>
        </nav>
    
@show