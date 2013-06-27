<!DOCTYPE html>
<?php
     global $ename,$ephone,$eemail,$edate,$euserId; 
     mysql_connect("localhost","root","");   //To connect to database having field (host-name,user,password)
     mysql_select_db("htnepal");             //To select database 
     $time=date("F j, Y, g:i a");
	      
	       if(isset($_POST['signin']))
		    {
			 if (preg_match("/^[0-9]{1,}$/", $_POST["UserId"]) ==  0)
			      {$euserId = "   Enter user ID correctly !!";}
			 if (preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["Name"]) ==  0)
			      {$ename = "   Enter name starting with uppercase !!";}
			 if (preg_match("/^[0-9]{7,10}$/", $_POST["Phone"]) ==  0)
			      {$ephone = "   Enter seven to ten digit phone number !!";}
			 if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $_POST["Email"]) === 0)
                  {$eemail = " Enter email correctly !!";}
             if(preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $_POST["AppointmentDate"]) === 0)				  
			      {$edate = " Enter date like (YYYY-MM-DD) !!";}
			  
			 if(preg_match("/^[0-9]{1,}$/", $_POST['UserId']) && preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST['Name']) && preg_match("/^[0-9]{7,10}$/", $_POST['Phone']) && preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $_POST["Email"]) && preg_match("/^[0-9]{2,4}-[0-9]{1,2}-[0-9]{1,2}$/", $_POST["AppointmentDate"])){
			     $sql="INSERT INTO `appointments`(`userid`,`name`,`phone`,`email`,`message`,`appointment_date`,`created_at`) VALUES 
		        ('{$_POST['UserId']}','{$_POST['Name']}','{$_POST['Phone']}','{$_POST['Email']}','{$_POST['Message']}','{$_POST['AppointmentDate']}','{$time}')";
                 $result=mysql_query($sql);         //send sql line to mysql server to be processed and return the result to result variable.
              }
			
			}
          if(isset($_GET['action']) && $_GET['action'] == 'delete'){
	        $id=$_GET['id'];
            $sql="DELETE FROM appointments WHERE id ='{$id}'";		   
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
    <?php include "navbar.php";?>
	
    <div class="container">

      <h1>Home Tuition Nepal</h1>
      <p></p>
	  
	  <hr>
	  <div class="bs-docs-example">
            <h3>Appointments</h3>
        
          </div>
		  
		  <form class="bs-docs-example form-horizontal" method ="POST" action="" enctype="multipart/form-data">
		    <div class="control-group">
              <label class="control-label" for="inputUserId">User Id</label>
              <div class="controls">
                <input type="text" name="UserId" id="inputUserId"  >
				<?php if($euserId){ ?>
						<span class="help-inline"><?php echo $euserId ;?></span>
				<?php } ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputFirstName">Name</label>
              <div class="controls">
                <input type="text" name="Name" id="inputName" placeholder="John anthon" >
				<?php if($ename){ ?>
						<span class="help-inline"><?php echo $ename ;?></span>
				<?php } ?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputPhone">Phone</label>
              <div class="controls">
                <input type="text" name="Phone" id="inputPhone" >
				<?php if($ephone){ ?>
						<span class="help-inline"> <?php echo $ephone ;?>	</span>
				<?php } ?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" name="Email" id="inputEmail">
				<?php if($eemail){ ?>
						<span class="help-inline"> <?php echo $eemail ;?>	</span>
				<?php } ?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputMessage">Message</label>
              <div class="controls">
                <textarea rows="4" name="Message" ></textarea>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputAppointmentDate">Appointment Date</label>
              <div class="controls">
               <input type="text"  name="AppointmentDate" id="inputAppointmentDate" placeholder="YYYY-MM-DD" >
			   <?php if($edate){ ?>
						<span class="help-inline"> <?php echo $edate ; ?></span>
				<?php } ?>
              </div>
            </div>
			
            <div class="control-group">
              <div class="controls">
                <button type="submit" name="signin" class="btn btn-success">Sign In</button>              
				</div>
            </div>
          </form>
		  
		  <hr size="3" width="100%"color="red">
		  
		<?php 
       //    if(isset($_POST['signin'])){	
		   $sel="SELECT * FROM appointments";
		   $result=mysql_query($sel);
		   if ($row = mysql_fetch_array($result)){
		   ?>
		  
		  <div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
				  <th>User ID</th>
                  <th>Name</th>
                  <th>Phone Number</th>
				  <th>Email</th>
                  <th>Message</th>
				  <th>Appointment Date</th>
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
                  <td><?php echo $row['userid'] ?></td>				  
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['email'] ?></td>
				  <td><?php echo $row['message'] ?></td>
				  <td><?php echo $row['appointment_date'] ?></td>
				  <td><?php echo $row['created_at'] ?></td>
				  <th><a href="appointment_edit.php?action=edit&id=<?php echo $row['id']; ?>">Edit</a> / <a href="appointment.php?action=delete&id=<?php echo $row['id']; ?> ">Delete</a></th>
                </tr>
              </tbody>
			  <?php }while($row=mysql_fetch_array($result));
			  }
			  else{
			     echo "Sorry ! no records are found." ;
			  }
			  ?>
            </table>
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
