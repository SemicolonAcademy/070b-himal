<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("htnepal");	 
	$id=$_GET["id"];
$del="DELETE FROM `users` WHERE `users`.`id` =$id  LIMIT 1";
mysql_query($del);
	$q="select * from users WHERE `users`.`id` = $id";
	$result=mysql_query($q);
	$row=mysql_fetch_assoc($result);
	$imagename=$row["photo"];
	$dest='./uploads/'.$imagename;
	unlink($dest);
header('Location:users.php');
?>