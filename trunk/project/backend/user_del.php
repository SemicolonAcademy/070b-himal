<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("htnepal");	 
	$id=$_GET["id"];
$del="DELETE FROM `users` WHERE `users`.`id` =$id  LIMIT 1";
mysql_query($del);
header('Location:users.php');
?>