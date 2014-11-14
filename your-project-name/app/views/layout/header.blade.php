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
                <li><a href="{{URL::route('profile-user',Session::get('name'))}}">Home</a></li>
                <li><a href="{{URL::route('Menu-get')}}" type="Menu" >Shop</a></li>
                <li><a href="{{URL::to('/centralsearch')}}" type="Search">Search</a></li>
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
 <!--<nav class="navbar navbar-inverse" role="navigation">
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
               <a href="{{URL::route('profile-user',Session::get('name'))}}"	class="btn btn-warning">Home</a>
               <a href="{{URL::route('Menu-get')}}" type="Menu" class="btn btn-danger navbar-btn">Shop</a>
			   <a href="{{URL::to('/centralsearch')}}" type="Menu" class="btn btn-danger navbar-btn">Search</a>
            </form>
            <form class="navbar-form navbar-right" role="search">
              <a href="{{URL::to('/centraledit')}}" type="Edit" class="btn btn-info navbar-btn">Edit</a>
              <a href="{{URL::route('signout')}}" type="Logout" class="btn btn-warning navbar-btn">Logout</a>
            </form>
        </div> /.container-fluid 
        </div>
      </nav>
   IE10 viewport hack for Surface/desktop Windows 8 bug -->
@show