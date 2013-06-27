<?php
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE);	
	mysql_connect("localhost","root","");
	mysql_select_db("htnepal");
	
	$self = $_SERVER['PHP_SELF'];		
	
	$self_name = str_replace('.php', '', basename($_SERVER['PHP_SELF'])); // function basename - Returns the trailing file name from given path.
	
	//echo basename("sas/123.php/hello.php");	// returns hello.php	
	//echo basename("sas/123.php/hello.php",".php");	// returns hello without the extension php	
	
	$protocol = $_SERVER['HTTPS'] == '' ? 'http://' : 'https://';	
	$self_url = $protocol . $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI']; 	
	
	
	
	
	
?>