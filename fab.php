<?php
require_once "/Exception/Database.php";
require_once "/Exception/Error.php";

 function override_error_handler($errno, $errstr, $errfile, $errline ){
 	throw new Exception_Error($errstr,0, $errno, $errfile, $errline );
 }
