<?php
	include "config.php";
	
	$id=$_GET["id"];
	
	$q="select * from users WHERE `users`.`id` = $id";
	$result=mysql_query($q);
	$row=mysql_fetch_assoc($result);
	$imagename=$row["photo"];
	
	if (isset($_POST["signup"]))
	{
		$id=$_GET["id"];
		
		$imagename=$_GET["imagename"];		
		$dest_del='./uploads/'.$imagename;
		
		$src=$_FILES['image']['tmp_name'];
		$dest='./uploads/'.$_FILES['image']['name'];
		
		if(move_uploaded_file($src,$dest))
		{
			$filename=$_FILES['image']['name'];
			}
			

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
		$checkbox=$_POST["checkbox"];
		
		$now=time();
		
		if($src)
		{
		unlink ($dest_del);
		$sql = "UPDATE `users` SET `username` = '$username', `first_name`= '$first_name',`middle_name`= '$middle_name',`last_name`= '$last_name', `password`='$password', `email`='$email', `gender`='$gender', `created_on`='$now',`photo`='$filename',`phone`='$phone',`address`='$address' WHERE `users`.`id` = $id LIMIT 1;";
		mysql_query($sql);
		}
		else
		{
		$sql = "UPDATE `users` SET `username` = '$username', `first_name`= '$first_name',`middle_name`= '$middle_name',`last_name`= '$last_name', `password`='$password', `email`='$email', `gender`='$gender', `created_on`='$now',`photo`='$imagename',`phone`='$phone',`address`='$address' WHERE `users`.`id` = $id LIMIT 1;";
		mysql_query($sql);
		}
        header('Location: users.php');
		
	}
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
 <h3>Edit user</h3>
		<form class="form-horizontal" action="edit.php?id=<?php echo $id;?>& imagename=<?php echo $imagename;?>" method="POST" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" >Username</label>
				<div class="controls">
					<input type="text"  name="username"  value="<?php echo $row[username];?>" >
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >First name</label>
				<div class="controls">
					<input type="text"  name="first_name" value="<?php echo $row[first_name];?>" >
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Middle name</label>
				<div class="controls">
					<input type="text"  name="middle_name" value="<?php echo $row[middle_name];?>" >
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Last name</label>
				<div class="controls">
					<input type="text"  name="last_name" value="<?php echo $row[last_name];?>">
				</div>
			</div>
				
			<div class="control-group">
				<label class="control-label" >Email</label>
				<div class="controls">
					<input type="text"  name="email" value="<?php echo $row[email];?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<input type="password"  name="password" value="<?php echo $row[password];?>">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Confirm Password</label>
				<div class="controls">
					<input type="password"  name="password_check" placeholder="Confirm Password" >
				</div>
			</div>
					
			<div class="control-group">
				<label class="control-label">Image</label>
				<div class="controls">
					<input type="file" name="image" <?php if($row['photo'])$image[name]=$row['photo'];?>>
					<?php if($row['photo']){?><img width="100" src="uploads/<?php echo $row['photo']; ?>" /><?php }?>
				</div>
			</div>
	
			
				<div class="control-group">
					<label class="control-label" for="gender">Gender:</label>
					<div class="controls">
						<input type="radio" name="gender"  value="m" <?php if ($row[gender] == 'm') echo 'checked="checked"' ?>>&nbspMale
						<input type="radio" name="gender"  value="f" <?php if ($row[gender] == 'f') echo 'checked="checked"' ?>>&nbspFemale
					</div>
				</div>
			
			<div class="control-group">
				<label class="control-label" >Phone</label>
				<div class="controls">
					<input type="text"  name="phone" value="<?php echo $row[phone];?>" >
				</div>
			</div>
				
			<div class="control-group">
				<label class="control-label" >Address</label>
				<div class="controls">
					<input type="text"  name="address" value="<?php echo $row[address];?>" >
					<span class="error"><?php if($eusername){ echo $eusername;} ?></span>
				</div>
			</div>
		
			<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox" name="checkbox" <?php if ($checkbox) echo 'checked="checked"' ?>> I agree to the terms and conditions.
					<span class="help-inline">
					<?php if($echeckbox){ ?>
						<span class="error"> <?php echo $echeckbox; ?>	</span>
					<?php } ?>
				</label>
			<button type="submit" class="btn btn-success" name="signup">Edit</button>
			</div>
			</div>
		</form>

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
