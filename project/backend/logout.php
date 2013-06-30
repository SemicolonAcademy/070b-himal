<?php 
session_start();
$_SESSION['logged_in'] = '';
$_SESSION['user_id'] = '';
$_SESSION['email'] = '';
header ("Location: login.php");
			
?>