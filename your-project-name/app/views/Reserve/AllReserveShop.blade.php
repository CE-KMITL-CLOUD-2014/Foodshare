@extends("layout.main")
@section("content")
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
@stop