<?php

class BaseTest extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'Client_Hosting_Manager') );
	}
	
	function test_get_instance() {
		$this->assertTrue( client_hosting_manager() instanceof Client_Hosting_Manager );
	}
}
