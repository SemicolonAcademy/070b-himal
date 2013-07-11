<?php	   
            if(defined('WEB_ROOT')){ ?> 

<h3>Add new user</h3>
		
		<form class="form-horizontal" action="users.php?form_action=<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
				
				<?php if ($form_action == "edit") { ?>
							<input type="hidden" name="id" value="<?php echo $id;?>" />
				<?php } ?>		
						
			<div class="control-group">
				<label class="control-label" >Username</label>
				<div class="controls">
					<input type="text"  name="username" value="<?php if ($username) {echo $username;}?>" >
						<?php if($eusername){ ?>
						<span class="error"> <?php echo $eusername ;?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >First name</label>
				<div class="controls">
					<input type="text"  name="first_name" value="<?php if ($first_name) {echo $first_name;}?>">
						<?php if($efirst_name){ ?>
						<span class="error"> <?php echo $efirst_name; ?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Middle name</label>
				<div class="controls">
					<input type="text"  name="middle_name" value="<?php if($middle_name) echo $middle_name;?>" >
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Last name</label>
				<div class="controls">
					<input type="text"  name="last_name" value="<?php if ($last_name) {echo $last_name;}?>" >
						<?php if($elast_name){ ?>
						<span class="error"> <?php echo $elast_name; ?>	</span>
					<?php } ?>
				</div>
			</div>
				
			<div class="control-group">
				<label class="control-label" >Email</label>
				<div class="controls">
					<input type="text"  name="email" value="<?php if ($email) {echo $email;}?>">
						<?php if($eaddress){ ?>
						<span class="error"> <?php echo $eemail; ?></span>
					<?php } ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<input type="password"  name="password" value="<?php if ($password){echo $password;}?>">
						<?php if($epassword){ ?>
						<span class="error"> <?php echo $epassword; ?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Confirm Password</label>
				<div class="controls">
					<input type="password"  name="password_check" value="<?php if ($password_check){echo $password_check;}?>" >
						<?php if($ecofirm_password){ ?>
						<span class="error"> <?php echo $ecofirm_password ;?>	</span>
					<?php } ?>
				</div>
			</div>
					
		
	
			<div class="control-group">
				<label class="control-label">Image</label>
				<div class="controls">
						
						<input type="file" name="image">
						
						<?php if ($form_action == "edit") { ?>
							<input type="hidden" name="imagename" value="<?php echo $imagename;?>" />
							<?php if($imagename){?><img width="100" src="uploads/<?php echo $imagename; ?>" /><?php }?>
						<?php } ?>		
						
						
						<?php if($eimage){ ?> <span class="error"> <?php echo $eimage; ?>	</span><?php } ?>
				</div>
			</div>
	
			
				<div class="control-group">
					<label class="control-label" for="gender">Gender:</label>
					<div class="controls">
						<input type="radio" name="gender"  value="m" <?php if ($gender == 'm') echo 'checked="checked"' ?>>&nbspMale
						<input type="radio" name="gender"  value="f" <?php if ($gender == 'f') echo 'checked="checked"' ?>>&nbspFemale
							<?php if($egender){ ?>
						<span class="error"> <?php echo $egender; ?>	</span>
					<?php } ?>
					</div>
				</div>
			
			<div class="control-group">
				<label class="control-label" >Phone</label>
				<div class="controls">
					<input type="text"  name="phone"  value="<?php if ($phone){echo $phone;}?>" >
						<?php if($ephone){ ?>
						<span class="error"> <?php echo $ephone ?>	</span>
					<?php } ?>
					
				</div>
			</div>
				
			<div class="control-group">
				<label class="control-label" >Address</label>
				<div class="controls">
					<input type="text"  name="address" value="<?php if ($address){echo $address;}?>" >
					<span class="help-inline">
					<?php if($eaddress){ ?>
						<span class="error"> <?php echo $eaddress ?>	</span>
					<?php } ?>

				</div>
			</div>
		
			<div class="control-group">
			<div class="controls">				
				<button type="submit" class="btn btn-success" value="submit" name="user_<?php echo $form_action;?>">Sign up</button>
			</div>
			</div>
		</form>
		
	<?php	}else header("location:login.php");?>