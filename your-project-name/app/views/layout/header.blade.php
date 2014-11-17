@section("header")

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand">Food share </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{URL::route('profile-user',Session::get('name'))}}">Home</a></li>
                <li><a href="{{URL::route('createshop-get')}}" type="Shop" >Create Shop</a></li>
                <li><a href="{{URL::to('/centralsearch')}}" type="Search">Search</a></li>
                <li><a href="{{URL::route('Shop-show')}}" type="Shop">Show all Shop</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{URL::route('home')}}" type="home">home</a><li>
                    <li><a href="{{URL::to('/centraledit')}}" type="Edit">Edit</a></li>
                    <li><a href="{{URL::route('signout')}}" type="Logout">Logout</a></li>
                  </ul>
              </ul>
               <form class="navbar-form navbar-right" role="form" action="{{ URL::route('searchuser-post') }}" method="post">
            <div class="form-group">
              <input type="text" name="Email" class="form-control" placeholder="Search By User Email" required>
            </div>
            <div class="form-group">
              
            </div>
            <button type="submit" class="btn btn-success">Search</button>
          </form>
            </div>
            </div>
          </div>
        </nav>
@show