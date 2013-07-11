   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand"> HTNEPAL</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="users.php">Users</a></li>
              <li><a href="appointment.php">Appointments</a></li>
              <li><a href="reviews.php">Reviews</a></li>
			  <li><a href="contact.php">Contacts</a></li>
              <li><a href="subjects.php">Subjects</a></li>
			  <li><a href="levels.php">Levels</a></li>
              <li><a href="locations.php">Locations</a></li>			  
			  
			</ul>
			 
			<ul class="nav pull-right">
              <li><a href="view_profile.php?id=<?php echo $_SESSION['user_id'];?>">Welcome, <?php echo $_SESSION['email']; ?></a></li>
              <li><a href="logout.php">Logout</a></li>
			</ul>
			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

