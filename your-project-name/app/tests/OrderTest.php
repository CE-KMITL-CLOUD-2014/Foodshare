<?php

class MyTest extends TestCase {
   
	public function testOrder()
	{
		
			 $nameshop = 'Narashop'; //define name shop that already created in website
			
			// $this->call('POST', 'Order3');

			 // $this->assertRedirectedToRoute('shop-user',$nameshop);
			  
			$response = $this->action('POST', 'OrderController@postOrder', array('name' => 1,'lastname' => 1,'phonenumber' => 1,'description' => 1,'address' => 1));
			$this->assertSessionHasErrors(['description', 'name','lastname','phonenumber','address']);
			 //$this->assertSessionHas('name');
		
	}

}
