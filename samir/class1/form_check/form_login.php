<?php
	if (isset($_POST["signup"]))
	{
		
		echo  "<pre>";
		print_r($_POST);
		echo  "</pre>"; 
		
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$password_check=$_POST["password_check"];
		$sex=$_POST["sex"];
		$checkbox=$_POST["checkbox"];
		
		if ($username == ''){
			$eusername = "Username Empty!";
		} 
		
		if ($email == ''){
		
			$eemail = "Email Empty";
		}
	}
		
?>
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
	  {color:#ff0000;
	  }
	  .span2{text-align:right;
			font-size:15px;}
	.span p{margin-top:3px;
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
	<div class="row">
		
		<div class="span10">
  
		<form action="form_login.php" method="POST">
		
		Username:
		<input type="text" name="username" value="<?php if($username) echo $username;?>">
		
		<?php if($eusername){ ?>
			<span class="error"> <?php echo $eusername; ?>	</span>
		<?php } ?>
		
		
		<br/><br/>
		
		Email:<input type="text" name="email">
		<?php if($eemail){ ?>
			<span class="error"> <?php echo $eemail; ?>	</span>
		<?php } ?>
		<br/><br/>
		
		
		Password: <input type="password" name="password">
		<?php if($password==""){ echo"Password empty<br/>";}?><br/>
		<br/><br/>
		
		Confirm Password: <input type="password" name="password_check">
		<?php if($password_check!==$password){ echo"Password does not match<br/>";}?><br/>
		<br/><br/>
		
		Sex: <br/>
		Male: <input type="radio" name="sex" id="male" value="m" <?php if ($sex == 'm') echo 'checked="checked"' ?> >
		Female: 	<input type="radio" name="sex" id="female" value="f" <?php if ($sex == 'f') echo 'checked="checked"' ?> >
		<br/>	
		<?php if($sex==""){ echo"Select gender<br/>";}?></class>
     
         <input type="checkbox" value="remember-me" name="checkbox">I agree to the terms and conditions
		<?php if($checkbox==""){ echo"agree to the terms<br/>";}?>
        <input type="submit" name="signup" value="sign in">
		</div>
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
