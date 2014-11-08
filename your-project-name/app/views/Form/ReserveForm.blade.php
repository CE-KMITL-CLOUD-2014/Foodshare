@extends("layout.main")
@section("content")
    <form role="form" class="form-order" action="{{ URL::route('Reserve-post') }}" method="post">
       <div class="container-fluid">
          <h2 class="form-order-heading">Information to Reserve</h2>
          <p></p>
            <div class="form-group">
              <label for="examplename">Name</label>
              <input type="name" class="form-control" name="name" placeholder="Name" required>
              @if($errors->has('name'))
              {{$errors->first('name')}}
              @endif
            </div>
            <div class="form-group">
              <label for="examplename">lastname</label>
              <input type="name" class="form-control" name="lastname" placeholder="lastname" required>
              @if($errors->has('lastname'))
              {{$errors->first('lastname')}}
              @endif
            </div>
            <div class="form-group">
              <label for="examplePhonenumber">Phone Number</label>
              <input type="text" class="form-control" name="phonenumber" placeholder="Phonenum" required>
              @if($errors->has('phonenumber'))
              {{$errors->first('phonenumber')}}
              @endif
            </div>
            <div class="form-group">
              <label for="NumPeople">จำนวนคน</label>
              <input type="number" class="form-control" name="numpeople" placeholder="Numpeople" required>
              @if($errors->has('numpeople'))
              {{$errors->first('numpeople')}}
              @endif
            </div>
                <button type="submit" class="btn btn-default">Submit</button>
              {{ Form::token() }}
        </form>
@stop