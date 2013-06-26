<?php

mysql_connect("localhost","root","") or die("could not"); //conection to mysql database
mysql_select_db("cms"); // connect to the specific database


if(isset($_GET['action']) && $_GET['action'] == 'delete') {  
	
	$id = $_GET['id']; // take the corresponding id to be deleted
	$q = "DELETE FROM users WHERE id= '{$id}'"; // query delete
	$result = mysql_query($q); // query to mysql and take the result and store to $result
	//header ("location: internetLab.php");
}


if(isset($_POST['signin'])) {
print_r($_FILES);

      $src=$_FILES['img']['tmp_name'];
      $destination = "./upload/". $_FILES['img']['name'];
if( move_uploaded_file($src,$destination))
 {
   echo "File Uploaded";
 }
else
{
 echo " Uploaded fails";
}
exit();

	$username = $_POST['user'];
	$email =    $_POST['mail'];
	$password = md5($_POST['psw']);
	$time = date("Y-m-d");
	    
		   if(isset($_POST['gender']))
		   {     
		          $gender = $_POST['gender'];
	             $insert  = "INSERT INTO users ( `username`, `password`, `email`, `gender`, `created_on`,`image`) VALUES (  '{$username}' , '{$password}' , '{$email}' , '{$gender}' , '{$time}' ,'{$_FILES['img']['name']}')";
	             $result = mysql_query($insert); // query to mysql and take the result and store to $result
			}
           /* else
               {			
	              $insert  = "INSERT INTO users ( `username`, `password`, `email`, `gender`, `created_on`) VALUES (  '{$username}' , '{$password}' , '{$email}' , '' , '{$time}' )";
	             $result = mysql_query($insert); // query to mysql and take the result and store to $result
                                    
	            }*/
	
}



         $q="select * from users"; //fetch * all from table user (tablename) without any connection
         $result=mysql_query($q); // query to mysql and take the result and store to $result
         //echo mysql_num_rows($result); // display number of rows from queried table
       // print_r ($result); // simple display withour any formatting 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Wrb Page</title>
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
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
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
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
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
                                   <style type="text/css">
<!--
.style1 {color: #00FF33}
.style3 {color: #FF0000}
-->
                                   </style>
</head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Home Automation </h3>
      </div>

	  

	  <h5>Latest Users</h5>	  
<table class="table table-hover">
<tr>
<td>User Name</td>
<td>Email</td>
<td>Gender</td>
<td>Action</td>

</tr>
<?php

while($row=mysql_fetch_assoc($result))  // rows are in a loop .. row by row so take each row at one time
{  
   ?> 
	<tr>
	<td><?php echo $row['username']; ?></td> 
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['gender']; ?></td>
	
	<td>
		<a href="user_action.php?action=edit&id=<?php echo $row['id']; ?>">Edit</a> - <a href="internetLab.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a></td>
	</td>
	
   </tr>
<?php } ?>

</table>



<h5>Add New User</h5>	  
      <hr>

      <form class="bs-docs-example form-horizontal" method="POST" enctype="multipart/form-data" >
     <div class="control-group">
              <label class="control-label" for="inputEmail">User Name</label>
       <div class="controls">
                <input type="text" name="user" id="inputEmail" placeholder="User Name">
		 <?php if(isset($_POST['signin']) && $_POST['user']==""){?> <span class="help-inline style3">Field is empty</span> <?php }?>
         </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" name="mail" id="inputEmail" placeholder="Email">
				 <?php if(isset($_POST['signin']) && $_POST['mail']==""){?> <span class="help-inline style3">Field is empty</span> <?php }?>
         
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <div class="controls">
                <input type="password" name="psw" id="inputPassword" placeholder="Password">
				 <?php if(isset($_POST['signin']) && $_POST['psw']==""){?> <span class="help-inline style3">Field is empty</span> <?php }?>
         
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputEmail">Confirm password </label>
              <div class="controls">
               
				<input type="password" name="cpsw" value="<?php if(isset($_POST['signin'])) echo $_POST['cpsw']; ?>" id="inputPassword" placeholder="Conform Password">
				<?php if(isset($_POST['signin']) && $_POST['cpsw']!=$_POST['psw']){ ?> <span class="help-inline style2"> Password mot matched</span>
			<?php   
			} ?> 
			<?php if(isset($_POST['signin']) && $_POST['cpsw']==""){ ?> <span class="help-inline style2"> Conform Password is empty</span>
			<?php   
			} ?> 
         
              </div>
            </div>
			<div class="control-group">
			              <label class="control-label" for="inputPassword">Sex</label>
			      <div class="controls">
                    <input type="radio" name="gender" id="optionsRadios1" value="male" >
					
                      Male
                        
			         
                           <input type="radio" name="gender" id="optionsRadios1" value="female" >
                            Female
		    <?php if(isset($_POST['signUp']) && $_POST['gender']==""){ ?> <span class="help-inline style2"> Sex is not selected</span>
			<?php   
			} ?> 
						        </div>
          
			
			
			    </div>
				<div class="control-group">
					<input type="file" name="img" />
					</div>
            <div class="control-group">
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox" name="term"> Terms & Condition</input>
		
                </label>
                <button type="submit" name ="signin"class="btn">Sign in</button>
              </div>
            </div>
		
          </form>
    <hr>

		 
	
	
     

      <hr>

      <div class="footer">
	   <table border="1">
		 
		  <tr>
		  <td>User Name</td>
		  <td>Email</td>
		  <td>Password</td> 
		  </tr>
		 
		 <tr>
		  <td><?php echo isset($_POST['user']) ? $_POST['user'] : ""; ?></td>
		  <td><?php echo isset($_POST['mail']) ? $_POST['mail'] : ""; ?></td>
		  <td><?php echo isset($_POST['psw']) ? $_POST['psw'] : ""; ?></td>
		  </tr>
		  
		  
		  </table>
        <p>&copy; Company 2012</p>
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
