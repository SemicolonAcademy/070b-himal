<?php
echo "hello world";
$x=10;
$y=20;
$z=30;
if($x<$y)
{
  if($z<$y)
    {echo $y."is the largest";}
  else 
    echo $z."is the largest";
}

else if ($x>$z)
{echo $x."is the largest";}
else
 echo $z."is the largest";
?>