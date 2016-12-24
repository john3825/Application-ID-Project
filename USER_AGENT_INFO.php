<?php

final class HTTP_USER_AGENT {
	static private $HTTP_USER_AGENT = "";
	
	public function __construct() {
	//
	}
	
	static public final function get_DATA() {
		$HTTP_USER_AGENT = "";
		$Temp = $_SERVER["HTTP_USER_AGENT"];
		if ($Temp) {
			$HTTP_USER_AGENT = $Temp;
			self::$HTTP_USER_AGENT = $HTTP_USER_AGENT;
			return $HTTP_USER_AGENT;
		} else {
			return false;
		}
	}
}
USER_AGENT::get_DATA();
?>