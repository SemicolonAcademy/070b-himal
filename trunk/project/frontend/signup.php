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
	  
	 #date
	 {
	 margin-top: 100px;
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
       $info_p = array(
					  'FirstName' => $_POST['first_name'],
					  'MiddleName' => $_POST['middle_name'],
					  'LastName' => $_POST['last_name'],
					  'Email' => $_POST['email'],
					  'Username' => $_POST['user_name'],
					  'Password' => $_POST['password'],
					  //pic
					  'Age' => $_POST['age']
					  );
					  
		$info_e = array(
					  'IntermediateFrom' => $_POST['intermidiate'],
					  'BachelorFrom' => $_POST['bachelor'],
					  'MasterFrom' =>  $_POST['master'],
					  'Subject' => $_POST['subject'],
					  'Level' => $_POST['level'],
					  'Medium' => $_POST['medium'],
					  'IntermediateYear' => $_POST['year_i'],
					  'BachelorYear' => $_POST['year_b'],
					  'MasterYear' => $_POST['year_m']
					  );
					  
		$info_l = array(
					  'PermanentAddress' => $_POST['p_address'],
					  'TemporaryAddress' => $_POST['t_address'],
					  'WillingAddress' => $_POST['w_address']
					  );
					  
		$info_t = array(			
					  'Fee' =>  $_POST['fee'],
					  'MaxStudent' => $_POST['max_student'],
					  'About'=> $_POST['about']
                     );
		
					
		$error_p = array();		
		foreach($info_p as $value=>$key)
		$error_p["$value"] = '';   

		$error_e = array();		
		foreach($info_e as $value=>$key)
		$error_e["$value"] = ''; 
		
		$error_l = array();		
		foreach($info_l as $value=>$key)
		$error_l["$value"] = ''; 
		
		$error_t = array();		
		foreach($info_t as $value=>$key)
		$error_t["$value"] = ''; 
		
			
			foreach($info_p as $value => $key)
			{
			  if((isset($key))&&($key==''))
			  {
			     if($key=='')
				 $error_p["$value"] = "Error in: ".$value;
				 else
				 $error_p["$value"] = "Error in: ".$key;
				 break;
			  }
			}
			
			foreach($info_e as $value => $key)
			{
			  if((isset($key))&&($key==''))
			  {
			     if($key=='')
				 $error_e["$value"] = "Error in: ".$value;
				 else
				 $error_e["$value"] = "Error in: ".$key;
				 break;
			  }
			}
			
			foreach($info_l as $value => $key)
			{
			  if((isset($key))&&($key==''))
			  {
			     if($key=='')
				 $error_l["$value"] = "Error in: ".$value;
				 else
				 $error_l["$value"] = "Error in: ".$key;
				 break;
			  }
			}
			
			foreach($info_t as $value => $key)
			{
			  if((isset($key))&&($key==''))
			  {
			     if($key=='')
				 $error_t["$value"] = "Error in: ".$value;
				 else
				 $error_t["$value"] = "Error in: ".$key;
				 break;
			  }
			}
			mysql_connect ("localhost","root","");
			mysql_select_db("htnepal");
			
			 $q = "select * from users";
			 $row = mysql_query($q);
			 $id = '1000' + mysql_num_rows($row);
			
		   $q= "INSERT INTO `htnepal`.`users` (`id`,`FirstName`, `MiddleName`, `LastName`, `Email`, `Username`, `Password`, `ProfilePicture`, `Gender`, `Age`)
				VALUES ('$id','{$info_p['FirstName']}' ,'{$info_p['MiddleName']}', '{$info_p['LastName']}', '{$info_p['Email']}', '{$info_p['Username']}', '{$info_p['Password']}', '{$info_p['ProfilePicture']}', '{$info_p['Gender']}', '{$info_p['Age']}')";
			mysql_query("$q");
			
			
 

			  
  ?>
  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <div class="container-narrow">

      <div class="masthead">
        
		<a class="btn btn-success pull-right">Submit Teacher Profile</a>
			
		<ul class="nav nav-pills pull-right">
          <li><a href="home.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>          
        </ul>
        <img src="images/logo.png" width="160">
      </div>

      <hr>

      <div class="jumbotron">
        <h3>Registation</h3>
		
        
      </div>
	  
	  <div class="row-fluid marketing">
	  <h4>Personal Information</h4>
						<hr>
        <div class="span4">
						<div >
							<label id="fname">First Name</label>
							<input type="text" name="first_name"  value= <?php echo "\"$info_p[FirstName]\""  ?> />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
						
						<div>
							<label>Middle Name</label>
							<input type="text" name="middle_name" value= <?php echo "\"$info_p[MiddleName]\""  ?> />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>

						
						<div>
							<label>Last Name</label>
							<input type="text" name="last_name" value= <?php echo "\"$info_p[LastName]\""  ?> />
							
						</div>
						<?php foreach($error_p as $e)
						if($e!='')
						  {
						   echo "<span class=\"alert alert-error\">".$e."</span>";
						   break;
						   }						
						?>
        </div>
		
		 <div class="span4">
						<div>
							<label>Email</label>
							<input type="text" name="email"  value= <?php echo "\"$info_p[Email]\""  ?> />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
						<div>

							<label>Username</label>
							<input type="text" name="user_name" value= <?php echo "\"$info_p[Username]\""  ?> />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>

						
						<div>
							<label>Password</label>
							<input type="password" name="password" />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
							<input type="password" name="password" placeholder="Conform Password" />
						</div>					
        </div>
		
		<div class="span3 ">
		<div>
							<label>Profile Picture</label>
							<input type="file" name="profle_pic">
							</br></br></br>
							 Male &nbsp&nbsp<input type="radio" name="sex" checked /> &nbsp&nbsp&nbsp&nbsp Female&nbsp&nbsp<input type="radio" name="sex" />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
						<div>
							
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						</br>
						
						
						<div>
						<label>Age</label>
						
						<select class="span5" name="age"  />
						<?php
						for($i=15;$i<90;$i++)
						echo "<option>$i</option>";			
						?>
                        </select>
						</div>
        </div>
		
      </div>	  
	  
	  
	  
	  <div class="row-fluid marketing">
			<h4>Educational Information</h4>
			<hr>
	  <div class="span7" >
						<div>
							<label>Intermidiate From &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbspYear</label> 							

							<input type="text" name="intermidiate" value= <?php echo "\"$info_e[IntermediateFrom]\""  ?> />
							<select class="span3" name="year_i" >
							<option></option>
								<?php
								for($i=1960;$i<2013;$i++)
								echo "<option>$i</option>";
								?>
								</select>
						</div>
						<div>
							<label>Bachelor From</label>
							<input type="text" name="bachelor" value= <?php echo "\"$info_e[BachelorFrom]\""  ?> />
							<select class="span3" name="year_b">
							<option></option>
								<?php
								for($i=1960;$i<2013;$i++)
								echo "<option>$i</option>";
								?>
								</select>
						</div>
						<div>
							<label>Master From</label>
							<input type="text" name="master" value= <?php echo "\"$info_e[MasterFrom]\""  ?> />
							
							<select class="span3" name="year_m">
							<option></option>
								<?php
								for($i=1960;$i<2013;$i++)
								echo "<option>$i</option>";
								?>
							</select>
								
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
						<?php foreach($error_e as $e)
						if($e!='')
						  {
						   echo "<span class=\"alert alert-error\">".$e."</span>";
						   break;
						   }						
						?>
        </div>
		
		<div class="span4 pull-right">
		
			
						<div>
							<label>Teaching Subject</label>
							<select name="subject" value= <?php echo "\"$info_e[Subject]\""  ?> />
								
								<option> Math</option>
								<option> Science) </option>
								<option> English</option>
								<option> computer</option>
								
								<option> Account</option>
								<option> Finance</option>
								<option> Business Math</option>
								
								<option> Dance</option>
								<option> Music</option>
								<option> Other</option>
							</select>
							
							
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
						<div>
							<label>Teaching Level</label>
							<select name="level" value= <?php echo "\"$info_e[Level]\""  ?> />
								
								
								<option>Nursery(kids)</option>
								<option> Primary(1-5) </option>
								<option> Lower-secondary(5-8)</option>
								<option>Secondary (9-10) </option>
								<option>Higher secondary (10-12) </option>
								<option>Bachelor</option>
								<option>Other</option>
							</select>
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>

						
						<div>
							<label>Medium</label>
							<select name="medium" value= <?php echo "\"$info_e[Medium]\""  ?> />
								
								
								<option>English</option>
								<option>Nepali</option>
								<option>Both</option>
							</select>
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
								
						
						
						
        </div>

		
		
      </div>
	  
	  
	  
	  
	  <div class="row-fluid marketing">
			
	  <div class="span5" >
	  <h4>Location</h4>
			<hr>
						<div>
							<label>Permanent Address</label> 		
							<input type="text" name="p_address" value= <?php echo "\"$info_l[PermanentAddress]\""  ?> />
						</div>
						<div>
							<label>Temporary Address</label>
							<input type="text" name="t_assress" value= <?php echo "\"$info_l[TemporaryAddress]\""  ?> />
													</div>
						<div>
							<label>Willing to teach at</label>
							<input type="text" name="w_address" value= <?php echo "\"$info_l[WillingAddress]\""  ?> />
							
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
						<?php foreach($error_l as $e)
						if($e!='')
						  {
						   echo "<span class=\"alert alert-error\">".$e."</span>";
						   break;
						   }						
						?>
        </div>
		
		<div class="span4 pull-right" >
		<h4 >Time and Fee</h4>
			<hr>
			       <div>
						<div >
							<label>Availability (time)</label>
							<input type="text" name="time" value= <?php echo "\"$info_t[Time]\""  ?> />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						
						<div>
							<label>Expected Fee</label>
							<input type="text" name="fee" value= <?php echo "\"$info_t[Fee]\""  ?> />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>

						
						<div>
							<label>Max. Num. of Students</label>
							<input type="text" name="max_student" value= <?php echo "\"$info_t[MaxStudent]\""  ?> />
							<!-- <span class="help-block">Example block-level help text here.</span> -->
						</div>
						<?php foreach($error_t as $e)
						if($e!='')
						  {
						   echo "<span class=\"alert alert-error\">".$e."</span>";
						   break;
						   }						
						?>
						
					</div>			
						
						
						
        </div>
		
      </div>
	  <div class="row-fluid marketing">
			
	  <div>
	  <h4>About You</h4>
			<hr>
						<div>
                               <label>Write short description about your teaching experience and knowledge.  </label>						
							<textarea rows="7" class="span12" name="about"></textarea>
						</div>
						
		<input class="pull-left" type="checkbox" name="agree" value="ok" /> <label class="pull-left"> &nbsp I agree to the &nbsp</label><a href="#">Terms and Conditions</a><br/>
		
	   <?php if (!isset($_POST['agree']) && ($_POST['agree']!='ok')) echo "You must agree our terms and conditions before proseding."; ?>
        </div>
      </div>
	  
		<input type="submit" name="sign_in">
		
      <hr>
      <table class="table table-hover">
	  <?php
	  mysql_connect ("localhost","root","");
	  mysql_select_db("teacher");
	  $q = "select * from personal";
	  $result = mysql_query($q);
	  ?>
	  <?php
	  $col=mysql_num_rows($result);
	 while ($row = mysql_fetch_assoc($result))
	 {
	  ?>
	  <tr>
		<td> <?php echo $row['id']; ?></td>
		<td> <?php echo $row['FirstName']; ?></td>
		<td> <?php echo $row['MiddleName']; ?></td>
		<td> <?php echo $row['LastName']; ?></td>
		<td> <?php echo $row['Email']; ?></td>
		<td> <?php echo $row['Username']; ?></td>
		<td> <?php echo $row['Gender']; ?></td>
		<td> <?php echo $row['Age']; ?></td>
		
	 </tr>
	 <?php } ?>
	  </table>
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
</form>
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

