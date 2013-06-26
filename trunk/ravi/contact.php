<!DOCTYPE html>
<?php 
     mysql_connect("localhost","root","");   //To connect to database having field (host-name,user,password)
     mysql_select_db("htnepal");             //To select database 
     $time=date("F j, Y, g:i a");
	      echo "insert1";
     if(isset($_POST['signin'])){
	      echo "insert";
         $sql="INSERT INTO contact(`name`,`phone`,`email`,`message`,`created_at`) VALUES 
		        ('{$_POST['Name']}','{$_POST['Phone']}','{$_POST['Email']}','{$_POST['Message']}','{$time}')";
				
         $result=mysql_query($sql);         //send sql line to mysql server to be processed and return the result to result variable.
        }
     if(isset($_GET['action']) && $_GET['action'] == 'delete'){
	       $id=$_GET['id'];
           $sql="DELETE FROM contact WHERE id ='{$id}'";		   
	       $result=mysql_query($sql);
		   }
	 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HTnepal</title>
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
          <a class="brand" href="#">HTnepal</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Users</a></li>
			  <li><a href="#contact">Profiles</a></li>
			  <li><a href="#contact">Appointments</a></li>
			  <li><a href="#contact">Reviews</a></li>
              <li><a href="#contact">Contents</a></li>
              <li><a href="#contact">Basic</a></li>			  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Home Tuition Nepal</h1>
      <p></p>
	  
	  <hr>
	  <div class="bs-docs-example">
            <h3>Contacts</h3>
        
          </div>
		  
		  <form class="bs-docs-example form-horizontal" method ="POST" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label" for="inputFirstName">Name</label>
              <div class="controls">
                <input type="text" name="Name" id="inputName" >
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputPhone">Phone</label>
              <div class="controls">
                <input type="text" name="Phone" id="inputPhone" >
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" name="Email" id="inputEmail">
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputMessage">Message</label>
              <div class="controls">
                <textarea rows="4" name="Message" ></textarea>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="button" name="signin" class="btn btn-success">Sign In</button>              
				</div>
            </div>
          </form>
		  
		  <hr size="3" width="100%"color="red">
		  
		   <?php
           if(isset($_POST['signin'])){	
		     echo "selcet2";
		   $sel="SELECT * FROM contact";
		   $result=mysql_query($sel);
		   if ($row = mysql_fetch_array($result)){
		     echo "selcet";
		   ?>
		  
		  <div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Phone Number</th>
				  <th>Email</th>
                  <th>Message</th>
				  <th>Created On</th>
				<!--  <th>Passwod</th>-->
                </tr>
              </thead>
	      <?php
		   do{ 
		   ?>
              <tbody>
                <tr>
				  <td><?php echo $row['id'] ?></td> 
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['email'] ?></td>
				  <td><?php echo $row['message'] ?></td>
				  <td><?php echo $row['created_at'] ?></td>
				  <th><a href="users.php?action=edit&id=<?php echo $row['id']; ?>">Edit</a> / <a href="contact.php?action=delete&id=<?php echo $row['id']; ?> ">Delete</a></th>
                </tr>
              </tbody>
			  <?php }while($row=mysql_fetch_assoc($result));
			  }
			  else{
			     echo "Sorry ! no records are found." ;
			  }
			  ?>
			 
            </table>
			<?php } 
			?>
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
