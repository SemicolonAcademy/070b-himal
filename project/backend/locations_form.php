<?php 
if ($form_action == "edit") { ?>
	<h3>Edit Location </h3>                
<?php } else { ?>
	<h3>Add Location</h3>                
<?php } ?>

<form class="form-horizontal" method ="POST" action="" enctype="multipart/form-data">


		<?php if ($form_action == "edit") { ?>
				<input type="hidden" name="id" value="<?php echo $id;?>">       
		<?php } ?>
		
		<div class="control-group">
		  <label class="control-label" for="inputLocation">Location</label>
		  <div class="controls">
			<input type="text" name="location" value="<?php if( isset($form_values['location'])) echo $form_values['location']; ?>" />
			<?php if( isset($errors['location'])){ ?>
					<span class="help-inline"><?php echo $errors['location'] ;?></span>
			<?php } ?>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputSlug">Slug</label>
		  <div class="controls">
			<input type="text" name="slug" value="<?php if(isset($form_values['slug']))echo$form_values['slug']; ?>" />
			<?php if( isset($errors['slug'])){ ?>
					<span class="help-inline"><?php echo $errors['slug'];?></span>
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