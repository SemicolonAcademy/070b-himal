
<?php
$content=file_get_contents("email.csv");
$email=array();
$array=explode(",",$content);
$i=0;
foreach($array as $v)
	{
	  if (strstr($v,"@"))
		{
		$v=substr($v,1,-1);
		$v=ucfirst($v);
		array_push($email,$v);
		}
	}
	
	foreach($email as $v)
	{echo ++$i.".&nbsp".$v;
	 echo"<br/>";
	}
	
$filename="samir.gif";
$pos1=strpos($filename,'.');

		$image_type=substr($filename,-(strlen($filename)-$pos1)+1);
		if($image_type=='jpeg'||$image_type=='bmp'||$image_type=='png'||$image_type=='gif')
			{continue;}
			else
		{$eimage="please select the correct image file.The image type is"." ".$image_type;
			echo $eimage;}
		

	

?>