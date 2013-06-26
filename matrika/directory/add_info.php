<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>E-directory</title>
    

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
	body
	{
	padding : 0 300px;
	background-color : #127;
	}
      #all{
	  	background-color : #fff;
        padding-top: 10px; /* 60px to make the container go all the way to the bottom of the topbar */
		margin  : 100px 150px 0px 150px ;
		border : 1px solid #ccc;
		height : 500px;
      }
	  #tab
	  {
	  padding : 300px 300px;
	  text-align : center;
	  margin : 0 auto 13px auto; 
	  color : #900;
	  
	  
	  }
	  #wid
	  {
	  length : 300px;
	  }
	  #add
	  {
	  margin: 2px auto auto 620px;
	  text-align:center;
	  }
	     </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
  <div id="all">

	  
	  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">E-directory</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="directory.php">My Directory</a></li>
             
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	

								<form class="bs-docs-example form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
									<div class="control-group">
									  <label class="control-label" for="inputEmail">Company Name</label>
									  <div class="controls">
										<input type="text" id="c_name" name="c_name">
									  </div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="inputEmail">Company Address</label>
									  <div class="controls">
										<input type="text" id="c_address" name="c_address">
									  </div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="inputEmail">Phone no.</label>
									  <div class="controls">
										<input type="text" id="c_phone" name="c_phone">
									  </div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="inputEmail">Email</label>
									  <div class="controls">
										<input type="text" id="c_email" name="c_email">
									  </div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="inputEmail">Website</label>
									  <div class="controls">
										<input type="text" id="c_website" name="c_website">
									  </div>
									</div>
									<div class="control-group">
									  <label class="control-label" for="inputEmail">Info</label>
									  <div class="controls">
										
										<textarea id="c_info" name="c_info" rows="7"></textarea>
									  </div>
									</div>
									
									
									<div class="control-group">
									  <div class="controls">                
										<button type="submit" name="add" value="add" class="btn" >Add</button>
									  </div>
									</div>
								  </form>
			<?php
			if(isset($_POST['add']))
			
			 {
			 mysql_connect ("localhost","root","");
			mysql_select_db("company");
			   $q= "INSERT INTO `company`.`information` 
											(`id`,`c_name`,`c_address`,`c_phone`, `c_email`, `c_website`, `c_info`)
				VALUES (NULL,'{$_POST['c_name']}','{$_POST['c_address']}' ,'{$_POST['c_phone']}', '{$_POST['c_email']}', '{$_POST['c_website']}', '{$_POST['c_info']}')";
		 	    
				mysql_query($q); //or mysql_error()
			
					echo "<div class=\"alert alert-success\">";
					echo "Directory updated sucessfully  !";
					echo "</div>";
					
			}
	
  ?>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
</div>

  </body>
</html>
