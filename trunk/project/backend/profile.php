<?php
   	include "config.php";
	$id=$_GET['id'];
	$user_id = $id;
	
//	$action = $_GET['action'];
	$form_action=$_GET['form_action'];
//	$form_action = (isset($_GET['form_action'])) ? $_GET['form_action'] : "insert";
	
	
	
/*	if ($action == "delete"){		
		
		$id=$_GET["id"];		
		
		$q="select * from profiles WHERE `id` = $id";
		$result=mysql_query($q);	
		$row=mysql_fetch_assoc($result);
			
		$del="DELETE FROM `profiles` WHERE `id` =$id  LIMIT 1";
		mysql_query($del);
		
		header('Location:profile.php');
	}
*/	
	
	if ($form_action == "edit" && !$_POST['user_edit']){
			
			$id=$_GET["id"];			
			
			$get_user_details_query = "select * from profiles WHERE `profiles`.`userid` = $id";
			$edit_user = mysql_query($get_user_details_query);			
			$user_data = mysql_fetch_assoc($edit_user);
			
			$userid = $id;
            $bio = $user_data['bio'];
			$age = $user_data['age'];
			$paddress = $user_data['permanent_address'];
			$taddress = $user_data['temp_address'];
            $teaching_location = $user_data['teaching_location'];
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
		
			
			$user_id = $_POST['user_id'];
            $bio = $_POST['bio'];
			$age = $_POST['age'];
			$paddress = $_POST['paddress'];
			$taddress = $_POST['taddress'];
			$teaching_location = $_POST['teaching_location'];
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
		
	
		/*	if ($_POST['uid'] == "") {
				$error = true; $euserid = "Enter your user ID !!";
			} */
			if ($bio == '') {
				$error = true;  $ebio="Enter your biodata !!";
			}
			if (preg_match("/^[0-9]{1,3}+$/", $_POST['age']) ==  0){
				$error = true; $eage="Enter your age correctly !!";
			}	
			
			if ($paddress=='') {
				$error = true;  $epaddress="enter your permanent address";
			}
						
			if ($taddress=='') {
				$error = true;  $etaddress="enter yourtemporary address";
			}
			
			if ($qualification==''){
				$error = true; 	$equalification="enter your qualification";
			}
			if ($experience==''){
				$error = true; 		$eexperience="enter your experience";
			}
			if (preg_match("/^[0-9.]+$/", $_POST['fee']) ==  0){
				$error = true; 	$efee="enter Expected Fee";
			}
			
			
			
			/*		
				--------- Check if Error is not present. Build queries. -------------
			*/
			

						
			if (!$error) {		

				$time=time();		

				if (isset($_POST["user_edit"])) {				
					
					$id=$_POST['id'];
					
					
					$sql = "UPDATE `profiles` SET `userid`=  '{$user_id}', `bio`=' {$bio}', `age`=' {$age}', `permanent_address`='{$paddress}', `temp_address`='{$taddress}',  `teaching_location`=' {$teaching_location}', `teacher_qualification`='{$qualification}', `teaching_experience`=' {$experience}', `experience_years`='{$experiyence_year}', `max_students`=' {$no_student}', `expected_fee`=' {$fee}', `available_shift`=' {$shift}', `available_timeslot`=' {$timeslot}', `created_at`=' {$time}' WHERE `profiles`.`userid` = $id LIMIT 1;";
					
				
				} else {		


					/*echo "<pre>";
					print_r($_POST);
					echo "</pre>";
					exit;*/
					
					$userid=$_POST['user_id'];
					echo $sql = "INSERT INTO `profiles` 
			       ( `userid`, `bio`, `age`, `permanent_address`, `temp_address`, `teaching_city`, `teaching_location`, `teacher_qualification`, `teaching_experience`, `experience_years`, `max_students`, `expected_fee`, `available_shift`, `available_timeslot`, `created_at`) 
			  VALUES ( ' {$user_id}', ' {$bio}', '{$age}', '{$paddress}', ' {$taddress}', '  {$teaching_location}', ' {$qualification}', '  {$experience}', '{$experiyence_year}', ' {$no_student}', ' {$fee}', ' {$shift}', '{$timeslot}', ' {$time}')";
					

				}

				/*		
					--------- If query executes succesfully redirect to base page. -------------
				*/
				
				//echo $sql;
				mysql_query($sql) or die(mysql_error());
			    header('location: users.php');
			
			
			} 
		
	
	}
	
	/*		
		--------- Grab data for table -------------
	*/
					
	
	$all_users_query="select * from profiles";
	$all_users=mysql_query($all_users_query);


	$get_user_query = "select * from users WHERE `users`.`id` = $id";
	$user_detail = mysql_query($get_user_query);			
	$user_detail = mysql_fetch_assoc($user_detail);
			
			
			
	
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
                                   <link rel="shortcut icon" href="assets/ico/logo.png">
  </head>

  <body>
  
 <?php include "navbar.php";?>

    <div class="container">

	
	<h3>
	<?php 
	
	if ($form_action == "edit") echo "Edit Profile of ";						
	else echo "Add Profile of ";
	
	echo "\"".$user_detail['first_name'] . " " . $user_detail['middle_name'] . " " . $user_detail['last_name']."\"";
	?>
						
	</h3>					
						
	

		
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
