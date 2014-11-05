@extends("layout.main")
@section("content")
<div class="container">
	 <form class="form-signin" action="{{ URL::route('createshop-post') }}" method="post" role="form">
		<h2 class="form-signin-heading">Createshop</h2>
		<input type="text" name="name" class="form-control" placeholder="Name" required>
		
	   
	    <textarea class="form-control" name="detail" rows="3" placeholder="Detail" required></textarea>

		<button type="submit" class="btn btn-default">Submit</button>
			
	</form>
</div>
@stop