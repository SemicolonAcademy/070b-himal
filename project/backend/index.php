<?php
	include "config.php";
	$q="select * from users";
	$result=mysql_query($q);	
	
	
if (isset($_POST["signup"]))
{
	
		$src=$_FILES['image']['tmp_name'];
		$dest='./uploads/'.$_FILES['image']['name'];
		
		if(move_uploaded_file($src,$dest))
		{
			$filename=$_FILES['image']['name'];
			}
		$pos1=strpos($filename,'.');
		$image_type=substr($filename,-(strlen($filename)-$pos1)+1);
		if($image_type=='jpeg'||$image_type=='bmp'||$image_type=='png'||$image_type=='gif')
			{continue;}
		else
		{$eimage="please select the correct image file.The image type is"." ".$image_type;}
			

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
		
	
	
		if ($username == '')
			{$eusername = "Enter your name !!";}
		if ($email == '')
			{$eemail="Enter your email !!";}
		if ($password == '')
			{$epassword="Enter password !!";}	
		if($password_check!==$password)
			{$epassword_check="Password does not match !!";}
		if ($gender== '')
			{$egender="Select a gender !!";}
		if ($first_name=='')
		 {$efirst_name="enter your first name";}
		if ($last_name=='')
		 {$elast_name="enter your last name";}
		 if ($phone=='')
		 {$ephone="enter your phone name";}
		 if ($address=='')
		 {$eaddress="enter your address";}
		
		 
		if ($checkbox == '')
			{$echeckbox="Agree to our terms and conditions !!";}
		$now=time();
		 $sql = "INSERT INTO `htnepal`.`users` (`id`, `username`,`first_name`,`middle_name`,`last_name`, `password`, `email`, `gender`,`phone`,`address`, `created_on`,`photo`) VALUES (NULL, '$username','$first_name','$middle_name','$last_name','$password', '$email', '$gender','$phone','$address', '$now','$filename')";
		mysql_query($sql);

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
	  input value
	  {color:#ff0000;}
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
  
 <?php include "navbar.php";?>

    <div class="container">
				<h3>Welcome Home Tuition Nepal Admin</h3>
				<p>This is a administrative dashboard from where you can manage all sections of your website.</p>
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
