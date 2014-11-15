@extends("layout.mainshop")
@section("content")
  <!-- <div class="container-fluid">
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
					<a href="{{ URL::route('profile-user',$comment->Email)}}">{{ $comment->Email }} </a>:{{ $comment->Comment }} </br>
			@endforeach
		<div>
      </div>
    </div>-->

    <div class="col-md-12">
    <div style="margin-left:10px;">
      <div class="col-md-3">
      <div class="row">
        <div class="col-md-12 well">
          <h4>Shop name :{{ Session::get('nameshop')}}</h4> <br>
          <h6>Available: {{ Session::get('seat')}} Seat</h6>
          <div class="col-md-3 "><br>
        </div>
      </div>
    </div>
  <div class="row" >
        <div class="col-md-12 well">
          <center><h4>Review</h4></center>
          <form class="form-signin" action="{{ URL::route('Review-post') }}" method="post" role="form">
            <textarea class="form-control" rows="3" name="comment"></textarea>
            @if($errors->has('comment'))
              {{$errors->first('comment')}}
              @endif
            <p></p>
             <button type="submit" class="btn btn-default">Submit</button>
             {{ Form::token() }}
          </form>

      @foreach ($comments as $comment)
          <a href="{{ URL::route('profile-user',$comment->Email)}}"> {{$comment->Email}}</a>:{{ $comment->Comment }} </br>
      @endforeach <br>

      </div>
    </div> 



        </div>   

        <div class="col-md-9" >

               <div class="col-md-12 well" >

           <div class="col-md-12"><br>
            <center><h3>ShowAllMenu</h3></center>
           <!-- <center><button type="AllMenu" class="btn btn-primary">ShowAllMenu </center> -->
      <br><br><br>
    @foreach ($menus as $menu)
    
 <div class="row">     
    <div class= "col-md-4 col-md-offset-2">
      <img width="125" height="125" alt="star" src="data:image/jpg;base64,{{{$menu->Image}}}" />   
    </div> 
    <div class= "col-md-6">
      <h4>{{$menu->Namemenu }}  {{$menu->Price}}</h4> 
    </div>
    
  </div>
    

      
      

      <br><br>
      
      <br><br><br>
      
    @endforeach
    
    </div>   
      </div>
    </div> 
    </div>
    </div>
@stop