<?php 
	include "config.php";
	$id=$_GET["id"];
	
	$q="select * from users WHERE `id` = $id";
	$result=mysql_query($q);	
	$row=mysql_fetch_assoc($result);	
	$imagename=$row["photo"];
	$dest='./uploads/'.$imagename;
	@unlink($dest);
		
	$del="DELETE FROM `users` WHERE `id` =$id  LIMIT 1";
	mysql_query($del);
	
	header('Location:users.php');
?>