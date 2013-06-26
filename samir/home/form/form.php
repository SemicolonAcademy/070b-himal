<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cms");
	$q="select * from users";
	$result=mysql_query($q);	 
	$now=time();
if (isset($_POST["signup"]))
{
		/*echo  "<pre>";
		print_r($_POST);
		echo  "</pre>"; */

		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$password_check=$_POST["password_check"];
		$sex=$_POST["sex"];
		$checkbox=$_POST["checkbox"];
		if ($username == '')
			{$eusername = "Enter your name !!";}
		if ($email == '')
			{$eemail="Enter your email !!";}
		if ($password == '')
			{$epassword="Enter password !!";}	
		if($password_check!==$password)
			{$epassword_check="Password does not match !!";}
		if ($sex== '')
			{$esex="Select a gender !!";}
		if ($checkbox == '')
			{$echeckbox="Agree to our terms and conditions !!";}
		$now=time();
		$sql = "INSERT INTO `cms`.`users` (`id`, `username`, `password`, `email`, `gender`, `created_on`) VALUES (NULL, '$username', '$password', '$email', '$sex', '$now')";
		mysql_query($sql);
		header('Location: form.php');
		
		
	
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
	  .error
	  {color:#ff0000;}
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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<h3>Latest Users</h3>
			
		<table class="table table-bordered">
		<tr>
		<td>S.N.</td>
		<td>Username</td>
		<td>Password</td>
		<td>Email</td>
		<td>Gender</td>
		<td>created on</td>
		<td>Actions</td>
		</tr>
		<?php
		while($row=mysql_fetch_assoc($result))
		{ 
			?>
			<tr>
			<td><?php echo $row[id];?></td>
			<td><?php echo $row[username]; ?></td>
			<td><?php echo $row[password];?></td>
			<td><?php echo $row[email]; ?></td>
			<td><?php echo $row[gender]; ?></td>
			<td><?php echo $row[created_on]; ?></td>
			<td><a href="edit.php?id=<?php echo $row[id];?>">edit</a> &nbsp <a href="del.php?id=<?php echo $row[id];?>">delete</a></td>
			</tr>
		<?php
		}?>
		
		
		</table>


<h3>Add new user</h3>
		<form class="form-horizontal" action="form.php" method="POST">
			<div class="control-group">
				<label class="control-label" >Username</label>
				<div class="controls">
					<input type="text"  name="username" placeholder="Username" value="<?php if($username) echo $username;?>" >
					<span class="error"><?php if($eusername){ echo $eusername;} ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >Email</label>
				<div class="controls">
					<input type="text"  name="email" placeholder="Email" value="<?php if($email) echo $email;?>">
				<span class="error"><?php if($eemail){echo $eemail;} ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<input type="password"  name="password" placeholder="Password">
					<span class="error"><?php if($epassword){echo $epassword;} ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >Confirm Password</label>
				<div class="controls">
					<input type="password"  name="password_check" placeholder="Confirm Password" >
					<span class="error"><?php if($epassword_check){echo $epassword_check;} ?></span>
				</div>
			</div>
			
				<div class="control-group">
					<label class="control-label" for="Sex">Sex:</label>
					<div class="controls">
						<input type="radio" name="sex"  value="m" <?php if ($sex == 'm') echo 'checked="checked"' ?>>&nbspMale
						<input type="radio" name="sex"  value="f" <?php if ($sex == 'f') echo 'checked="checked"' ?>>&nbspFemale
						<span class="error"><?php if($esex){ echo $esex;} ?></span>
					
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
			<button type="submit" class="btn btn-success" name="signup">Sign up</button>
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
