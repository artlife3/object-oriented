<?php
/**
 * Logging class
 * 
 */

class Logging{
	public $severity = "warning";
	public $path = "/var/log/php/log/";
	public $file = "app.log";
	public $logfile_path;
	
	/**
	 * __construct
	 */
	function __construct(){
		$this->setLogPath();
	}

	/**
	 * Logging
	 * @param unknown $message
	 * @param string $severity
	 */
	public function Logging( $message, $severity=NULL ){
		if(empty($severity)){
			$severity = $this->severity;
		}
		error_log(print_r($message, true), 3, $this->logfile_path);
	}
	/**
	 * Set Log path
	 * @throws Exception
	 */
	private function setLogPath(){
		$this->logfile_path = $path.$file;
		if( !file_exists($this->logfile_path) ){
			throw new Exception('There is no save destination for log.');
		}
	}
}
