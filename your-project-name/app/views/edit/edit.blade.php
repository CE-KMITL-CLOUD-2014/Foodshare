@extends("layout.main")
@section("content")
  <div class="container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-4 col-md-12">
          <div class="form-group">
            
            <p><a href="{{ URL::route('image-get') }}" class="btn btn-primary" role="button">Edit profile image</a></p>
			      <p><a href="{{ URL::route('edit-get') }}" class="btn btn-primary" role="button">Edit password</a></p>
          </div>
      </div>
    </div>
  </div>
  </div>
@stop