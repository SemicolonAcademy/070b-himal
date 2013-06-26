<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
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
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

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
                                   <style type="text/css">
<!--
.style1 {color: #CC0033}
.style2 {color: #CC0000}
-->
                                   </style>
</head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Project name</h3>
      </div>

      <hr>

      <table>
	  
	  </table>
      <hr>

      <form class="form.php" method="POST">
	  <div class="control-group">
              <label class="control-label" >User Name</label>
        <div class="controls">
                <input type="text" name="username" value="<?php if($_POST['username']!="")echo $_POST['username']?>" placeholder="User Name">
		  <?php if(isset($_POST['signUp']) && $_POST['username']=="")
				{
				?>
		  <span class="help-inline style1">empty useer name</span>
		  <?php   
			} ?> 
          </div>
            </div>
            <div class="control-group">
              <label class="control-label" >Email</label>
              <div class="controls">
                <input type="text" name="email" value="<?php if($_POST['email']!="")echo $_POST['email']?>" placeholder="Email">
				<?php if(isset($_POST['signUp']) && $_POST['email']==""){ ?> <span class="help-inline style2">empty email Address</span>
			                                                     
  																      <?php   
			                                                             } 
				
				                                                         else if(isset($_POST['signUp']) && $_POST['email']!="")
			                                                                        {
			                                                                              if (strpos($_POST['email'],'@') == false) 
					                                                                            {
					                                                                              ?>
					                                                                          <span class="help-inline style2">Not in the form of email address</span>
					                                                                      
 																						    <?php
			                                                                                   
																							     }
						                                                                    ?>
			 
			                                                                        <?php
																					
			                                                                         }
			                                                                        
																					?>
			
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <div class="controls">
                <input type="password" name="password" value="<?php if($_POST['password']!="")echo $_POST['password']?>" id="inputPassword" placeholder="Password">
				<?php if(isset($_POST['signUp']) && $_POST['password']==""){ ?> <span class="help-inline style2">Empty Password</span>
			
			                                                        <?php  }  ?>
			                                                                     
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputPassword">Conform Password</label>
              <div class="controls">
                <input type="password" name="conformpsw" value="<?php if($_POST['conformpsw']!="")echo $_POST['conformpsw']?>"id="inputPassword" placeholder="Conform Password">
				
				    <?php if(isset($_POST['signUp']) && $_POST['conformpsw']!=$_POST['password']){ ?> <span class="help-inline style2"> Password mot matched</span>
			     
				                                                                            <?php   
			                                                                                 
																							      } 
																							 ?> 
			
			        <?php if(isset($_POST['signUp']) && $_POST['conformpsw']==""){ ?> <span class="help-inline style2"> Conform Password is empty</span>
			    
				                                                            
																			<?php   
			                                                                   
																			   } 
																			   ?> 
              </div>
            </div>
				<div class="control-group">
			              <label class="control-label" for="inputPassword">Sex</label>
			      <div class="controls">
                    <input type="radio" name="gender" id="optionsRadios1" value="option1" >
                      Male
                        
			         
                           <input type="radio" name="gender" id="optionsRadios1" value="option1" >
                            Femal
						    <?php if(isset($_POST['signUp']) && $_POST['gender']==""){ ?> <span class="help-inline style2"> Sex is not selected</span>
			<?php   
			} ?> 
						        </div>
          
			
			
			    </div>
		
            <div class="control-group">
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox" name="term"> I agree to the tearm & conditions
				  <?php if(isset($_POST['signUp']) && $_POST['term']==""){ ?> <span class="help-inline"> <span class="style2">Not meet term</span>
			<?php   
			} ?> 
                </label>
                <input type="submit" name="signUp" value="Sign Up" class="btn"/>
              </div>
            </div>
          </form>
		  <table>
		      <tr>
			  <td> User Name</td>
			  <td> e-mail Address</td>
			  <td> Password</td>
			  <td> Sex</td>
			  <td> Agreement</td>
			  
			  
			  </tr>
			   <?php 
      
	  if(isset($_POST['signUp']))
		{
		
   ?>
        <tr>
		   
		   <td> <?php if($_POST['username']!="")echo $_POST['username'];  ?></td>
		   <td> <?php if($_POST['email']!="")echo $_POST['email']; ?></td> 
		    <td> <?php if($_POST['password']!="") echo $_POST['password'];  ?></td>
			 <td> <?php if($_POST['gender']!="") echo $_POST['gender'];  ?></td>
			  <td> <?php if($_POST['term']!="")echo$_POST['term'];  ?></td>
		   
        </tr>	

    <?php 
    
	 
      }

?>	  
		  
		  
		  </table>
      <hr>
	 
      <div class="footer">
        <p>&copy; Company 2013</p>
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
