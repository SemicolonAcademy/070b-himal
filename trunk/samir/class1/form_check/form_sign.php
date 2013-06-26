<?php
	if (isset($_POST["signup"]))
	{
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$password_check=$_POST["password_check"];
		$sex=$_POST["sex"];
		$checkbox=$_POST["checkbox"];
	}
		
	?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
	.container .error
	{color:#f00;
	}
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

    <div class="container">

      <form class="form-signin" action="form_sign.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
		Username:
        <input type="text"  class="input-block-level" name="username"placeholder="Email address">
		<class="error"><?php if($username==""){ echo"username empty<br/>";}?></class>
		Email:
		<input type="email" class="input-block-level" name="email"placeholder="Email address">
		<class="error"><?php if($email==""){ echo"Email empty<br/>";}?></class>
		Password:
        <input type="password" class="input-block-level" name="password" placeholder="Password">
		<class="error"><?php if($password==""){ echo"Password empty<br/>";}?></class>
		Confirm Password:
		<input type="password" class="input-block-level" name="password_check"placeholder="Password">
		<class="error"><?php if($password_check!==$password){ echo"Password does not match<br/>";}?></class>
		Sex:
		<label class="radio">
		Male:
			<input type="radio" name="sex" id="male">
		</label>
		<label class="radio">
		<class="error"><?php if($sex==""){ echo"Select gender<br/>";}?></class>
		Female:
			<input type="radio" name="sex" id="female" >
		</label>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" name="checkbox">I agree to the terms and conditions
        </label>
		<class="error"><?php if($checkbox==""){ echo"agree to the terms<br/>";}?><class>
        <button class="btn btn-large btn-primary" type="submit" name="signup">Sign in</button>
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
