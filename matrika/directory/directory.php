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
	background-color : #125;
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
	  text-align : center;
	  margin-left : 10px;
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
 <?php
	  //enter roll no
	 
      mysql_connect ("localhost","root","");
	  mysql_select_db("company");
	  $q = "select * from information ";
	  $result = mysql_query($q);
	  //$row = mysql_fetch_assoc($result);
	 //$col=mysql_num_rows($result);
	  ?>
	  
	  
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
		
              <li class="active"><a href="add_info.php">Add Information</a></li>
            
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
	
	
								
			
	
	
    <div class="container "  id="tab">
	<table class="table-hover table-bordered" id="tab" >
	  <tr > 
	  
	  <th >&nbsp&nbsp&nbsp&nbspcompany name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
	  <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspcompany address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
	  <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Phone no.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
	  <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
	  <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp website&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
	  <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp info&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
	
	  </tr>
	  
   
	  <?php
	  //id="table" 
	  
	   while ($row = mysql_fetch_assoc($result))
	 {
	  ?>
	  <tr>
		<td > <?php echo $row['c_name']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"?></td>
		<td> <?php echo $row['c_address']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></td>
		<td> <?php echo $row['c_phone']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></td>
		<td> <?php echo $row['c_email']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></td>
		<td> <?php echo $row['c_website']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></td>
		<td> <?php echo $row['c_info']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></td>
		
	 </tr>
			
      <?php } ?>		
	  
	  </table>
	  
      
    </div> <!-- /container -->

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
