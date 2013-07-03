<?php
	include "config.php";
	$q="select * from users order by `created_on` desc limit 5";
	$result=mysql_query($q);
	
	if($form_action == "status"){
	    echo "i am in atatus" ;
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
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
  
 <?php include "navbar.php";?>

    <div class="container">
				<h3>Welcome Home Tuition Nepal Admin</h3>
				<p>This is a administrative dashboard from where you can manage all sections of your website.</p>
    </div> 
	<div class="span8 text-center">
			<div class="teacher">
			 <h4>Latest Teacher</h4>
				<p class="teacher-info">
				<?php  while($row=mysql_fetch_assoc($result)){ ?>
				<strong>Name :</strong>
				<?php echo $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name']; ?>
                <strong>phone :</strong>
				<?php echo $row['phone']; ?>
                <strong>email :</strong>
				<?php echo $row['email']; ?>
                <strong>has been added.</strong>
				<a href="index.php?form_action=status&id=<?php echo $row['id'];?>">Activate</a> | 
				<a href="index.php?form_action=featured&id=<?php echo $row['id'];?>">Recommend</a>
				<br>
				<?php } ?>
				</br>
				</p>		
			</div>	
    </div>
	<div class="span4 text-center">
			<div class="teacher">
			 <h4>Recent Activites</h4> 
			  <p class="teacher-info">
			  </p>		
			</div>	
    </div>
	
	
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
