<?php

class ReservTest extends TestCase {


	public function test_reserv()
	{
		/*for use this test you muse create your database relative with this code and edit app/config/database.php* because test can't not connect to azure database*/
			/*and you must edit code in ordercontroller line53 from $nameshop to your email address*/
			/*after you run this code you will receive your email inbox */
		$nameshop = 'Narashop';
		$num1=10;
		$numkeep=5;
		$sendemail = 'darkarea1999@gmail.com';
		
		 
		 $response = $this->action('POST', 'Reserve-post', array('name' => 'eddd','lastname' => 'asssa','phonenumber' => '2852','numpeople' => 1,'Date' => '15/7/2554'));
		 $this->assertRedirectedToRoute('shop-user','{name}');	
			
	}

}
