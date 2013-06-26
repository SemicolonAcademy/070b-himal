<?php

/*$city1=array("ktm","pokhara");
echo"<pre>";
 print_r($city1);
 echo"</pre>";
 
$city2=array("ktm","Nepal Ganj");
echo"<pre>";
 print_r($city2);
 echo"</pre>";
$common=array_intersect($city1,$city2);
echo"<pre>";
 print_r($common);
 echo"</pre>";
$deff=array_diff($city1,$city2);
echo"<pre>";
 print_r($deff);
 echo"</pre>";
$both=array_merge($city1,$city2);
echo"<pre>";
 print_r($both);
 echo"</pre>";*/
 /*$uni=array_unique($city1,$city2);
 echo"<pre>";
 print_r($uni);
 echo"</pre>";*/
 $odd=array_odd(10,20);
 echo "<pre>";
 print_r($odd);
 echo "</pre>";
 
   function array_odd($a,$b)
   {   
   $temp = array();
   
        for($i=$a;$i<=$b;$i++)
		{
		  if($i % 2 != 0){
			//$temp[] = $i;
			array_push($temp, $i);
		  }
      
	  }
	  
	  return $temp;
   
   }
 
?>