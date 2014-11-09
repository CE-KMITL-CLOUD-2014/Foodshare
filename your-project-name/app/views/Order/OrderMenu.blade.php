@extends("layout.mainshop")
@section("content")
    <div class="container-fluid">
      <h1>Show All Order Shop</h1>
      <div class="row">
        <div class="col-xs-4 col-md-12">
          <p>Show All the Pic Food that have a Food to Order</p>
          <p>Price :</p>
          <p>Detail : </p>
          <div class="form-group">
            <img src="#">
            <label for="examplename">Name</label>
            <input type="email" class="form-control" id="Name" placeholder="Name">
          </div>
         <p><a href="{{URL::route('Order-get')}}" type="Order2" class="btn btn-default navbar-btn">Order</a></p>
      </div>
    </div>
@stop