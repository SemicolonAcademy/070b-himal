<?php
	include "config.php";
	$user_sql="select * from users order by `created_on` desc limit 5";
	$user=mysql_query($user_sql);
	$con_sql="select * from contact order by `created_at` desc limit 5";
	$contact=mysql_query($con_sql);
	$app_sql="select * from users,appointments where users.id=appointments.userid order by `created_at` desc limit 3";
	$appointment=mysql_query($app_sql);
	$review_sql="select * from users,reviews where users.id=reviews.userid order by created_at desc limit 3";
	$review=mysql_query($review_sql);
	
	
	$form_action = (isset($_GET['form_action']));
	
	if($form_action == "status"){
	    
	   $id=$_GET["id"];
	   
	    $q="select * from users WHERE `id` = $id";
		$result=mysql_query($q);	
		$row=mysql_fetch_assoc($result);
	    if($row['status']==0){
	        $sql = "UPDATE `users` SET `status`=1 WHERE `id`=$id LIMIT 1";
			}
	    mysql_query($sql);
        header('location:index.php');		
	}
	
	if($form_action == "featured"){
	    
	   $id=$_GET["id"];
	   
	    $q="select * from users WHERE `id` = $id";
		$result=mysql_query($q);	
		$row=mysql_fetch_assoc($result);
	    if($row['featured']==0){
	        $sql = "UPDATE `users` SET `featured`=1 WHERE `id`=$id LIMIT 1";
			}	
		mysql_query($sql);
        header('location:index.php');		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home Tuition Nepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  input value
	  {color:#ff0000;}
	   .error
	  {color:#ff0000;}
	   .teacher {
		text-align:center;
	  }
	  
	  p.teacher-info{
		margin-top:10px;	  
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
                        <style type="text/css">
<!--
.style1 {color: #CC0000}
.style3 {color: #F0F0F0; }
-->
                                   </style>
</head>

  <body>
  
 <?php include "navbar.php";?>

    <div class="container">
				<h3>Welcome Home Tuition Nepal Admin</h3>
				<p>This is a administrative dashboard from where you can manage all sections of your website.</p>
    </div>
	
	<!--------------------------------------- Displays the latest teacher--------------------------------->
	
		<div class="span7 text-center">
			<div class="teacher">
				   <h4>Latest Teacher</h4>
				
				<table class="table table-hover">
						   <tr>
								<th>Photoes</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Action</th>	
						   </tr>
						<?php while( $row =mysql_fetch_assoc($user)) { ?>
							<tr>
								<td><img width="100" src="uploads/<?php echo $row['photo']; ?>" /></td>
								<td><?php echo $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td>
								    <a href="index.php?form_action=status&id=<?php echo $row[id];?>"><?php if($row['status']==0){?>
					                         Active<?php } else {} ?></a> | 
					                <a href="index.php?form_action=featured&id=<?php echo $row[id];?>"><?php if($row['featured']==0){?>
					                         Recommend<?php }  else{} ?></a> 
								</td>
							</tr>
						<?php  } ?>
						
				</table>

			</div>	
		</div>
	    
	<!--------------------------------------- Displays the latest Appointments--------------------------------->	
		
		
		<div class="span5 text-center">
			<div class="teacher">
			      <h4>Recent<a href="appointment.php"> Appointments</a></h4> 
			
					<?php   while($appoint=mysql_fetch_assoc($appointment)){ ?>
						 <div class="bs-docs-example">
							<div class="alert alert-block">
								 <button  type="button" class="close" data-dismiss="alert">x</button>
								 
								   
										<p><h4 class="style3"><?php echo $appoint['name']; ?></h4> </p>
										<p>Appointed:<a href="view_profile.php?id=<?php echo $appoint['userid']?>"><?php echo $appoint['first_name'] . " " . $appoint['middle_name'] . " " . $appoint['last_name']; ?></a></p>
										<p class="style1">Contact : <?php echo $appoint['email']; ?> / <?php echo $appoint['phone']; ?></p>
										<p><?php echo $appoint['message']; ?></p>
										<p><a href="index.php?">
										</p>
							</div>
						</div>
							
					<?php  } ?>
			</div>	
        </div>
		
        <!------------------------Latest Contact---------------------------------------------------> 
	
		<div class="span7 text-center">
			<div class="teacher">
			   <h4 >Latest<a href="contact.php"> Contacts</a></h4> 
			     <table class="table table-hover">
						   <tr>
							
									<th>Name</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Massage</th>
									<th>Action</th>	
						   </tr>
						<?php while( $conct = mysql_fetch_assoc($contact)) { ?>
							<tr>
									<td><?php echo $conct['name'] ?></td>
									<td><?php echo $conct['phone'] ?></td>
									<td><?php echo $conct['email'] ?></td>
									<td><?php echo $conct['message'] ?></td>

								<td>
									<a href="contact.php?id=<?php echo $conct['id'];?>">Contacts</a>  
									
								</td>
							</tr>
						<?php  } ?>
						
				</table>
			</div>	
        </div>
		
	<!-------------------------------Latest Reviews----------------------------------------->
    
		<div class="span5 text-center">
			<div class="teacher">
			     <h4>Latest<a href="reviews.php"> Reviews</a></h4>
				 
                    <?php   while($reviews=mysql_fetch_assoc($review)){ ?>
                      <div class="bs-docs-example">
					     <div class="alert alert-block">
				          <h4 class="style1"><?php echo $reviews['first_name'] . " " . $reviews['middle_name'] . " " . $reviews['last_name'];	 ?></h4>
			                  <!--	<p>Teacher : <?php echo $reviews['first_name'] . " " . $reviews['middle_name'] . " " . $reviews['last_name'];	 ?></p>-->
				                    <p>Message : <?php echo $reviews['review']; ?></p>
				                    <p class="style1">Rating : <?php echo $reviews['rating']; ?></p>
			                  <!--	<p><a href="index.php?">   </p>-->
				       </div>
                    <?php } ?>			 
			      <p class="teacher-info"></p>		
			</div>	
        </div>
	
	
	<div>
	
	

	
	
	<!-- /container -->

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
