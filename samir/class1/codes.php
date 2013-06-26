<?php 

$name="hari";
echo"welcome".$name;
echo"<br/>";
echo "welcome $name";
echo"<br/>";
echo'welcome'.$name;
echo"<br/>";
echo'welcome{$name}';
echo"<br/>";
echo 'Hello'.'"Hari"'. 'it \'s 7 o \' clock';
echo"<br/>";

////////////////////////////////////
echo __line__;
echo"<br/>";
echo __file__;
echo"<br/>";
echo __function__;
echo"<br/>";
echo __class__;
echo"<br/>";
define("pi","3.125");
///////////////////////////////////////
echo"<pre>";
//print_r($_SERVER);
echo"</pre>";

/////////////////

$teachers= array("samir","matrika","matrika","samaj","niraj");
echo $teachers;
echo"<br/>";
for($i=0;$i<=4;$i++)
{
echo $teachers[$i];
echo"<br/>";
}
echo"<pre>";
print_r($teachers);
echo"</pre>";

///////////////////////
$district=array(
"kathmandu"=>"kathmandu",
"chitwan"=>"bharatpur",
"kaski"=>"pokhara"
);
echo"<pre>";
print_r($district);
echo"</pre>";
echo"<br/>";
echo $district["kaski"];
echo"<br/>";

//////////////
foreach($district as $d)
echo $d;
//////////////
echo"<br/>";
foreach($district as $k=>$v)
{
echo $k."--------".$v;
echo"<br/>";
}

$teacher=array(
array('name'=>'samir','age'=>'20'),
array('name'=>'matrika','age'=>'21'),
array('name'=>'maruti','age'=>'25')
);

print_r($teacher);
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
?>
<table>
<tr>
<th>S.N</th><th>Name</th><th>Age</th>
</tr>



<?php
$i=1;
foreach ($teacher as $v)
{
?>
 <tr>
	<td><?php echo $i;?></td>
	<td><?php echo$v["name"] ;?></td>
	<td><?php echo$v["age"] ;?></td>
 </tr>
<?php $i++;
}?>
</table>