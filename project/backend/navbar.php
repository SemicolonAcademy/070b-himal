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
              <li><a href="profile.php">Profiles</a></li>
			  <li><a href="appointment.php">Appointments</a></li>
              <li><a href="review.php">Reviews</a></li>
			  <li><a href="contact.php">Contacts</a></li>
              <li><a href="subjects.php">Subjects</a></li>
			  <li><a href="levels.php">Levels</a></li>		  
			  
			</ul>
			 
			<ul class="nav pull-right">
              <li><a href="#">Welcome, <?php echo $_SESSION['email']; ?></a></li>
              <li><a href="logout.php">Logout</a></li>
			</ul>
			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

