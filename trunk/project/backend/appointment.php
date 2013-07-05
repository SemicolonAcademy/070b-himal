<?php
	
	include "config.php";	
	$time=date("F j, Y, g:i a");			
	$table = 'appointments';	
	$form_action = (isset($_GET['form_action'])) ? $_GET['form_action'] : "insert";		
	
	/*-------------------------------------------------
	Form Validation and Errors
	-------------------------------------------------*/
	
	$errors = array(); 	
				
	function form_validation(){
			
			 if (preg_match("/^[0-9]{1,}$/", $_POST["userid"]) ==  0){
					$err['userid'] = "   Enter user ID correctly !!";
					}
			 if (preg_match("/^[a-zA-Z -]+$/", $_POST["name"]) ==  0){
					$err['name'] = "   Enter name correctly !!";
					}
			 if (preg_match("/^[+0-9]{7,13}$/", $_POST["phone"]) ==  0){
					$err['phone'] = "   Enter seven to ten digit phone number !!";
					}
			 if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $_POST["email"]) === 0){
					$err['email'] = " Enter email correctly !!";
					}
             if(preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $_POST["appointment_date"]) === 0){
					$err['appointment_date']= " Enter date like (YYYY-MM-DD) !!";
					}
				return $err;
	}
	
	/*-------------------------------------------------
	Dalete Data
	-------------------------------------------------*/
	
	if ($form_action == "delete"){		
		
			$id=$_GET["id"];							
			$del="DELETE FROM $table WHERE `id` = $id  LIMIT 1";
			mysql_query($del);		
			header("Location: $self");
	}
	
	/*-------------------------------------------------
	Grab data for single row for edit.
	-------------------------------------------------*/
	
	if ($form_action == "edit" && !isset($_POST['submit_edit'])){
			
			$id=$_GET["id"];			
			
			$get_single_row_query = "select * from $table WHERE `id` = $id";			
			$single_row_result = mysql_query($get_single_row_query);			
			$row_data = mysql_fetch_assoc($single_row_result);
			$form_values = $row_data;
	}
	
	/*-------------------------------------------------
	Process Insert Form Submissions
	-------------------------------------------------*/
	
	if (isset($_POST['submit_insert'])){											
			
			//$errors  = form_validation();
			if (! $errors = form_validation()) {									
			 
		        $id=$_POST['userid'];
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$message=$_POST['message'];
				$date=$_POST['appointment_date'];
				
				$sql="INSERT INTO `appointments`(`userid`,`name`,`phone`,`email`,`message`,`appointment_date`,`created_at`) VALUES 
		              ('$id','$name','$phone','$email','$message','$date','$time')";
				mysql_query($sql) or die(mysql_error());
				header("location: $self");			
			
			} else {
				$form_values = $_POST;
			}
		
	
	}
	
	/*-------------------------------------------------
	Process Edit Form Submissions
	-------------------------------------------------*/	
	
	if (isset ($_POST['submit_edit'])){												
						
			$errors  = form_validation();
			if (empty($errors)) {
			
				$userid=$_POST['userid'];
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$message=$_POST['message'];
				$date=$_POST['appointment_date'];
				$time=date("F j, Y, g:i a");					
	
				$id = $_POST['id'];										
				$sql = "UPDATE {$table} SET `userid` = '$userid', `name`= '$name',`phone`= '$phone',`email`='$email',`message`='$message'
           				,`appointment_date`='$date',`created_at`='$time' WHERE `id` = $id LIMIT 1;";
				mysql_query($sql) or die(mysql_error());
				header("location: $self");						
			} else {
				$form_values = $_POST;
			}
	}
	
	
	/*-------------------------------------------------
	Grab All Data
	-------------------------------------------------*/
		
	
	$get_all_query = "select * from $table ";
	$all_result = mysql_query($get_all_query);	

	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Appointments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  
	   .help-inline  {color:#ff0000;}
	   
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
                                   <link rel="shortcut icon" href="assets/ico/logo.png">
  </head>

  <body>
  
 <?php include "navbar.php";?>

    <div class="container">

	<a href="<?php echo $self_url; ?>"><h3>Appointments</h3></a>
	
	<?php if(mysql_num_rows($all_result)) { ?>
	
	<table class="table table-hover">
		<tr>
			<th>S.N.</th>
			<th>User Id</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Message</th>
			<th>Appointment Date</th>
			<th>Created On</th>			
			<th>Actions</th>
		</tr>
		<?php $i=1; while( $single_row = mysql_fetch_assoc($all_result)) { ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $single_row['userid']; ?></td>
				<td><?php echo $single_row['name']; ?></td>
				<td><?php echo $single_row['phone']; ?></td>
				<td><?php echo $single_row['email']; ?></td>
				<td><?php echo $single_row['message']; ?></td>
                <td><?php echo $single_row['appointment_date']; ?></td>
                <td><?php echo $single_row['created_at']; ?></td>				
				<td>
					<a href="appointment.php?form_action=edit&id=<?php echo $single_row['id'];?>">Edit</a> | 					
					<a href="appointment.php?form_action=delete&id=<?php echo $single_row ['id'];?>">Delete</a> 
					
				</td>
			</tr>
		<?php $i++; } ?>
				
		</table>
		
		<?php } else { ?>
		Sorry !! no data available.
		<?php } ?>
		
		<hr/>
		
		<?php include "appointment_form.php"; ?>

		
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
