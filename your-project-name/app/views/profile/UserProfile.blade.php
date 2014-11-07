@extends("layout.main")
@section("content")
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-4 col-md-2">
          <img width="150" height="150" alt="star" src="data:image/{{{$user->extensionImage}}};base64,{{{$user->profileImage}}}" />
          <p>{{$user->Email}}  </p>
			  @if ($shops!=null)
					@foreach ($shops as $shop)
						<a href="{{ URL::route('shop-user',$shop->Nameshop)}}">{{ $shop->Nameshop}}</a></br>
					@endforeach
			  @else 
			  @endif
        </div>
        <div class="col-xs-4 col-md-5">
          <button type="FoodShare" class="btn btn-primary">FoodShare</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies sapien quam, id tincidunt libero maximus a. Mauris dapibus sed ex ut ornare. Duis varius arcu nec leo fermentum, sit amet convallis orci sollicitudin. Proin pellentesque, massa id tristique tempor, risus mi aliquet risus, at convallis nibh sapien id lacus. Sed nec sem dignissim, malesuada justo eget, tincidunt dolor. Curabitur sed leo efficitur, varius enim id, venenatis velit. Nullam vehicula ut ipsum viverra suscipit. Donec justo ipsum, volutpat sit amet feugiat eu, elementum in orci. Aenean ut ex sit amet nisi egestas interdum. Vestibulum ultrices molestie tortor in tempor. Nullam tincidunt venenatis libero, nec sodales tellus finibus sit amet. Nullam at felis sed sapien fringilla rhoncus id venenatis odio.</p>
        </div>
        <div class="col-xs-4 col-md-5">
          <img src="#" >
          <button type="Menushare" class="btn btn-primary">MenuShare</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies sapien quam, id tincidunt libero maximus a. Mauris dapibus sed ex ut ornare. Duis varius arcu nec leo fermentum, sit amet convallis orci sollicitudin. Proin pellentesque, massa id tristique tempor, risus mi aliquet risus, at convallis nibh sapien id lacus. Sed nec sem dignissim, malesuada justo eget, tincidunt dolor. Curabitur sed leo efficitur, varius enim id, venenatis velit. Nullam vehicula ut ipsum viverra suscipit. Donec justo ipsum, volutpat sit amet feugiat eu, elementum in orci. Aenean ut ex sit amet nisi egestas interdum. Vestibulum ultrices molestie tortor in tempor. Nullam tincidunt venenatis libero, nec sodales tellus finibus sit amet. Nullam at felis sed sapien fringilla rhoncus id venenatis odio.</p>
        </div>
      </div>
    </div>
@stop