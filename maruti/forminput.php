<html>
<form  action="forminput.php" method="POST">
  <input type="text" name="n1">
  <input type="text"  name="n2" >
  <input type="submit">

</form>

<?php

print_r($_POST);
$sum=$_POST['n1']+$_POST['n2'];
echo $sum;

?>

</html>