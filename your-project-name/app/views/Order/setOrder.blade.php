@extends("layout.mainshop")
@section("content")
	<div class="container-fluid">
		<div class="row">
        	<div class="col-xs-4 col-md-12">
        		<p>Add food for order</p>
        		<div class="form-group">
   				 <label for="exampleInputFile">Upload Pic</label>
   				 <input type="file" id="exampleInputFile">
 				 </div>
 				 <div class="form-group">
 				 	<Label for="Price">Enter the Price</label>
 				 	<input type="price" class="form-control" id="Price" placeholder="price">
 				 </div>
 				 <div class="form-group">
 				 	<Label for="Detail">Detail</label>
 				 	<input type="Detail" class="form-control" id="Detail" placeholder="Detail">
 				 </div>
 				 <button type="submit" class="btn btn-default">Submit</button>
        	</div>
        </div>
    </div>
@stop