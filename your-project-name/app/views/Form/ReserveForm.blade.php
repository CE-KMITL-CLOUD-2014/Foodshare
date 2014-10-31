@extends("layout.main")
@section("content")
    <form role="form" class="form-order">
       <div class="container-fluid">
          <h2 class="form-order-heading">Information to Reserve</h2>
          <p></p>
            <div class="form-group">
              <label for="examplename">Name</label>
              <input type="email" class="form-control" id="Name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="examplePhonenumber">Phone Number</label>
              <input type="Phonenum" class="form-control" id="Phonenum" placeholder="Phonenum">
            </div>
            <div class="form-group">
              <label for="NumPeople">จำนวนคน</label>
              <input type="Numpeople" class="form-control" id="Numpeople" placeholder="Numpeople">
            </div>
                <button type="submit" class="btn btn-default">Submit</button>
        </form>
@stop