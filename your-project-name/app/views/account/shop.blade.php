@extends("layout.main")
@section("content")
<div class="container">
	<div class="edit-text ">
	 <form class="form-signin" action="{{ URL::route('createshop-post') }}" method="post" role="form">
		<h2 class="form-signin-heading">Createshop</h2>
        <br>


<div class="well col-md-8 col-md-offset-2">
 			<div class="col-md-12 "> <div class="form-group">
            	<Label for="Price" class="col-md-2 control-label" ><p style="color:#428bca;">Name shop</p></label>
            		<div class="col-md-9">
            	<input type="name" class="form-control" name="name" placeholder="Name" required><br>
            	</div>
            </div>
          </div>
	   
	   <div class="col-md-12"> <div class="form-group">
	   	   <Label for="detail" class="col-md-2 control-label"><p style="color:#428bca;">Detail</p></label>
	   	  <div class="col-md-9">
	   	  	<textarea class="form-control" name="detail" rows="3" placeholder="Detail" required></textarea><br>
	   	 </div>
	   </div>
	</div>


	    <div class="col-md-12 "> <div class="form-group">
	   	   <Label for="price" class="col-md-2 control-label"><p style="color:#428bca;">Price</p></label>
	   	  <div class="col-md-1">
	   	  	<select name="price">
			<option value="Low">Low 20+</option>
			<option value="Medium">Medium 70+</option>
			<option value="High">High 100+</option>
		</select></br>
	   	  	
	   	 </div>
	   </div>
	</div>


		<div class="col-md-12"> <div class="form-group">
			<Label for="price" class="col-md-2 control-label"><p style="color:#428bca;">Province</p></label>
				<div class="col-md-1">
	   	  
		<select name="city">
<option value=" Bangkok ">Bangkok		</option>
<option value="Chiang Rai">Chiang Rai			</option>
<option value="Chiang Mai">Chiang Mai	</option>
<option value="Nan">Nan		</option>
<option value="Phayao">Phayao		</option>
<option value="Phrae">Phrae		</option>
<option value="Lampang"> Lampang		</option>
<option value=" Lamphun"> Lamphun</option>
<option value=" Uttaradit "> Uttaradit   </option>
<option value=" Kalasin "> Kalasin </option>
<option value=" Khon Kaen"> Khon Kaen	</option>
<option value=" Chaiyaphum"> Chaiyaphum		</option>
<option value=" Nakhon Phanom"> Nakhon Phanom		</option>
<option value=" Nakhon Ratchasima"> Nakhon Ratchasima		</option>
<option value=" Bueng Kan"> Bueng Kan		</option>
<option value=" Buri Ram"> Buri Ram	</option>
<option value=" Maha Sarakham"> Maha Sarakham	</option>
<option value=" Mukdahan"> Mukdahan	</option>
<option value=" Yasothon"> Yasothon	</option>
<option value=" Roi Et"> Roi Et	</option>
<option value=" Loei"> Loei	</option>
<option value=" Si Sa Ket"> Si Sa Ket	</option>
<option value=" Sakon Nakhon"> Sakon Nakhon	</option>
<option value=" Surin "> Surin</option>
<option value=" Nong Khai"> Nong Khai	</option>
<option value=" Nong Bua Lam Phu"> Nong Bua Lam Phu	</option>
<option value=" Amnat Charoen"> Amnat Charoen	</option>
<option value=" Udon Thani"> Udon Thani</option>
<option value=" Ubon Ratchathani"> Ubon Ratchathani	</option>
<option value=" Kamphaeng Phet">Kamphaeng Phet	</option>
<option value="Chai Nat">Chai Nat	</option>
<option value="Nakhon Nayok">Nakhon Nayok</option>
<option value="Nakhon Pathom">Nakhon Pathom	</option>
<option value="Nakhon Sawan">Nakhon Sawan		</option>
<option value="Nonthaburi">Nonthaburi		</option>
<option value="Pathum Thani"> Pathum Thani	</option>
<option value=" Phra Nakhon Si Ayutthaya"> Phra Nakhon Si Ayutthaya</option>
<option value=" Phichit"> Phichit  </option>
<option value=" Phitsanulok "> Phitsanulok</option>
<option value="Phetchabun">Phetchabun		</option>
<option value="Lop Buri">Lop Buri		</option>
<option value="Samut Prakan">Samut Prakan		</option>
<option value="Samut Songkhram">Samut Songkhram		</option>
<option value="Samut Sakhon">Samut Sakhon		</option>
<option value="Sing Buri">Sing Buri		</option>
<option value="Sukhothai">Sukhothai	</option>
<option value="Suphan Buri">Suphan Buri		</option>
<option value="Saraburi">Saraburi	</option>
<option value="Ang Thong">Ang Thong		</option>
<option value="Uthai Thani">Uthai Thani		</option>
<option value="Chanthaburi">Chanthaburi		</option>
<option value="Chachoengsao">Chachoengsao		</option>
<option value="Chon Buri">Chon Buri	</option>
<option value="Trat">Trat		</option>
<option value="Prachin Buri">Prachin Buri		</option>
<option value="Rayong">Rayong		</option>
<option value="Sa Kaeo">Sa Kaeo	</option>
<option value="Kanchanaburi">Kanchanaburi		</option>
<option value="Tak">Tak	</option>
<option value="Prachuap Khiri Khan">Prachuap Khiri Khan	</option>
<option value="Phetchaburi">Phetchaburi		</option>
<option value="Ratchaburi">Ratchaburi		</option>
<option value="Krabi">Krabi		</option>
<option value="Chumphon">Chumphon		</option>
<option value="Trang">Trang		</option>
<option value="Nakhon Si Thammarat">Nakhon Si Thammarat		</option>
<option value="Narathiwat">Narathiwat		</option>
<option value="Pattani">Pattani		</option>
<option value="Phangnga">Phangnga		</option>
<option value="Phatthalung">Phatthalung		</option>
<option value="Phuket">Phuket		</option>
<option value="Yala">Yala		</option>
<option value="Ranong">Ranong		</option>
<option value="Songkhla">Songkhla		</option>
<option value="Satun">Satun
<option value="Surat Thani">Surat Thani		</option>


			
		</select></br>
		</div>
	   </div>
	</div>

		<div class="col-md-12"> <div class="form-group">
			<Label for="price" class="col-md-2 control-label"><p style="color:#428bca;">Type</p></label>
	   	  <div class="col-md-1">
		<select name="type">
			<option value="1">Buffet			</option>
			<option value="2">Restaurant	</option>
			<option value="3">Cafe		</option>
			
		</select></br>
			</div>
	   </div>
	</div>

		
 			<div class="col-md-12"> <div class="form-group">
            	<Label for="Price" class="col-md-2 control-label" ><p style="color:#428bca;">Seat</p></label>
            		<div class="col-md-9">
            	<input type="number" name="seat" class="form-control" placeholder="Seat" required><br>
            	</div>
            </div>
          </div>

		
		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-danger">Clear</button>			
	</form>
</div>
	</div>
</div>
@stop