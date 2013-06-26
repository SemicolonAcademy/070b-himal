<table border="1">

   <tr>
  
    <td>User Name</td>
	<td>Email</td>
	<td>gender</td>
		<td>Action</td>
	
   </tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("form");

//echo mysql_num_rows($results);
if(isset($_POST['signin'])) {

	$username = $_POST['user'];
	$email = $_POST['mail'];
	$gender = $_POST['gender'];
	$password = $_POST['psw'];
	
	$insert= "INSERT INTO users ( `user name`, `email`, `password`, `gender`) VALUES ( '{$username}', '{$email}', '	{$password}', '{$gender}')";
	$results = mysql_query($insert);
	
	
	}
	$select="select * from users";
    $results=mysql_query($select);
while($row=mysql_fetch_assoc($results))
{
?>
     <tr>
	   
	      <td><?php echo $row['user name'];   ?></td>
		    <td><?php echo $row['email'];   ?></td>
			  <td><?php echo $row['gender'];   ?></td>
			  <form method="POST">
		<input type="hidden" name="rowno" value="<?php echo $row['id']; ?>">
		<td><input type="submit" name="edit" class="btn btn-danger" value="Edit">/ <input type="submit" name="del" class="btn btn-danger" value="Delete"></td>
	</form>
	 
	 
	 </tr>
                
<?php 
 }


?>
</table>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
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
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Project name</h3>
      </div>

      <hr>

     <form class="bs-docs-example form-horizontal" method="POST">
     <div class="control-group">
              <label class="control-label" for="inputEmail">User Name</label>
       <div class="controls">
                <input type="text" name="user" id="inputEmail" placeholder="User Name">
		          </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" name="mail" id="inputEmail" placeholder="Email">
				          
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <div class="controls">
                <input type="password" name="psw" id="inputPassword" placeholder="Password">
				          
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
                    <input type="radio" name="gender" id="optionsRadios1" value="male">
					
                      Male
                        
			         
                           <input type="radio" name="gender" id="optionsRadios1" value="female">
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

      <hr>

      

      <hr>

      <div class="footer">
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
