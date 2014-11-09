@section("header")
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
               <a href="{{URL::route('profile-user',Session::get('name'))}}"	class="btn btn-warning">Home</a>
               <a href="{{URL::route('Menu-get')}}" type="Menu" class="btn btn-danger navbar-btn">Shop</a>
			   <a href="{{URL::to('/centralsearch')}}" type="Menu" class="btn btn-danger navbar-btn">Search</a>
            </form>
            <form class="navbar-form navbar-right" role="search">
              <a href="{{URL::to('/centraledit')}}" type="Edit" class="btn btn-info navbar-btn">Edit</a>
              <a href="{{URL::route('signout')}}" type="Logout" class="btn btn-warning navbar-btn">Logout</a>
            </form>
        </div><!-- /.container-fluid -->
        </div>
      </nav>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
@show