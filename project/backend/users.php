<?php
	include "config.php";
	$q="select * from users";
	$result=mysql_query($q);	
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
  <

 <?php include "navbar.php";?>

    <div class="container">

 <div class="container">
	<h3>Edit User</h3>
			
	<table class="table table-bordered">
		<tr>
		<td>S.N.</td>
		<td>Images</td>
		<td>Username</td>
		<td>Password</td>
		<td>First Name</td>
		<td>Middle Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Gender</td>
		<td>Phone</td>
		<td>Address</td>
		<td>Status</td>
		<td>Created on</td>
		</tr>
		<?php
		while($row=mysql_fetch_assoc($result))
		{ 
			?>
			<tr>
			<td><?php echo $row[id];?></td>
			<td><img width="100" src="uploads/<?php echo $row['photo']; ?>" /></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['middle_name']; ?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td><?php echo date("Y-m-d H:i",$row['created_on']); ?></td>
			<td><a href="edit.php?id=<?php echo $row[id];?>">edit</a> &nbsp <a href="del.php?id=<?php echo $row[id];?>">delete</a></td>
			</tr>
		<?php
		}?>
		
		
		</table>

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
