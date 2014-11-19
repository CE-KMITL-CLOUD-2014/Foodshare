@extends("layout.main")
@section("content")
    <div class="container">
  <center>
    @if(Session::has('global'))
      <p> {{ Session::get('global')}} </p>
      </center>
    @endif
  </center>
      <form class="form-signin" action="{{ URL::route('edit-post') }}" method="post" role="form">
        <center><h2 class="form-signin-heading">Edit Password</h2></center><br>
        <input type="password" name="oldpassword" class="form-control" placeholder="OldPassword" required>
        <p></p>
    @if($errors->has('oldpassword'))
      {{ $errors->first('oldpassword') }}
    @endif
      <input type="password" name="newpassword" class="form-control" placeholder="NewPassword" required>
      <p></p>
    @if($errors->has('newpassword'))
      {{ $errors->first('newpassword') }}
    @endif
    <input type="password" name="password_again" class="form-control" placeholder="ConfirmPassword" required> 
    <p></p>
       <center> <button  type="submit" class="btn btn-default">Change</button></center>
      </form>
  </div>
    </div> <!-- /container -->







<br>

    <center>
      <h2 class="form-signin-heading">Edit Profile</h2><br>

    @if(Session::has('global'))
      <p> {{ Session::get('global')}} </p>
      </center>
    @endif
</center> 
<center>
<form action="{{ URL::route('image-post') }}" method="post" enctype="multipart/form-data">
  <input type="file" name="uploadimage"><br>
  <input type="submit" value="Upload">
  @if($errors->has('uploadimage'))
      {{$errors->first('uploadimage')}}
  @endif
  
</form>
</center>
  </div>
@stop