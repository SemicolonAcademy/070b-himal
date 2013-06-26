<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("cms");	 
	$id=$_GET["id"];
$del="DELETE FROM `cms`.`users` WHERE `users`.`id` =$id  LIMIT 1";
mysql_query($del);
header('Location:form.php');
?>