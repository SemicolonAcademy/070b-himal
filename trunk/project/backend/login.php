<?php	
	session_start();
	if(isset($_SESSION['logged_in']))	header("location: index.php");
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE);	
	mysql_connect("localhost","root","");
	mysql_select_db("htnepal");
	
	

if(isset($_POST['submit']))
{    
    $table = "users";
	$password=addslashes($_POST["password"]);
	$email=addslashes($_POST["email"]);
    		
	if ($email == '') {				
		$err .= "Email address required ! <br/>";
	}
	if ($password == '') {
		$err .= "Password is required! <br/>";
	}		
   
	if ($email !="" && $password != "") {
		$query = "select * from `{$table}` where `email`='{$email}' and `password`='{$password}' and `type`= 1 ";
		$result = mysql_query($query);
		
		if($result && mysql_num_rows($result)) {
			
			//login success
			$user = mysql_fetch_assoc($result);
			
			//echo "<pre>"; print_r($user); echo "<pre>";
			
			$_SESSION['logged_in'] = 1;
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['email'] = $email;
			
			//echo "<pre>"; print_r($_SESSION); echo "<pre>";
			
			header ("Location: index.php");
			
		}else {
		
			$err .="Incorrect Email or Password ! <br/>";
		}
	}

	
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login - Home Tuition Nepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 235px;
      }
      .container-narrow > hr {
        margin: 50px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;        
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
	  
	    
	  .teacher {
		text-align:center;
	  }
	  
	  .text-center{
	  text-align:center;
	  }
	  
	  p.teacher-info{
		margin-top:10px;	  
	  }
	  
	  p.text-small{
	  font-size:12px;
	  color:#666;
	  }
	 
	  .about{
	   text-align:center;
	   }
		#txt
		{
		text-align : justify;
		 
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
                                  <link rel="shortcut icon" href="assets/ico/logo.png">
  </head>

  <body>

    <div class="container-narrow " >
     

      <form action="login.php" method="POST" ">
  <fieldset>
    <legend>Home Tution Nepal Login</legend>
    <label>Email</label>

    <input type="text" name="email" value="<?php echo "$email" ?>" />
	
	 <label>Password</label>
	<input type="password" name="password" /><br/>
    <input type="submit" class="btn" value="Login" name="submit"/>
	<br/><br/>			
						<?php if(isset($err)) { ?>
							<div class="alert alert-error">
								<?php echo $err; ?>
							</div>
						<?php } ?>
	
  </fieldset>
  
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
