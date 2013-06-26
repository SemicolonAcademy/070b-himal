	<h3>Latest Users</h3>
			
		<table class="table table-bordered">
		<tr>
		<td>S.N.</td>
		<td>Username</td>
		<td>Password</td>
		<td>Email</td>
		<td>Gender</td>
		<td>created on</td>
		<td>Actions</td>
		</tr>
		<?php
		while($row=mysql_fetch_assoc($result))
		{ 
			$id=$row[id];
			?>
			<tr>
			<td><?php echo $row[id];?></td>
			<td><?php echo $row[username]; ?></td>
			<td><?php echo $row[password];?></td>
			<td><?php echo $row[email]; ?></td>
			<td><?php echo $row[gender]; ?></td>
			<td><?php echo $row[created_on]; ?></td>
			<td><a href="#">edit</a>&nbsp <a href="del.php">delete</a></td>
			</tr>
		<?php
		}?>
		
		
		</table>


<h3>Add new user</h3>
		<form class="form-horizontal" action="form.php" method="POST">
			<div class="control-group">
				<label class="control-label" >Username</label>
				<div class="controls">
					<input type="text"  name="username" placeholder="Username" value="<?php if($username) echo $username;?>" >
					<span class="error"><?php if($eusername){ echo $eusername;} ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >Email</label>
				<div class="controls">
					<input type="text"  name="email" placeholder="Email" value="<?php if($email) echo $email;?>">
				<span class="error"><?php if($eemail){echo $eemail;} ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<input type="password"  name="password" placeholder="Password">
					<span class="error"><?php if($epassword){echo $epassword;} ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >Confirm Password</label>
				<div class="controls">
					<input type="password"  name="password_check" placeholder="Confirm Password" >
					<span class="error"><?php if($epassword_check){echo $epassword_check;} ?></span>
				</div>
			</div>
			
				<div class="control-group">
					<label class="control-label" for="Sex">Sex:</label>
					<div class="controls">
						<input type="radio" name="sex"  value="m" <?php if ($sex == 'm') echo 'checked="checked"' ?>>&nbspMale
						<input type="radio" name="sex"  value="f" <?php if ($sex == 'f') echo 'checked="checked"' ?>>&nbspFemale
						<span class="error"><?php if($esex){ echo $esex;} ?></span>
					
					</div>
				</div>
		
			<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox" name="checkbox" <?php if ($checkbox) echo 'checked="checked"' ?>> I agree to the terms and conditions.
					<span class="help-inline">
					<?php if($echeckbox){ ?>
						<span class="error"> <?php echo $echeckbox; ?>	</span>
					<?php } ?>
				</label>
			<button type="submit" class="btn btn-success" name="signup">Sign up</button>
			</div>
			</div>
		</form>