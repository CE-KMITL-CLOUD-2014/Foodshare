@extends("layout.mainshop")
@section("content")
	<div class="container-fluid">
		<div class="container">
			<div class="row">
       				<p>Fail to Reserve try again</p>
 				 <a href="{{URL::route('Reserve-get')}}" type="Menu" class="btn btn-danger navbar-btn">Back</a>
        	</div>
        </div>
    </div>
@stop