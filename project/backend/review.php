<?php
 include "config.php";
  

          if(isset($_POST['signin']))
		  {
	                 echo"Hello";
					$userid=$_POST['uid'];
		            $name=$_POST['name'];
				    $phone=$_POST['phone'];
				    $email=$_POST['email'];
					$review=$_POST['review'];
					$time=time();
					 
				$insert="INSERT INTO `reviews` (` userid`, `name`, `phone`, `email`, `review`, `rating`, `created_at`) VALUES ( ' {$userid}', ' {$name}', ' {$phone}', ' {$email}', '{$review}', '2', '{$time}')";
		        $sql=mysql_query( $insert);
		  
		  
		  }





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

     <?php
   
             include "navbar.php";
   
   ?>

    <div class="container">

		<a href="<?php echo $self_url; ?>"><h3>Reviews</h3></a>	  
		<hr>
        <form class="bs-docs-example form-horizontal"  method="POST">
						 
						 <div class="control-group"> 
						  
						         <div class="control-group">
						                <label class="control-label" for="inputAddress">User ID :</label>
						           <div class="controls">
						                    <input type="text" name="uid" required >
							        </div>
							     </div>
							
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Name</label>
						            <div class="controls">
							                 <input type="text" name="name" required >
							         </div>
							     </div>
							
                           
						        <div class="control-group">
						                 <label class="control-label" >Phone No :</label>
						             <div class="controls">
						                    <input type="text" name="phone" required  >
							         </div>
							     </div>
						
						        <div class="control-group">
						                <label class="control-label" >Email :</label>
						             <div class="controls">
						                    <input type="email" name="email"  required >
							         </div>
							    </div>
							
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Review :</label>
						            <div class="controls">
							                  <textarea rows="3" name="review" required></textarea>
							        </div>
							     </div>
							
							    
							
						     <div class="control-group">
                                     <div class="controls">
                                   
                                         <button type="submit" name="signin" class="btn btn-success">Submit</button>  
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
