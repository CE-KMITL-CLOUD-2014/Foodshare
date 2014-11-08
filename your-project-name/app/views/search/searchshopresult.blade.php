@extends("layout.main")
@section("content")
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/edit.css') }}">
    <div class="container">
	
					@foreach ($shops as $shop)
					<center>
						<a href="{{ URL::route('shop-user',$shop->Nameshop)}}">{{ $shop->Nameshop}}</a></br>
					</center>
					@endforeach
	
    </div> <!-- /container -->


@stop