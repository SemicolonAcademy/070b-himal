<?php
mysql_connect("localhost","root","") or die("could not"); //conection to mysql database
mysql_select_db("cms"); 

if(isset($_GET['action']) && $_GET['action'] == 'edit') {  // Edite
	    
		 $id = $_GET['id']; // take the corresponding id to be deleted
			   
				 
		  if(isset($_POST['signin']))
		  {

		      $username=$_POST['user'];
			   $email=$_POST['mail'];
			   $psw=$_POST['psw'];
			  $gender=$_POST['gender'];
		
		
			
			 
	         
			  $edit="UPDATE users SET username= '{$username}', email='{$email}',password='{$psw}',gender='{$gender}' WHERE id='{$id}'";
	          $r = mysql_query($edit) or mysql_error(); // query to mysql and take the result and store to $result
			  header ("location: internetLab.php");
			  
			  }
}

$q="select * from users WHERE  `id`='{$id}' limit 1";
$result = mysql_query($q);
$row=mysql_fetch_assoc($result);
	
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

      <h1>Edite the Data</h1>
	  <br>
     
	  <form action="user_action.php?action=edit&id=<?php echo $_GET['id']; ?>" class="bs-docs-example form-horizontal" method="POST">
     <div class="control-group">
              <label class="control-label" for="inputEmail">User Name</label>
       <div class="controls">
                <input type="text" name="user" id="inputEmail" value="<?php echo $row['username']; ?>">
		          </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" name="mail" id="inputEmail" value="<?php echo $row['email']; ?>">
				          
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <div class="controls">
                <input type="password" name="psw" id="inputPassword" value="<?php echo $row['password']; ?>">
				          
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputEmail">Confirm password </label>
              <div class="controls">
               
				<input type="password" name="cpsw" value="" id="inputPassword" placeholder="Conform Password">
				 
			 
         
              </div>
            </div>
			<div class="control-group">
			              <label class="control-label" for="inputPassword">Sex</label>
			      <div class="controls">
            <input type="radio" name="gender"  value="male" <?php echo ($row['gender'] == 'male' ) ? 'checked' : ''; ?>>
					
                      Male
                        
			         
            <input type="radio" name="gender" value="female" <?php echo ($row['gender'] == 'female' )? 'checked' : ''; ?>>
                            Female
		     
						        </div>
          
			
			
			    </div>
            <div class="control-group">
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox" name="term"> Terms &amp; Condition
		
                </label>
                <button type="submit" name="signin" class="btn">Sign in</button>
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
