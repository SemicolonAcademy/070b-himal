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
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
	  
	    
	  .teacher {
		text-align:center;
	  }
	  
	  .text-center{
	  text-align:center;
	  }
	  
	  p.teacher-info{
		margin-top:10px;	  
	  }
	  
	  p.text-small{
	  font-size:12px;
	  color:#666;
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
  </head>

  <body>

    <div class="container-narrow">

     <?php include "navbar.php"; ?>

      <hr>

      <div class="jumbotron">
        <h3>Search Teachers In Your Area</h3>
		<form class="form-inline" action="search.php">
			
			<select class="input-medium">
				<option>Select Location</option>
				<?php $sql="select * from locations";
				      $result=mysql_query($sql);
                      while($row=mysql_fetch_assoc($result)){ ?>
				<option><?php echo $row['location']; ?></option>
				<?php } ?>
			</select>
			
			<select class="input-medium">
				<option>Select Subject</option>
				<?php $sql="select * from subjects";
				      $result=mysql_query($sql);
                      while($row=mysql_fetch_assoc($result)){ ?>
				<option><?php echo $row['name']; ?></option>
				<?php } ?>
			</select>
			
			<select>
				<option>Select Student's Grade</option>
				<?php $sql="select * from levels";
				      $result=mysql_query($sql);
                      while($row=mysql_fetch_assoc($result)){ ?>
				<option><?php echo $row['name']; ?></option>
				<?php } ?>
			</select>
			
			<button type="submit" class="btn" value="Search" >Search</button>

		</form>
        
      </div>
	  
	  <div class="row-fluid marketing">
	  <div class="teacher">
		<h3>How it works !</h3>
	  </div>
	  </div>

	  <div class="row-fluid marketing">
        
		<div class="span4 text-center">
			<div class="teacher">
				<img src="images/student.jpg" class="img-circle"></img>
				
				<p class="teacher-info">
				<strong>Students</strong>
				<br/><br/>Lorem ipsum dommy text is lorem ipsum. So lorem ipsum in lorem.
				Lorem ipsum dommy text is lorem ipsum. So lorem ipsum in lorem.
				So lorem ipsum in lorem.
				</p>		
			</div>	
        </div>
		
		<div class="span4 text-center">
			<div class="teacher">
				<img src="images/ht.jpg" class="img-circle"></img>
				
				<p class="teacher-info">
				<strong>Home Tuition Nepal</strong>
				<br/><br/>We are a dedicated team of teachers, engineers and students. 
We want to make it easy for parents to find teachers for 
home tutoring their children.
				
				</p>		
			</div>	
        </div>
		
		<div class="span4 text-center">
			<div class="teacher">
				<img src="images/teacher.jpg" class="img-circle"></img>
				
				<p class="teacher-info">
				<strong>Teachers</strong>
				<br/><br/>Lorem ipsum dommy text is lorem ipsum. So lorem ipsum in lorem.
				Lorem ipsum dommy text is lorem ipsum. So lorem ipsum in lorem.
				So lorem ipsum in lorem.
				</p>		
			</div>	
        </div>

		
		</div>
		
		
		
      <h3 class="breadcrumb text-center">Recomended Teachers</h3>
	  
	  <div class="row-fluid marketing">
        <?php 
	    $sql="select * from users where users.featured=1";
		$result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){?>
	  
		<div class="span3">
          
		  <div class="teacher">
		    
			<img  class = "img-polaroid" src="./uploads/<?php echo $row['photo']; ?>">
			<p class="teacher-info">
				<strong><?php echo $row['first_name']?></strong><br/> 
				Kupondole
			</p>
		  </div>
         
        </div>
		<?php } ?> 
		</div>	
		
	<div class="jumbotron">
        
		<h3>Connecting Teachers & Students for home tuition</h3>
		<p class="lead">
			We are a dedicated team of teachers, engineers and students. 
	   <br/>We want to make it easy for parents to find teachers 
	   <br/>for home tutoring their children	   
		</p>
		<a class="btn btn-large btn-success" href="#">Submit Teacher Profile</a>
		  
      </div>
	  
		
		
      <hr>

      <div class="footer text-center">
		
          <a href="#">Home</a> - 
          <a href="#">About</a> -
          <a href="#">Contact</a> - 
          <a href="#">Submit Teacher Profile</a>
          <p class="text-small">
		  Home Tuition Nepal Pvt. Ltd. &copy; Company 2013
		  <br/>Kathmandu, Nepal. Phone: +977-1-5520471
		  </p>
          
		
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
