<?php    
   include "config.php";
   $id=$_GET['id'];
   
   $sql="select * from users,profiles where users.id=profiles.userid and users.id=$id limit 1";
   
/*   
   SELECT * FROM `users` 
LEFT JOIN `profiles`
ON `users`.id = `profiles`.userid
WHERE `users`.id = 54
*/

   $result=mysql_query($sql);
   $user=mysql_fetch_assoc($result);   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
          
           .error  {color:#ff0000;}
           
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
  
 <?php include "navbar.php";?>

    <div class="container">
	      <table class="table table-hover">
				<tr>
				<td colspan=2><img width="200" src="uploads/<?php echo $user['photo']; ?>" /></td>
				<tr>
						<th>Username</th>
						<td><?php echo $user['username']; ?></td>
				</tr>
				<tr>
						<th>Name</th>
						<td><?php echo $user['first_name'] . " " . $user['middle_name'] . " " . $user['last_name'];?></td>
				</tr>
				<tr>
						<th>Email</th>
						<td><?php echo $user['email']; ?></td>
				</tr>
				<tr>
						<th>Gender</th>
						<td><?php echo ($user['gender'] == "m") ? "Male" : "Female"; ?></td>
				</tr>
				<tr>
						<th>Phone</th>
						<td><?php echo $user['phone']; ?></td>
				</tr>
				<tr>
						<th>Permanent Address</th>
						<td><?php echo $user['permanent_address']; ?></td>
				</tr>
				<tr>
						<th>Temporary Address</th>
						<td><?php echo $user['temp_address']; ?></td>
				</tr>
				<tr>
						<th>Teaching Location</th>
						<td><?php echo $user['teaching_location']; ?></td>
				</tr>
				<tr>
						<th>Status</th>
						<td><?php echo ($user['status'] == 0) ? "Inactive" : "Active"; ?></td>
				</tr>
				<tr>
						<th>Biodata</th>
				    	<td><?php echo $user['bio']; ?></td> 
				</tr>
				<tr>
						<th>Age</th>
						<td><?php echo $user['age']; ?></td>
				</tr>
				<tr>
						<th>Expected Fee</th>
						<td><?php echo  $user['expected_fee']; ?></td>
				</tr>
				<tr>
						<th>Available Shift</th>
						<td><?php echo  $user['available_shift']; ?></td>
				</tr>
				<tr>
						<th>Time slot</th>
						<td><?php echo  $user['available_timeslot']; ?></td>
				</tr>
				<tr>
						<th>Maximum Student </th>
						<td><?php echo $user['max_students']; ?></td>
				</tr>
				<tr>
						<th>Created On</th>
						<td><?php echo date("m-d-Y", $user['created_on']); ?></td>
				</tr>
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