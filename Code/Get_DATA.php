<?php
	if ( @isset( $_POST["Application_ID"] ) ) {
		$Internet_Site_ID = @json_decode( @base64_decode( $_POST["Application_ID"]));
		if ( $Application_ID ) {
			if ( $Application_ID -> Request === "GetDATA" ) {
				echo Get_DATA::send();
			}
		}
	} 
	// Sample
	final class Get_DATA {
	
		private static $Application_ID = ""; // ID number
		
		public function __construct() {
		//
		}

		public function send() {
			$ID_Data = "";
			self::Get_DATA();
			$ID_Data = $Application_ID;
			return $ID_Data;
		}
		
		private static final function Get_DATA() {
			$ID_Data = "Application_ID_Number";
			self::$Application_ID = $ID_Data;
		}
	}

?>