@extends("layout.mainshop")
@section("content")
    <div class="container-fluid">
      <center><h1>Food for Order </h1></center>
      <div class="col-md-5 col-md-offset-1">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Your Order</button><br></div>
<br><br><div class="row col-md-offset-1" style="margin-top:20;"> <br>
       @foreach ($menus as $menu)
    <div class="col-md-2 text-center well" style="margin-left:10px;">
       <img width="140" height="140" alt="star" src="data:image/jpg;base64,{{{$menu->Image}}}" />  
      <h4>{{$menu->Namemenu }} </h4>
      <p>{{$menu->Price}}</p>
    </div>

     @endforeach
</div>


    
    


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> Your order enter name and amount </h4>
      </div>
      <div class="modal-body">
      <form class="form-signin" action="{{ URL::route('Order-post') }}" method="post" role="form">
   
    
       <textarea class="form-control" rows="3" name="description" placeholder="Your order enter menu name and amount of each menu for example milk 2 cake 4" required></textarea>
      <br>
      <input type="text" style="width: 300px" class="form-control" name="name" placeholder="Name" required> 
      <br><br>
      <input type="text" style="width: 300px" class="form-control" name="lastname" placeholder="Derivery day" required> 
      <br><br>
      <input type="text" style="width: 300px" class="form-control" name="phonenumber" placeholder="Phonenumber" required> 
      <br><br>
      <textarea class="form-control" rows="3" name="address" placeholder="Address"></textarea><br>
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Order</button>
      
     </form>
      </div>
    </div>
  </div>
</div>
@stop