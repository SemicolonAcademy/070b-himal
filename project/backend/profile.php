<?php
   	include "config.php";
	
	$action = $_GET['action'];
	$form_action = (isset($_GET['form_action'])) ? $_GET['form_action'] : "insert";
	
	
	
	if ($action == "delete"){		
		
		$id=$_GET["id"];		
		
		$q="select * from profiles WHERE `id` = $id";
		$result=mysql_query($q);	
		$row=mysql_fetch_assoc($result);
			
		$del="DELETE FROM `profiles` WHERE `id` =$id  LIMIT 1";
		mysql_query($del);
		
		header('Location:profile.php');
	}
	
	
	if ($form_action == "edit" && !$_POST['user_edit']){
			
			$id=$_GET["id"];			
			
			$get_user_details_query = "select * from profiles WHERE `profiles`.`id` = $id";
			$edit_user = mysql_query($get_user_details_query);			
			$user_data = mysql_fetch_assoc($edit_user);
			
			$userid = $user_data['userid'];
            $bio = $user_data['bio'];
			$age = $user_data['age'];
			$paddress = $user_data['permanent_address'];
			$taddress = $user_data['temp_address'];
       
			$city = $user_data['teaching_city'];
			$location = $user_data['teaching_location'];
			$qualification = $user_data['teacher_qualification'];
			$experience = $user_data['teaching_experience'];
			$experiyence_year=$user_data['experiyence_years'];
			$no_student = $user_data['max_students'];
			$shift = $user_data['available_shift'];
			$timeslot = $user_data['available_time'];
			$fee = $user_data['expected_fee'];
		 
	
	}
	
	
	if (isset ($_POST['user_insert']) || isset ($_POST['user_edit']) ){
	
		
			
			/*		
				--------- Grab data for insert or update -------------
			*/
		
			
			$userid = $_POST['uid'];
            $bio = $_POST['bio'];
			$age = $_POST['age'];
			$paddress = $_POST['paddress'];
			$taddress = $_POST['taddress'];
       
			$city = $_POST['city'];
			$location = $_POST['tlocation'];
			$qualification = $_POST['qualification'];
			$experience = $_POST['experience'];
			$experiyence_year=$_POST['experiyence_year'];
			$no_student = $_POST['no_student'];
			$shift = $_POST['shift'];
			$timeslot = $_POST['time'];
			$fee = $_POST['fee'];
		 
			
		
		
			/*		
				--------- Form Validation for Insert or update -------------
			*/
		
	
			if (preg_match("/^[0-9]+$/", $_POST['uid']) ==  0) {
				$error = true; $euserid = "Enter your ID !!";
			}
			if ($bio == '') {
				$error = true;  $ebio="Enter your biodata !!";
			}
			if ($age == ''){
				$error = true; $eage="Enter your age !!";
			}	
			
			if ($paddress=='') {
				$error = true;  $epaddress="enter your permanent address";
			}
						
			if ($taddress=='') {
				$error = true;  $etaddress="enter yourtemporary address";
			}
			

			
			if ($location=='') { 
				$error = true; 	$elocation="enter teaching location";
			}
			
			if ($qualification==''){
				$error = true; 	$equalification="enter your qualification";
			}
			if ($experience==''){
				$error = true; 		$eexperience="enter your experience";
			}
			if ($fee==''){
				$error = true; 	$efee="enter Expected Fee";
			}
			
			
			
			/*		
				--------- Check if Error is not present. Build queries. -------------
			*/
			

						
			if (!$error) {		

				$time=time();		

				if (isset($_POST["user_edit"])) {				
					
					$id=$_POST['id'];
					
					
					$sql = "UPDATE `profiles` SET `userid`=  '{$userid}', `bio`=' {$bio}', `age`=' {$age}', `permanent_address`=' {$paddress}', `temp_address`=' {$taddress}', `teaching_city`=' {$city }', `teaching_location`=' {$location}', `teacher_qualification`='{ $qualification}', `teaching_experience`=' {$experience}', `experience_years`='{$experiyence_year}', `max_students`=' {$no_student}', `expected_fee`=' {$fee}', `available_shift`=' {$shift}', `available_timeslot`=' { $timeslot}', `created_at`=' { $time}' WHERE `profiles`.`id` = $id LIMIT 1;";
					
				
				} else {			

					echo $sql = "INSERT INTO `profiles` 
			       ( `userid`, `bio`, `age`, `permanent_address`, `temp_address`, `teaching_city`, `teaching_location`, `teacher_qualification`, `teaching_experience`, `experience_years`, `max_students`, `expected_fee`, `available_shift`, `available_timeslot`, `created_at`) 
			  VALUES ( ' {$userid}', ' {$bio}', '{$age}', '{ $paddress}', ' { $taddress}', '{$city}', '  {$location}', ' {$qualification}', '  {$experience}', '{   $experiyence_year}', ' {$no_student}', ' {$fee}', ' {$shift}', '{ $timeslot}', ' {$time}')";
					

				}

				/*		
					--------- If query executes succesfully redirect to base page. -------------
				*/
				
				//echo $sql;
				mysql_query($sql) or die(mysql_error());
			    header('location: profile.php');
			
			
			} 
		
	
	}
	
	/*		
		--------- Grab data for table -------------
	*/
					
	
	$all_users_query="select * from profiles";
	$all_users=mysql_query($all_users_query);	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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

	<h3>Profiles</h3>
			
	<table class="table table-hover">
		<tr>
			
			<th>S.N</th>
			<th>Biodata</th>
			<th>Temporary Address</th>
			<th>Teaching City</th>
			<th>Teaching Location</th>
			<th>Expected Fee</th>
			<th>Available shift</th>
			<th>Actions</th>
		</tr>
		<?php $i=1; while( $row =mysql_fetch_assoc($all_users)) { ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['bio']; ?></td>
				<td><?php echo $row['temp_address']; ?></td>
				<td><?php echo $row['teaching_city']; ?></td>
				<td><?php echo $row['teaching_location']; ?></td>
				<td><?php echo $row['expected_fee']; ?></td>
				<td><?php echo $row['available_shift']; ?></td>

				<td>
					<a href="profile.php?form_action=edit&id=<?php echo $row[id];?>">Edit</a> | 
					<a href="profile.php?action=delete&id=<?php echo $row [id];?>">Delete</a> 
					
				</td>
			</tr>
		<?php $i++; } ?>
				
		</table>
		
		<hr/>
		
		<?php include "profile_form.php"; ?>

		
		

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
