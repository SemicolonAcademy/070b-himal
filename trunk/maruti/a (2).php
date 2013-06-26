<?php
$a=array(
           array(
		         "Nme"=>"Maruti",
				 "Age"=>"25"
				 
		        
				 ),
				 array(
		         "Nme"=>"Nandan",
				 "Age"=>"24"
				 
		        
				 ),
				 array(
		         "Nme"=>"Thakur",
				 "Age"=>"23"
				 
		        
				 ),
				 array(
		         "Nme"=>"Ram",
				 "Age"=>"125"
				 
		        
				 )
				 

        );
		echo"<pre>";
		 print_r($a);
		 echo"</pre>";
		
?>
<table border="1">
   <tr>
   
   <td>S.N</td>
   <td>Name</td>
   <td>Age</td>
   </tr>
   <?php 
      $i=0;
	    foreach($a as $value)
		{
		
   ?>
        <tr>
		   <td> <?php echo $i; ?></td> 
		   <td> <?php echo $value["Nme"];  ?></td>
		   <td> <?php echo $value["Age"]; ?></td> 
		   
        </tr>	

    <?php 
    
	    $i++;
      }

?>	  



</table>

