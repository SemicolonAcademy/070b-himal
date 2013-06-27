<!DOCTYPE html>
<?php 
     mysql_connect("localhost","root","");   //To connect to database having field (host-name,user,password)
     mysql_select_db("htnepal");
     $id=$_GET['id'];
     echo $id ;	 
     $q="select * from contact WHERE `contact`.`id` = $id";
	 $result=mysql_query($q);
	// $row=mysql_fetch_assoc($result);	 
     $time=date("F j, Y, g:i a");
     echo "I am out of edit" ;	 
    // if(isset($_GET['action']) && $_GET['action'] == 'edit'){
	        
		    if(isset($_POST['signin'])){
			echo "I am in edit" ;
		    $sql="UPDATE contact SET `name`='{$_POST['Name']}',`phone`='{$_POST['Phone']}',`email`='{$_POST['Email']}',
			                        `message`='{$_POST['Message']}',`created_at`='{$time}' WHERE `id`='{$id}'";
            $result=mysql_query($sql);
            header ("location: contact.php");			
		                         }  
     // }		
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
            <h3>Contacts</h3>
        
          </div>
		  
		  <form class="bs-docs-example form-horizontal" method ="POST" action="contact_edit.php?id=<?php echo $id;?>" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label" for="inputFirstName">Name</label>
              <div class="controls">
                <input type="text" name="Name" id="inputName" >
				<?php /* if($ename){ ?>
						<span class="error"> <?php echo $ename ;?>	</span>
				<?php }*/ ?> 
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputPhone">Phone</label>
              <div class="controls">
                <input type="text" name="Phone" id="inputPhone" >
				<?php echo "I am in form"; ?>
				<?php /*if($ephone){ ?>
						<span class="error"> <?php echo $ephone ;?>	</span>
				<?php }*/ ?>
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
                <button type="submit" name="signin" class="btn btn-success">Sign In</button>              
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
