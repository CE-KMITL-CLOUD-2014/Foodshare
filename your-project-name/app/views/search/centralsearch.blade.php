@extends("layout.main")
@section("content")
  <div class="container">
    <div class="container-fluid">
      <h2>Chose the shop menu</h1>
      <div class="row">
        <div class="col-xs-4 col-md-12">
          <p>Show All shop</p>
          <div class="form-group">
            <p><a href="{{ URL::route('searchuser-get') }}" class="btn btn-primary" role="button">Search User</a></p>
			<p><a href="{{ URL::route('searchshop-get') }}" class="btn btn-primary" role="button">Search Shop</a></p>
          </div>
      </div>
    </div>
  </div>
@stop