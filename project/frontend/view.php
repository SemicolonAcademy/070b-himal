<?php 
   include "config.php";
   $id=$_SESSION['id'];
   
   $sql="select * from profiles,users where users.username=profiles.userid and users.userid=$id limit 1";
   $result=mysql_query($sql);
   $user=mysql_fetch_assoc($result);


?>



<!-------------------------- Modal--------------------- -->
	<div id="" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Modal header</h3>
	  </div>
	  <div class="modal-body">                               
													
		  <table class="table table-hover">
				<tr>
				<td colspan=2><img width="200" src="uploads/<?php echo $user['photo']; ?>" /></td>
				<tr>
						<th>Username</th>
						<td><?php echo $user['username']; ?></td>
				</tr>
				<tr>
						<th>Name</th>
						<td><?php echo $user['first_name'] . " " . $user['middle_name'] . " " . $user['last_name'];?></td>
				</tr>
				<tr>
						<th>Email</th>
						<td><?php echo $user['email']; ?></td>
				</tr>
				<tr>
						<th>Gender</th>
						<td><?php echo ($user['gender'] == "m") ? "Male" : "Female"; ?></td>
				</tr>
				<tr>
						<th>Phone</th>
						<td><?php echo $user['phone']; ?></td>
				</tr>
				<tr>
						<th>Address</th>
						<td><?php echo $user['address']; ?></td>
				</tr>
				<tr>
						<th>Status</th>
						<td><?php echo ($user['status'] == 0) ? "Inactive" : "Active"; ?></td>
				</tr>
				<tr>
						<th>Created On</th>
						<td><?php echo date("m-d-Y", $user['created_on']); ?></td>
				</tr>
			 </table>
		   </div>
		   <div class="modal-footer">
			  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		   </div>
		</div>