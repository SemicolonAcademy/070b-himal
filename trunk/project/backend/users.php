<?php
	include "config.php";
	
	$action = $_GET['action'];
	$form_action = (isset($_GET['form_action'])) ? $_GET['form_action'] : "insert";
	
 /*---------------------Status checking and update-------------------------------------*/	
	
	if($form_action == "status"){
	    
	   $id=$_GET["id"];
	   
	    $q="select * from users WHERE `id` = $id";
		$result=mysql_query($q);	
		$row=mysql_fetch_assoc($result);
	    if($row['status']==0){
	        $sql = "UPDATE `users` SET `status`=1 WHERE `id`=$id LIMIT 1";
			}
		else{
		    $sql = "UPDATE `users` SET `status`=0 WHERE `id`=$id LIMIT 1";
			}
	    mysql_query($sql);
        header('location:users.php');		
	}
  
/*---------------------Recommendation checking and update------------------------------------*/
  
	if($form_action == "featured"){
	    
	   $id=$_GET["id"];
	   
	    $q="select * from users WHERE `id` = $id";
		$result=mysql_query($q);	
		$row=mysql_fetch_assoc($result);
	    if($row['featured']==0){
	        $sql = "UPDATE `users` SET `featured`=1 WHERE `id`=$id LIMIT 1";
			}
		mysql_query($sql);
        header('location:users.php');		
	}
	
/*---------------------Deleting particular user-------------------------------------*/	
	
	
	if ($action == "delete"){		
		
		$id=$_GET["id"];		
		
		$q="select * from users WHERE `id` = $id";
		$result=mysql_query($q);	
		$row=mysql_fetch_assoc($result);	
		$imagename=$row["photo"];
		$dest='./uploads/'.$imagename;
		@unlink($dest);
			
		$del="DELETE FROM `users` WHERE `id` =$id  LIMIT 1";
		mysql_query($del);
		
		header('Location:users.php');
	}
	
	/*---------------------Grab data for editing-------------------------------------*/	
	
	if ($form_action == "edit" && !$_POST['user_edit']){
			
			$id=$_GET["id"];			
			
			$get_user_details_query = "select * from users WHERE `users`.`id` = $id";
			$edit_user = mysql_query($get_user_details_query);			
			$user_data = mysql_fetch_assoc($edit_user);
			
			$imagename= $user_data["photo"];
			
			$username= $user_data["username"];
			$first_name=$user_data["first_name"];
			$middle_name=$user_data["middle_name"];
			$last_name=$user_data["last_name"];
			$email=$user_data["email"];
			$password=$user_data["password"];
			$password_check= $user_data["password"];
			$gender=$user_data["gender"];
			$phone=$user_data["phone"];
			$address=$user_data["address"];
			
			
	
	}
	
	
	if (isset ($_POST['user_insert']) || isset ($_POST['user_edit']) ){
	
		/*		
			--------- Handle file upload first -------------
		*/
		
			if ($_FILES) {
			
				$src=$_FILES['image']['tmp_name'];
				$dest='./uploads/'.$_FILES['image']['name'];
				
				$filename=$_FILES['image']['name'];
			
			
				$pos1=strpos($filename,'.');
				$image_type=substr($filename,-(strlen($filename)-$pos1)+1);
				$allowed_type = array ('jpeg','jpg','bmp','png','gif'); 
			
				if(!in_array($image_type, $allowed_type)) {
					$eimage= "Disallowed file type. Please upload jpeg / bmp / png / gif only";
					$error = true;		
				}else {		
					if (!move_uploaded_file($src,$dest)){
						$eimage= "File upload failed. Retry later.";
						$error = true;		
					}
				}
				
			}	
			
			
			/*		
				--------- Grab data for insert or update -------------
			*/
		
			
			$username=$_POST["username"];
			$first_name=$_POST["first_name"];
			$middle_name=$_POST["middle_name"];
			$last_name=$_POST["last_name"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$password_check=$_POST["password_check"];
			$gender=$_POST["gender"];
			$phone=$_POST["phone"];
			$address=$_POST["address"];
			
			
		
		
			/*		
				--------- Form Validation for Insert or update -------------
			*/
		
	
            if ($username ==  '') {
				$error = true; $eusername = "Enter your name !!";
			}
			 if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $_POST["email"]) === 0) {
				$error = true;  $eemail="Enter your email correctly !!";
			}
			if ($password == ''){
				$error = true; $epassword="Enter password !!";
			}	
			if($password_check !==$password) {
				$error = true;  $ecofirm_password="Password does not match !!";
			}
			
			if ($gender== '') { 
				$error = true;  $egender="Select a gender !!";
			}
			if (preg_match("/^[a-zA-Z -]+$/", $_POST['first_name']) ==  0) {
				$error = true;  $efirst_name="enter your first name correctly !!";
			}
		    if (preg_match("/^[a-zA-Z -]+$/", $_POST['last_name']) ==  0) {
				$error = true; $elast_name="enter your last name correctly !! ";
			}
			
			if (preg_match("/^[+0-9]{7,14}$/", $_POST['phone']) ==  0) { 
				$error = true; $ephone="enter your phone name correctly !!";
			}
			
			if ($address==''){
				$error = true; $eaddress="enter your address";
			}
			
			
			/*		
				--------- Check if Error is not present. Build queries. -------------
			*/
			

						
			if (!$error) {		

				$now=time();		

				if (isset($_POST["user_edit"])) {				
					
					$id=$_POST['id'];
					
					//delete old image
					$imagename=$_POST["imagename"];		
					$dest_del='./uploads/'.$imagename;
					if($src) @unlink ($dest_del);
					
					$sql = "UPDATE `users` SET `username` = '$username', `first_name`= '$first_name',`middle_name`= '$middle_name',`last_name`= '$last_name', `password`='$password', `email`='$email', `gender`='$gender', `created_on`='$now',`photo`='$filename',`phone`='$phone',`address`='$address' WHERE `id` = $id LIMIT 1;";
					
				
				} else {			

					echo $sql = "INSERT INTO `htnepal`.`users` (`id`, `username`,`first_name`,`middle_name`,`last_name`, `password`, `email`, `gender`,`phone`,`address`, `created_on`,`photo`) VALUES (NULL, '$username','$first_name','$middle_name','$last_name','$password', '$email', '$gender','$phone','$address', '$now','$filename')";
					

				}

				/*		
					--------- If query executes succesfully redirect to base page. -------------
				*/
				
				echo $sql;
				mysql_query($sql) or die(mysql_error());
				//header('location: users.php');
			
			
			} 
		
	
	}
	
	/*		
		--------- Grab data for table -------------
	*/
		
	
	$all_users_query="select * from users";
	$all_users=mysql_query($all_users_query);	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
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
                                   <style type="text/css">
