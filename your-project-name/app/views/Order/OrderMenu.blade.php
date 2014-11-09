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
            <input type="name" class="form-control" name="Name" placeholder="Name">
          </div>
           <div class="form-group">
            <label for="examplename">Phone number</label>
            <input type="name" class="form-control" name="phoneNumber" placeholder="Name">
          </div>
          <div>
            <label for="examplename">ที่ต้องการจัดส่ง</label>
            <textarea class="form-control" rows="3" name="order"></textarea>
          </div>
          <p>แสดงราคาที่จะต้องจ่าย</p>
         <p><a href="{{URL::route('home')}}" type="Order2" class="btn btn-default navbar-btn">Order</a></p>
      </div>
    </div>
@stop