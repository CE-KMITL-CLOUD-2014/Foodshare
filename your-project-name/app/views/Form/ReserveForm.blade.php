@extends("layout.mainshop")
@section("content")
    <form role="form" class="form-order" action="{{ URL::route('Reserve-post') }}" method="post">
       <div class="container-fluid">
        <div class="container">
          <h2 class="form-order-heading">Information to Reserve</h2>
          <p></p>
            <div class="form-group">
              <?php
              $nameshop=Session::get('nameshop');
              $seats = DB::select('select Seat from shop where Nameshop = ?', array($nameshop));
              $numkeep;
              foreach($seats as $seat){
                $numkeep=$seat->Seat;
              }
              
              ?>
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
              <input type="number" class="form-control" name="phonenumber" placeholder="Phonenum" required>
              @if($errors->has('phonenumber'))
              {{$errors->first('phonenumber')}}
              @endif
            </div>
            <div class="form-group">
              <label for="NumPeople">จำนวนคน</label>
              <input type="number" class="form-control" name="numpeople" placeholder="Numpeople less or equal{{ $numkeep }}" required>
              @if($errors->has('numpeople'))
              {{$errors->first('numpeople')}}
              @endif
            </div>
                <button type="submit" class="btn btn-default">Submit</button>
              {{ Form::token() }}
        </form>
      </div>
    </div>
@stop