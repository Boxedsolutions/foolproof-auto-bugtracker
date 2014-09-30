<?php
class Exception_Error extends Exception{
	
	public function __construct( string $message = "" , int $code = 0 , int $severity = 1 , string $filename = __FILE__ , int $lineno = __LINE__ , Exception $previous = NULL ){
			
		parent::__construct($message,$code,$severity,$filename,$lineno,$previous);
	}
}
