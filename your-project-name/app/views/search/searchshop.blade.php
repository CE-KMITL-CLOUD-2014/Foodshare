@extends("layout.main")
@section("content")
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/edit.css') }}">
    <div class="container">
	
      <form class="form-signin" action="{{ URL::route('searchshop-post') }}" method="post" role="form">
        <h2 class="form-signin-heading">Search shop</h2>
        <input type="text" name="Nameshop" class="form-control" placeholder="Shop Name" >
		<select name="price">
			<option value="Low">Low 20+</option>
			<option value="Medium">Medium 70+</option>
			<option value="High">High 100+</option>
		</select></br>
		<select name="city">
			<option value="Chiang Rai">Chiang Rai			</option>
			<option value="Chiang Mai">Chiang Mai	</option>
			<option value="Nan">Nan		</option>
			<option value="Phayao">Phayao		</option>
			<option value="Phrae">Phrae		</option>
			<option value="Mae Hong Son">Mae Hong Son		</option>
		</select></br>
		<select name="type">
			<option value="1">Buffet			</option>
			<option value="2">Restaurant	</option>
			<option value="3">Cafe		</option>
			
		</select></br>
        <button  type="submit" class="btn btn-default">Search</button>
      </form>
	
    </div> <!-- /container -->


@stop