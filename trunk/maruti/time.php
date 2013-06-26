<?php
echo time();
echo "<br>";
echo date("Y-m-d H:i:s",time());
echo "<br>";
echo date("Y-m-d H:i:s",0);
echo "<br>";
echo date("l-M-dS  Y H:i:s/A");
echo "<br>";
/*$a=date("Y");
$b=da(2000);
function */
echo strtotime("14th june 2013");
echo "<br>";
echo rand(10,100);
echo "<br>";
echo substr("Hellow.jpg",-3);
echo "<br>";
$n="samir.jpg";
echo strpos($n,".");
echo "<br>";
$a="Hellow";
$c=strlen($a);
for($i=0;$i<=$c;$i++)
{
  echo $a[$i];
  echo "<br>";

}
echo "<br>";

$str="maruti";
echo ucfirst($str);

echo "<br>";
$p=1245.657897;
echo number_format($p);
echo "<br>";
$u="maruti";
echo md5($u);
echo "<br>";
echo addslashes("7 o's clock");
echo "<br>";

echo stripslashes("7 o\'s clock");
echo "<br>";
/*phpinfo();*/
echo "<br>";
echo file_get_contents("SIM_LAB1.CPP");




?>