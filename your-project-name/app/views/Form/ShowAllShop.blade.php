@extends("layout.main")
@section("content")
<div class="col-md-8 col-md-offset-2">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">:: Shop List ::</h3>
    </div>
    <div class="panel-body">
	    <table class="table">
      <thead>
        <tr>
          <th>Shop Name</th>
          <th>Seat</th>
          <th>Detail</th>
        </tr>
      </thead>
      <tbody>
        <tr>   
      @foreach ($shops as $shop)
          <td>            	
					   <a href="{{ URL::route('shop-user',$shop->Nameshop)}}" >{{ $shop->Nameshop}} </a><br>
					</td>
          <td>
					  {{ $shop->Seat}} <br>
					</td>
          <td>
					   {{ $shop->Detail}} <br>
					</td>
        </tr>@endforeach
      </tbody>
    </table>
    </div>
  </div>
</div>

@stop