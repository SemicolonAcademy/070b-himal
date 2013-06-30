<!DOCTYPE html>
<?php
     include "config.php";
     	
	 $time=date("F j, Y, g:i a");
     $table='contact';
	 
     $form_action = (isset($_GET['form_action'])) ? $_GET['form_action'] : "insert";
	 $err=array();
	 /*------------------------From Validation-------------------------------*/
	 function validation(){
			  if (preg_match("/^[a-zA-Z -]+$/", $_POST['Name']) ==  0){
					$error['name']= "   Enter name properly !!";
				}
			 if (preg_match("/^[0-9]{7,10}$/", $_POST['Phone']) ==  0){
					$error['phone'] = "   Enter seven to ten digit phone number !!";
				}
			 if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $_POST["Email"]) === 0){
					$error['email']=" Enter email correctly !!";
				}	
             return $error;
        }			 
		
	 /*------------------------Grab data for edition-------------------------------*/
	 
	 if ($form_action == "edit" && !isset($_POST['submit_edit'])){
			
			$id=$_GET["id"];			

			$get_single_row_query = "select * from $table WHERE `id` = $id";			
			$single_row_result = mysql_query($get_single_row_query);			
			$row_data = mysql_fetch_assoc($single_row_result);
			$form_values = $row_data;
	    }
     
     /*-----------------------Editing particular contact---------------------*/
	 
	  if(isset($_POST['submit_edit'])){
	        $id=$_POST['id'];
	        $err  = validation();
			
			if (empty($err)) {
					$sql="UPDATE contact SET `name`='{$_POST['Name']}',`phone`='{$_POST['Phone']}',`email`='{$_POST['Email']}',
			                        `message`='{$_POST['Message']}',`created_at`='{$time}' WHERE `id`='{$id}'";
                    mysql_query($sql);
					header("location: $self");
                   					
				}
				else {
				$form_values = $_POST;
			}
	  
	  }	 
    
	 /*------------------------Adding contact-------------------------------*/
     
	  if(isset($_POST['submit_insert'])){
		    if(!$err = validation()){
					 $sql="INSERT INTO `contact`(`name`,`phone`,`email`,`message`,`created_at`) VALUES 
					      ('{$_POST['Name']}','{$_POST['Phone']}','{$_POST['Email']}','{$_POST['Message']}','{$time}')";
					 $result=mysql_query($sql);         //send sql line to mysql server to be processed and return the result to result variable.
					 header("location: $self");	
			}
			else {
				$form_values = $_POST;
			}
		}     
 	
     /*-----------------------Deleting particular contact---------------------*/
	 
	  if ($form_action == "delete"){		
		
			$id=$_GET["id"];							
			$del="DELETE FROM $table WHERE `id` = $id  LIMIT 1";
			mysql_query($del);		
			header("Location: $self");
	  }
	 
     /*-----------------------Deleting particular contact---------------------*/	 
	 
	$get_all_query = "select * from $table";
	$all_result = mysql_query($get_all_query);
			
 ?>
 
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HTnepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  .error  {color:#ff0000;}
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
    <?php include "navbar.php";?>
	
    <div class="container">
	  <div class="bs-docs-example">
            <a href="<?php echo $self_url; ?>"><h3>Contacts</h3></a> 
	   <hr>		  
		<?php 	

		<a href="<?php echo $self_url; ?>"><h3>Contacts</h3></a>
          </div>
		  	  
		<?php 
		   $sel="SELECT * FROM contact";
		   $result=mysql_query($sel);
		   if ($row = mysql_fetch_array($result)){
		   $i=1;
		   ?>
		  
		  <div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Name</th>
                  <th>Phone Number</th>
				  <th>Email</th>
                  <th>Message</th>
				  <th>Created On</th>
				  <th>Action</th>
				<!--  <th>Passwod</th>-->
                </tr>
              </thead>
	      <?php
		   do{  
		   ?>
              <tbody>
                <tr>
				  <td><?php echo $i; ?></td> 
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['email'] ?></td>
				  <td><?php echo $row['message'] ?></td>
				  <td><?php echo $row['created_at'] ?></td>
				  <th>
				      <a href="contact.php?form_action=edit&id=<?php echo $row['id']; ?>">Edit</a> / 
					  <a href="contact.php?form_action=delete&id=<?php echo $row['id']; ?> ">Delete</a>
				  </th>
                </tr>
              </tbody>
			  <?php $i++;}while($row=mysql_fetch_assoc($result));
			  }
			  else{
			     echo "Sorry ! no records are found." ;
			  }
			  ?>
            </table>
			<hr>
		  <?php include"contact_form.php"; ?>
          </div>    

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
