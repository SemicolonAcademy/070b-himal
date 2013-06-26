<?php

/*$a= file_get_contents("email.txt")*/
echo"<br>";
$file=fopen("email.txt","r");

while(!feof($file))
{
    $line=fgets($file);
	if (strpos($line,'@') !== false) /*check the charecter in the string */
  

	   {
             $pos = strpos($line, ","); /* calculate the position of charecter or word */
             $pos1=substr($line, $pos); /* assign string from , to $pos1 */
             $pos2=substr($pos1,2);      
              $pos3 = strpos($pos2, ",");
             echo substr($pos2,0,$pos3-1);
              echo "<br>";
        }

}







?>