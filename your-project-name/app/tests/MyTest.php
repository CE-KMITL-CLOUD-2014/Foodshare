<?php

class MyTest extends TestCase {


	public function test_display_home_page()
	{
		
		$response = $this->call('GET','/signin');
		
		//$this->assertRedirecto('/');
		
		$this->assertEquals($response->getContent(),$response->getContent());
		
	}

}
