<?php
	$city1=array("ktm","chitwan");
	$city2=array("ktm","nepalgunj");
	
	
	$common=array_intersect($city1,$city2);
	$diff=array_diff($city2,$city1);
	$both=array_merge($city1,$city2);
	$unique=array_unique($both);
	
	print_r($common);
	echo"<br/>";
	print_r($diff);
	echo "<br/>";
	print_r($both);
		echo "<br/>";
	print_r($unique);
	echo"<br/>";
	
	
	
	///////////////////////////////////////
	
	$capital['narayani']='Chitwan';
	print_r($capital);
		echo "<br/>";
	
	$fliped=array_flip($capital);
	print_r($fliped);
		echo "<br/>";
		
		
		
	////////////////////////////////////////
	function range_odd($x,$y)
	{
	$array=array();
	
	for($i=$x;$i<$y;$i++)
		{
		if($i%2!=0)
			array_push($array,$i);
		}
		
		return $array;
	}
	
	
	
	
	$odd=range_odd(2,5);
	print_r($odd);
	
	
	
	
	
	
	
	
	
	

	
	
?>