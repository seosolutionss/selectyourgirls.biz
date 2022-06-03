<?php
class TestModel extends CI_Model	{
	public function __construct() {
		parent::__construct();
	}

	public function testIt() {
		return "Hello World";
	}
}	
?>  