<!--
.style1 {color: #0000FF}
-->
                                   </style>
</head>

  <body>
  
 <?php include "navbar.php";?>

    <div class="container">

	<h3 class="style1">Users</h3>
			
	<table class="table table-hover">
		<tr>
			<th>S.N.</th>
			<th>Images</th>
		<!--<th>Username</th>-->
			<th>Name</th>
			<th>Email</th>
		<!--<th>Gender</th> -->
			<th>Phone</th>
		<!--<th>Address</th>-->
			<th>Status</th>
			<th>Featured</th>
			<th>Created on</th>
			<th>Actions</th>
		</tr>
		<?php $i=1; while( $user =mysql_fetch_assoc($all_users)) { ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><img width="100" src="uploads/<?php echo $user['photo']; ?>" /></td>
			<!--<td><?php echo $user['username']; ?></td>-->
				<td><?php echo $user['first_name'] . " " . $user['middle_name'] . " " . $user['last_name'];?></td>
				<td><?php echo $user['email']; ?></td>
			<!--<td><?php echo ($user['gender'] == "m") ? "Male" : "Female"; ?></td>-->
				<td><?php echo $user['phone']; ?></td>
			<!--<td><?php echo $user['address']; ?></td>-->
				<td><?php echo ($user['status'] == 0) ? "Inactive" : "Active"; ?></td>
				<td><?php echo ($user['featured'] == 0) ? "" : "Recommended"; ?></td>
				<td><?php echo date("m-d-Y", $user['created_on']); ?></td>
				<td>
				    <a href="users.php?form_action=status&id=<?php echo $user[id];?>"><?php if($user['status']==0){?>
					        Active<?php } else { ?>Inactive<?php } ?></a> | 
					<a href="users.php?form_action=featured&id=<?php echo $user[id];?>"><?php if($user['featured']==0){?>
					        Recommend |<?php } ?></a>  		
					<a href="users.php?form_action=edit&id=<?php echo $user[id];?>">Edit</a> | 
					<a href="profile.php?id=<?php echo $user[id];?>">Add Profile</a> |
					<a href="users.php?action=delete&id=<?php echo $user [id];?>">Delete</a> 
					
				</td>
			</tr>
		<?php $i++; } ?>
				
	  </table>
		
		<hr/>
		
		<?php include "form.php"; ?>

		
		

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
