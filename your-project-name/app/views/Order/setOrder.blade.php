@extends("layout.mainshop")
@section("content")
<form role="form" class="form-order" action="{{ URL::route('Menu-set') }}" method="post" enctype="multipart/form-data">
  <div class="col-md-8 col-md-offset-2 well ">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
          <h2>Add food for order</h2><br>
          <div class="form-group">
             <label for="exampleInputFile">Upload Pic</label>
             <input type="file" name="uploadimage"><br>
          </div>
          <div class="form-group col-md-8">
            <Label for="Price">Food name</label>
            <input type="name" class="form-control" name="name" placeholder="Food name">
          </div><br>
          @if($errors->has('name'))
              {{$errors->first('name')}}
              @endif
           <div class="form-group col-md-8">
             <Label for="Price">Enter the Price</label>
             <input type="price" class="form-control" name="price" placeholder="price">
           </div> <br>
           @if($errors->has('price'))
              {{$errors->first('price')}}
              @endif
              <div class="col-md-4 col-md-offset-2  ">
               <br><center><button type="submit" class="btn btn-default">Submit</button></center>
             </div>
            {{ Form::token() }}
          </div>
        </div>
      </div>
    </form>


@stop