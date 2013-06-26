<?php

$arr=array('ram','shyam','hari');
echo implode($arr,",");
echo"<br>";
$str="ram,shyam,hari";

echo"<pre>";
print_r(explode(",",str));
echo"</pre>";


?>