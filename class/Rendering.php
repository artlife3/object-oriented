<?php
class Rendering{
	/**
	 * 
	 * @param array $array
	 * @return Ambigous <string, unknown>
	 */
	public function __construct(Array $array){
		$return = "";
			foreach ($array as $value){
				$return.= $value;
		}
		return $return;
	}
}