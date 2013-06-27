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

           <h3>Edit Profile<h3>
	  
        <form class="bs-docs-example form-horizontal"  enctype="multipart/form-data"method="POST">
						 
						 <div class="control-group"> 
						  
						         <div class="control-group">
						                <label class="control-label" for="inputAddress">User ID :</label>
						           <div class="controls">
						                    <input type="text" name="uid"  >
							        </div>
							     </div>
							
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Biodata :</label>
						            <div class="controls">
							                <textarea rows="3" name="bio" ></textarea>
							         </div>
							     </div>
							
                           
						        <div class="control-group">
						                 <label class="control-label" for="inputAddress">Age :</label>
						             <div class="controls">
						                    <input type="text" name="age" id="age"  >
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
                                            <input type="text" id="inputPhone" name="phone" >
                                     </div>
                                 </div>
							
							     <div class="control-group">
						                <label class="control-label" for="inputAddress" >Teaching City :</label>
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
						                 <label class="control-label" for="inputAddress" >Teaching Location :</label>
						             <div class="controls">
							                 <textarea rows="3" name="tlocation"></textarea>
							         </div>
							    </div>
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Qulification :</label>
						            <div class="controls">
							                  <textarea rows="3" name="qualification" ></textarea>
							        </div>
							     </div>
							
							    <div class="control-group">
						                 <label class="control-label" for="inputAddress">Teaching Experience :</label>
						             <div class="controls">
							                 <textarea rows="3" name="experience" ></textarea>
							         </div>
							     </div>
								 <div class="control-group">
						                <label class="control-label" >Experience Year :</label>
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
						
                                             <select name="no_student" >
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
                                             <input type="text" id="inputEmail" name="fee" >
                                     </div>
                                 </div>
							
							<div class="control-group">
						            <label class="control-label" for="inputAddress" >Available Shift :</label>
						        <div class="controls">
						 
                                         <select name="shift" >
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
