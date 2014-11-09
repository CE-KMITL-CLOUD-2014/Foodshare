@extends("layout.mainshop")
@section("content")
   <div class="container-fluid">
      <div class="row">
        <div class="col-xs-4 col-md-4">

      
         <p>{{ Session::get('nameshop')}}</p>
		<br>
		<p>Available:{{ Session::get('seat')}} Seat</p>
        </div>
        <div class="col-xs-4 col-md-4">
          <button type="AllMenu" class="btn btn-primary">ShowAllMenu</button>
			<br><br><br>
		@foreach ($menus as $menu)
			
			<img width="75" height="75" alt="star" src="data:image/jpg;base64,{{{$menu->Image}}}" />
			<br>
			{{$menu->Namemenu }}  {{$menu->Price}} 
			<br>
			
		@endforeach
		
		</div>
		<div class="col-xs-4 col-md-4">
			@foreach ($comments as $comment)
					{{$comment->Email}}:{{ $comment->Comment }} </br>
			@endforeach
		<div>
      </div>
    </div>
@stop