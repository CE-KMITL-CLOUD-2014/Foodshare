@extends("layout.main")
@section("content")
    <form role="form" class="form-order">
       <div class="container-fluid">
          <h2>Information to order</h2>
          <p></p>
            <div class="form-group">
                  <label for="examplename">Name</label>
                  <input type="email" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="examplePhonenumber">Phone Number</label>
                  <input type="Phone number" class="form-control" id="Phone number" placeholder="Phone number">
                </div>
              <div class="checkbox">
                  <label>
                    <input type="checkbox"> Apartment
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Home
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Office
                  </label>
                </div>
                <div class="form-group">
                  <label for="House Number">No.</label>
                  <input type="House Number" class="form-control" id="HoseNumber" placeholder="No.">
                </div>

                <div class="form-group">
                  <label for="Road">Road</label>
                  <input type="Road" class="form-control" id="Road" placeholder="Road">
                </div>

                <div class="form-group">
                  <label for="street">street</label>
                  <input type="street" class="form-control" id="street" placeholder="street">
                </div>

                <div class="form-group">
                  <label for="city">city</label>
                  <input type="city" class="form-control" id="city" placeholder="city">
                </div>

                <a href="{{URL::route('home')}}" type="Order3" class="btn btn-default">Submit</a>
        </form>
@stop