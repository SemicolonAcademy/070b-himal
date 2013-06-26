<?php
echo $now=time();
echo"<br/>";
echo date("Y-m-d H:i:s");
echo"<br/>";
echo date("Y-m-d H:i:s",0);

////////////
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo date("l-M dS,Y H:i:s a");
echo"<br/>";
echo"<br/>";
echo strtotime("14th June 2013");
echo"<br/>";
echo"<br/>";
echo rand();
echo"<br/>";
echo"<br/>";
echo substr('samir.jpg', -3);
echo"<br/>";
echo"<br/>";
$n="samir.jpg";
echo strpos($n,".");
echo"<br/>";
echo"<br/>";

$str="hello world";
$x=strlen($str);
for($i=0;$i<$x;$i++)
{
echo $str[$i];
echo"<br/>";
}
echo"<br/>";
echo"<br/>";

$n=12345.6789;
echo 10/3;
echo"<br/>";
echo number_format($n,2);

echo"<br/>";
$p="password";
echo md5($p);
echo"<br/>";
echo sha1($p);
echo"<br/>";
echo addslashes("7 o'clock");
echo"<br/>";
echo stripslashes("7 o\'clock");
echo "<br/>";
//phpinfo();
echo "<br/>";

//echo file_get_contents("https://www.google.com.np/");

$arr=array("ram","shyam","hari");
echo implode($arr,",");
echo "<br/>";
$str="ram,shyam,hari";
print_r(explode(",",$str));


?>