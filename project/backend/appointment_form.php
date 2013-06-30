<?php if ($form_action == "edit") { ?>
	<h3>Edit Appointment </h3>                
<?php } else { ?>
	<h3>Add Appointment</h3>                
<?php } ?>

<form class="form-horizontal" method ="POST" action="" enctype="multipart/form-data">


		<?php if ($form_action == "edit") { ?>
				<input type="hidden" name="id" value="<?php echo $id;?>">       
		<?php } ?>

        <div class="control-group">
		  <label class="control-label" for="inputUserId">User ID</label>
		  <div class="controls">
			<input type="text" name="userid" value="<?php if( isset($form_values['userid'])) echo $form_values['userid']; ?>" />
			<?php if( isset($errors['userid'])){ ?>
					<span class="help-inline"><?php echo $errors['userid'] ;?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputUserId">Name</label>
		  <div class="controls">
			<input type="text" name="name" value="<?php if( isset($form_values['name'])) echo $form_values['name']; ?>" />
			<?php if( isset($errors['name'])){ ?>
					<span class="help-inline"><?php echo $errors['name'] ;?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputFirstName">Phone</label>
		  <div class="controls">
			<input type="text" name="phone" value="<?php if( isset($form_values['phone'])) echo $form_values['phone']; ?>" />
			<?php if( isset($errors['phone'])){ ?>
					<span class="help-inline"><?php echo $errors['phone'];?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputFirstName">Email</label>
		  <div class="controls">
			<input type="text" name="email" value="<?php if( isset($form_values['email'])) echo $form_values['email']; ?>" />
			<?php if( isset($errors['email'])){ ?>
					<span class="help-inline"><?php echo $errors['email'];?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputPhone">Message</label>
		  <div class="controls">
			<textarea rows="8" class="span4" name="message" /><?php if( isset($form_values['message'])) echo $form_values['message']; ?></textarea>				
		  </div>
		</div>			

		<div class="control-group">
		  <label class="control-label" for="inputFirstName">Appointment Date</label>
		  <div class="controls">
			<input type="text" name="appointment_date" value="<?php if( isset($form_values['appointment_date'])) echo $form_values['appointment_date']; ?>" placeholder="YYYY-MM-DD" />
			<?php if( isset($errors['appointment_date'])){ ?>
					<span class="help-inline"><?php echo $errors['appointment_date'];?></span>
			<?php } ?>
		  </div>
		</div>
		
		<div class="control-group">
		  <div class="controls">
			<button type="submit" name="submit_<?php echo $form_action;?>" value="submit-<?php echo $form_action;?>" class="btn btn-success">Submit</button>              
			<a class="btn" href="<?php echo $self; ?>">Cancel</a>			
			</div>
		</div>
		
</form>