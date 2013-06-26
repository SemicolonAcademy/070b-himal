html>
<form  action="get.php" method="GET">
  <input type="text" name="n1">
  <input type="text"  name="n2" >
  <select name="op">
               
				<option value="add">Add</option>
				<option value="sub">Diff</option>
				<option value="mul">Mul</option>
				
			</select>
  <input type="submit">

</form>

<?php

/*print_r($_GET);
$sum=$_GET['n1']+$_GET['n2'];
echo $sum;*/
$n1=$_GET['n1'];
$n2=$_GET['n2'];
$op=$_GET['op'];
print_r($_GET);


if( $op=="add")
{
  echo $n1 + $n2;
}
if( $op=="sub")
{
  echo $n1 - $n2;
  
}
if( $op=="mul")
{
  echo $n1 *$n2;
  
}




?>

</html>