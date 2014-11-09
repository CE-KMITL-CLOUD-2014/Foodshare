@extends("layout.mainshop")
@section("content")
<form role="form" class="form-order" action="{{ URL::route('Reserve-add') }}" method="post">
	<div class="container-fluid">
		<div class="row">
       <h2>Set new seat</h2>
 				 <div class="form-group">
 				 	 <Label for="Avaliable">Avaliable</label>
 				 	 <input type="avaliable" class="form-control" name="avaliable" placeholder="avaliable">
 				 </div>
          @if($errors->has('avaliable'))
          {{$errors->first('avaliable')}}
          @endif
 				       <button type="submit" class="btn btn-default">Submit</button>
          {{ Form::token() }}
        	</div>
        </div>
    </div>
@stop