@extends("layout.main")
@section("content")
    <div class="container-fluid">
      <h1>Show All Order Shop</h1>
      <div class="row">
        <div class="col-xs-4 col-md-12">
          <p>Show All the Pic Shop that have a Food to Order</p>
         <a href="{{URL::route('Order-menu')}}" type="Order" class="btn btn-default navbar-btn">Order</a>
      </div>
    </div>
@stop