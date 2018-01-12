<?php
require_once 'Logging.php';
/**
 * common class
 */

abstract class Common{
	public $severity = "warning";
	public $retry_count =10;
	public function __construct(){
		$this->log = new Logging();
	}
	/**
	 * 
	 * @param unknown $severity
	 */
	public function Logging( $severity ){
		
	}
	public function getRequest(){
		return $_GET;
	}
	public function setRequest(){
		$this->request = $_GET;
	}
}
