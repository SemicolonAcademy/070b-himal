<html>
<head>
<title>working with forms</title>
</head>
<body>
	<form action="formadd.php" method="POST"></p>
		<p><strong>Numer 1</strong><input type="text" name="n1">
		<p><strong>Numer 2</strong><input type="text" name="n2">
		<select name="operation">
			<option value="add">add</option>
			<option value="subtract">subtract</option>
			<option value="multiply">multiply</option>
			<option value="divide">divide</option>
			
		</select>
		<p><input type="submit"value="submit"></p>
	</form>
<?php
	
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$op = $_POST['operation'];
	
	if($op=="add")
	{
		echo "the sum is &nbsp". ($n1 + $n2);
	}
	elseif($op=="subtract")
	{
	echo "the differ is &nbsp". ($n1 - $n2);
	}
	elseif($op=="multiply")
	{
	echo "the product is &nbsp". ($n1 * $n2);
	}
	elseif($op=="divide")
	{
	echo "the division is &nbsp". ($n1 / $n2);
	}
?>
</body>
<html>


