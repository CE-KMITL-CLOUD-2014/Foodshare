@extends("layout.main")
@section("content")
    <form role="form" class="form-order" action="{{ URL::route('Order-post') }}" method="post">
       <div class="container-fluid">
          <h2>Information to order</h2>
          <p></p>
            <div class="form-group">
              <label for="examplename">Name</label>
              <input type="name" class="form-control" name="name" placeholder="Name" required>
              @if($errors->has('name'))
              {{$errors->first('name')}}
              @endif
            </div>
            <div class="form-group">
              <label for="examplePhonenumber">Phone Number</label>
              <input type="phonenumber" class="form-control" name="phonenumber" placeholder="Phone number" required>
              @if($errors->has('phonenumber'))
              {{$errors->first('phonenumber')}}
              @endif
            </div>
            <div class="form-group">
              <label for="buildingtype">building type</label>
              <input type="buildingtype" class="form-control" name="buildingtype" placeholder="buildingtype" required>
              @if($errors->has('buildingtype'))
              {{$errors->first('buildingtype')}}
              @endif
            </div>
            <div class="form-group">
              <label for="HouseNumber">No.</label>
              <input type="housenumber" class="form-control" name="housenumber" placeholder="No." required>
            @if($errors->has('housenumber'))
              {{$errors->first('housenumber')}}
              @endif
            </div>
            <div class="form-group">
              <label for="Road">Road</label>
              <input type="road" class="form-control" name="road" placeholder="Road" required>
            @if($errors->has('road'))
              {{$errors->first('road')}}
              @endif
            </div>
            <div class="form-group">
              <label for="street">street</label>
              <input type="street" class="form-control" name="street" placeholder="street" required>
            @if($errors->has('street'))
              {{$errors->first('street')}}
              @endif
            </div>
            <div class="form-group">
              <label for="city">city</label>
              <input type="city" class="form-control" name="city" placeholder="city" required>
            @if($errors->has('city'))
              {{$errors->first('city')}}
              @endif
            </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
              {{ Form::token() }}
        </form>
@stop