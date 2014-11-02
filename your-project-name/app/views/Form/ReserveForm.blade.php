@extends("layout.main")
@section("content")
    <form role="form" class="form-order" action="{{ URL::route('Reserve-post') }}" method="post">
       <div class="container-fluid">
          <h2 class="form-order-heading">Information to Reserve</h2>
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
              <input type="phonenum" class="form-control" id="phonenum" placeholder="Phonenum">
              @if($errors->has('phonenum'))
              {{$errors->first('phonenum')}}
              @endif
            </div>
            <div class="form-group">
              <label for="NumPeople">จำนวนคน</label>
              <input type="numpeople" class="form-control" id="numpeople" placeholder="Numpeople">
              @if($errors->has('numpeople'))
              {{$errors->first('numpeople')}}
              @endif
            </div>
                <button type="submit" class="btn btn-default">Submit</button>
                {{ Form::token() }}
        </form>
@stop