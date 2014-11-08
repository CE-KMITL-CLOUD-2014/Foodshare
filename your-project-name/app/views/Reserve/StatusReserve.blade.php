@extends("layout.mainshop")
@section("content")
<form role="form" class="form-order" action="{{ URL::route('Reserve-add') }}" method="post">
	<div class="container-fluid">
		<div class="row">
       <p>Fail to Reserve try again</p>
 				 <a href="{{URL::route('Reserve-get')}}" type="Menu" class="btn btn-danger navbar-btn">Back</a>
        	</div>
        </div>
    </div>
@stop