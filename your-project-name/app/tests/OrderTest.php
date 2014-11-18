<?php

class MyTest extends TestCase {
   
	public function testOrder()
	{
		
			/*for use this test you muse create your database relative with this code and edit app/config/database.php* because test can't not connect to azure database*/
			/*and you must edit code in ordercontroller line32 from $nameshop to your email address*/
			/*after you run this code you will receive your email inbox */
			$nameshop = 'Narashop'; //define name shop that already created in website
			  
			$response = $this->action('POST', 'OrderController@postOrder', array('name' => 'test','lastname' => 'test','phonenumber' => '082','description' => 'testserv','address' => '878987'));
			
			$this->assertRedirectedToRoute('shop-user','{name}');
			 
		
	}

}
