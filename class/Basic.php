<?php
require_once 'Common.php';
require_once 'Validation.php';
require_once 'Rendering.php';
require_once 'Output.php';
/**
 * common class
 */

class Basic extends Common{
	
	public function __construct(){
		parent::__construct();
		
		$this->setRequest();
		if( !$this->Validation = new Validation($this->request)) {
			throw new Exception('Failed in validation');
		}
		$this->getGoogleSearch();
		$this->getCategory();
		$this->getAPI();
		$this->Print();
	}
	
	/**
	 * 
	 */
	public function getGoogleSearch(){
		return TRUE;
	}
	
	/**
	 * 
	 */
	public function getCategory(){
		$this->category = array("Car","Books");
		return TRUE;
	}
	
	/**
	 * 
	 */
	public function getAPI(){
		$this->api = "Json";
	}
	
	/**
	 * 
	 */
	public function Print(){
		$template['api'] = $this->api;
		$template['category'] = $this->category;
		$template['request'] = $this->request;
		$Rendering = new Rendering($template);
		new Output($Rendering);
	}
}
