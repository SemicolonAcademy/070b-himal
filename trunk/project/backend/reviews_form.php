<?php 
if ($form_action == "edit") { ?>
	<h3>Edit Review </h3>                
<?php } else { ?>
	<h3>Add Review</h3>                
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
		  <label class="control-label" for="inputname">Name</label>
		  <div class="controls">
			<input type="text" name="name" value="<?php if( isset($form_values['name'])) echo $form_values['name']; ?>" />
			<?php if( isset($errors['name'])){ ?>
					<span class="help-inline"><?php echo $errors['name'] ;?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputphone">Phone</label>
		  <div class="controls">
			<input type="text" name="phone" value="<?php if( isset($form_values['phone'])) echo $form_values['phone']; ?>" />
			<?php if( isset($errors['phone'])){ ?>
					<span class="help-inline"><?php echo $errors['phone'];?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputemail">Email</label>
		  <div class="controls">
			<input type="text" name="email" value="<?php if( isset($form_values['email'])) echo $form_values['email']; ?>" />
			<?php if( isset($errors['email'])){ ?>
					<span class="help-inline"><?php echo $errors['email'];?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputreview">Review</label>
		  <div class="controls">
			<textarea rows="8" class="span4" name="review" /><?php if( isset($form_values['review'])) echo $form_values['review']; ?></textarea>
            <?php if( isset($errors['review'])){ ?>
					<span class="help-inline"><?php echo $errors['review'];?></span>
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