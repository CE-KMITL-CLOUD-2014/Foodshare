<?php

class MyTest extends TestCase {


	public function test_display_home_page()
	{
		
		$response = $this->call('POST','/image');
		
		//$this->assertRedirecto('/');
		
		$this->assertEquals('test',$response->getContent());
		
	}

}
