<?php
namespace API\EndPoints;
/**
 * 
 */
class users extends Requests 
{
	
	function execute($ci){
		var_dump($ci);
		// echo __CLASS__;
		$this->doSomeThings();
		die;
	}

	private function doSomeThings(){
		echo __CLASS__;
	}
}