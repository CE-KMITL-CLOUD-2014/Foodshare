@extends("layout.mainshop")
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
             <button type="submit" class="btn btn-default">Submit</button>
             {{ Form::token() }}
          </form>
          </div>
      </div>
    </div>
  </div>
@stop