@extends("layout.main")
@section("content")
    <form role="form" class="form-order" action="{{ URL::route('Order-post') }}" method="post">
       <div class="container-fluid">
          <h2>Information to order</h2>
          <p></p>
            <div class="form-group">
              <label for="examplename">Name</label>
              <input type="name" class="form-control" id="name" placeholder="Name">
              @if($errors->has('name'))
              {{$errors->first('name')}}
              @endif
            </div>
            <div class="form-group">
              <label for="examplePhonenumber">Phone Number</label>
              <input type="phonenumber" class="form-control" id="phonenumber" placeholder="Phone number">
              @if($errors->has('phonenumber'))
              {{$errors->first('phonenumber')}}
              @endif
            </div>
            <div class="form-group">
              <label for="buildingtype">building type</label>
              <input type="buildingtype" class="form-control" id="buildingtype" placeholder="buildingtype">
              @if($errors->has('buildingtype'))
              {{$errors->first('buildingtype')}}
              @endif
            </div>
            <div class="form-group">
              <label for="HouseNumber">No.</label>
              <input type="houseNumber" class="form-control" id="hoseNumber" placeholder="No.">
            @if($errors->has('hoseNumber'))
              {{$errors->first('hoseNumber')}}
              @endif
            </div>
            <div class="form-group">
              <label for="Road">Road</label>
              <input type="road" class="form-control" id="road" placeholder="Road">
            @if($errors->has('road'))
              {{$errors->first('road')}}
              @endif
            </div>
            <div class="form-group">
              <label for="street">street</label>
              <input type="street" class="form-control" id="street" placeholder="street">
            @if($errors->has('street'))
              {{$errors->first('street')}}
              @endif
            </div>
            <div class="form-group">
              <label for="city">city</label>
              <input type="city" class="form-control" id="city" placeholder="city">
            @if($errors->has('city'))
              {{$errors->first('city')}}
              @endif
            </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
              {{ Form::token() }}
        </form>
@stop