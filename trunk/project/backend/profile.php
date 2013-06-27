<?php
 include "config.php";

          if(isset($_POST['signin']))
		  {
		  $userid = $_POST['uid'];
   $bio = $_POST['bio'];
   $age = $_POST['age'];
   $paddress = $_POST['paddress'];
   $taddress = $_POST['taddress'];
   $phone = $_POST['phone'];
   $city = $_POST['city'];
   $location = $_POST['tlocation'];
   $qualification = $_POST['qualification'];
   $experience = $_POST['experience'];
   $experiyence_year=$_POST['experiyence_year'];
   $no_student = $_POST['no_student'];
   $shift = $_POST['shift'];
   $timeslot = $_POST['time'];
   $fee = $_POST['fee'];
   $time = time(); 
		       
			   
				
				$insert  = "INSERT INTO `profiles` 
			       ( `userid`, `bio`, `age`, `permanent_address`, `temp_address`, `teaching_city`, `teaching_location`, `teacher_qualification`, `teaching_experience`, `experience_years`, `max_students`, `expected_fee`, `available_shift`, `available_timeslot`, `created_at`) 
			  VALUES ( ' {$userid}', ' {$bio}', ' {$age}', '  { $paddress}', ' { $taddress}', '{$city}', '  {$location}', ' {$qualification}', '  {$experience}', '{   $experiyence_year}', ' {$no_student}', ' {$fee}', ' {$shift}', '{ $timeslot}', ' {$time}')";
		  
		         $result=mysql_query($insert);
				 
		  
		         
		  }
   



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
                                   <style type="text/css">
<!--
.style1 {color: #0000FF}
-->
                                   </style>
</head>

  <body>

   <?php include "navbar.php";?>

    <div class="container">

     
	           <!-- <h3 align="right"> <a  href="profile_edit.php >Edite Profile</a></h3>-->
	<h3>Submit Profile<h3> <a href="profile_edit.php"><h3 align="right" class="style1">Edit Profile</h3></a>
	                    <form class="bs-docs-example form-horizontal"  method="POST">
						 
						 <div class="control-group"> 
						  
						         <div class="control-group">
						                <label class="control-label" for="inputAddress">User ID :</label>
						           <div class="controls">
						                    <input type="text" name="uid" required >
						           </div>
							     </div>
							
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Biodata :</label>
						            <div class="controls">
							                <textarea rows="3" name="bio" required></textarea>
						          </div>
					      </div>
							
                           
						        <div class="control-group">
						                 <label class="control-label" for="inputAddress">Age :</label>
						             <div class="controls">
						                    <input type="text" name="age" id="age" required >
							         </div>
					      </div>
						
						        <div class="control-group">
						                <label class="control-label" for="inputAddress">Permanent Address :</label>
						             <div class="controls">
						                    <input type="text" name="paddress" id="inputEmail"  >
							         </div>
							    </div>
							
							    <div class="control-group">
						                <label class="control-label" for="inputAddress">Temporary Address :</label>
						             <div class="controls">
						                    <input type="text" name="taddress" id="inputEmail"  >
							        </div>
					      </div>
							
							    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Phone No :</label>
                                     <div class="controls">
                                            <input type="text" id="inputPhone" name="phone" required>
                                     </div>
                          </div>
							
							     <div class="control-group">
						                <label class="control-label" for="inputAddress" required>Teaching City :</label>
						             <div class="controls">
						
                                             <select name="city">
                                                 <option>1</option>
                                                 <option>2</option>
                                                  <option>3</option>
                                                   <option>4</option>
                                                  <option>5</option>
                                             </select>
            
                        
							         </div>
							     </div>
						
							    
								<div class="control-group">
						                 <label class="control-label" for="inputAddress" required>Teaching Location :</label>
						             <div class="controls">
							                 <textarea rows="3" name="tlocation"></textarea>
							         </div>
							    </div>
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Qulification :</label>
						            <div class="controls">
							                  <textarea rows="3" name="qualification" required></textarea>
							        </div>
					      </div>
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Teaching Experience :</label>
						             <div class="controls">
							                 <textarea rows="3" name="experience" ></textarea>
							         </div>
					      </div>
						   <div class="control-group">
						                <label class="control-label" for="inputAddress">Experience Year :</label>
						             <div class="controls" >
						
                                             <select name="experiyence_year" required>
                                                  <option>0</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                   <option>3</option>
                                                  <option>4</option>
												   <option>5</option>
												    <option>6</option>
													 <option>7</option>
													  <option>8</option>
													   <option>9</option>
													    <option>10</option>
														
                                             </select>
            
       
		                            </div>
		                         </div>
							
							     <div class="control-group">
						                <label class="control-label" for="inputAddress">Number of Students :</label>
						             <div class="controls" >
						
                                             <select name="no_student" required>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                   <option>4</option>
                                                  <option>5</option>
                                             </select>
            
       
		                            </div>
		                         </div>
                          
						         <div class="control-group">
                                         <label class="control-label" for="inputEmail">Expected Fee :</label>
                                    <div class="controls">
                                             <input type="text" id="inputEmail" name="fee" required>
                                   </div>
                                 </div>
							
							<div class="control-group">
						            <label class="control-label" for="inputAddress" required>Available Shift :</label>
						        <div class="controls">
						 
                                         <select name="shift" required>
                                             <option>Morning</option>
                                             <option>Day</option>
                                             <option>Evening</option>
                                             <option>Night</option>
            
                                         </select>
            
                        
                              </div>
	                      </div>
                		  
						     <div class="control-group">
						          </label> <label class="control-label" for="inputAddress">Available Time Slot : </label>
						         <div class="controls" >
						
                                          <select name="time">
                                              <option>1</option>
                                                <option>2</option>
                                                    <option>3</option>
                                                      <option>4</option>
                                                       <option>5</option>
                                   </select>
            
                     
	                           </div>
		                     </div>
                
							
						     <div class="control-group">
                                     <div class="controls">
                                   
                                         <button type="submit" name="signin" class="btn">Sign in</button>
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
