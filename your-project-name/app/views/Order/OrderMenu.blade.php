@extends("layout.mainshop")
@section("content")
    <div class="container-fluid">
      <h1>Show All Order Shop</h1>
      <div class="row">
        <div class="col-xs-4 col-md-12">
			<form class="form-signin" action="{{ URL::route('Order-post') }}" method="post" role="form">
			@foreach ($menus as $menu)
			<img width="75" height="75" alt="star" src="data:image/jpg;base64,{{{$menu->Image}}}" />       
			<br>
			{{$menu->Namemenu }} 	       {{$menu->Price}}   
			<br>
			
			@endforeach
			<br>
			Your order enter name and amount 
			 <textarea class="form-control" rows="3" name="description" placeholder="Your order enter menu name and amount of each menu for example milk 2 cake 4" required></textarea>
			<br>
			<input type="text" style="width: 300px; class="form-control" name="name" placeholder="Name" required> 
			
			<input type="text" style="width: 300px; class="form-control" name="lastname" placeholder="Lastname" required> 
			
			<input type="text" style="width: 300px; class="form-control" name="phonenumber" placeholder="Phonenumber" required> 
			<br><br>
			<textarea class="form-control" rows="3" name="address" placeholder="Address"></textarea>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Order</button>
         
		 </form>
      </div>
    </div>
@stop