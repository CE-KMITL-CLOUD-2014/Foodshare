@extends("layout.main")
@section("content")
  <div class="container">
    <div class="container-fluid">
      <h2>Display all show and Review</h1>
      <div class="row">
        <div class="col-xs-4 col-md-12">
          <p>Show All shop</p>
          <p>Previous Review showed</p>
          <form class="form-signin" action="{{ URL::route('Review-post') }}" method="post" role="form">
            <textarea class="form-control" rows="3" name="comment"></textarea>
            @if($errors->has('comment'))
              {{$errors->first('comment')}}
              @endif
            <p></p>
            <p><a href="#" class="btn btn-primary" role="button">Comment</a></p>
          </div>
          {{ Form::token() }}
         <p><a href="{{URL::route('home')}}" type="home" class="btn btn-default navbar-btn">HOME</a></p>
      </div>
    </div>
  </div>
@stop