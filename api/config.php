<?php
	define("DEBUG", false);

	if(DEBUG == true) {
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}else{
		error_reporting(0);
	}
?>