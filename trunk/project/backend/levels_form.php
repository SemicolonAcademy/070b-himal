
	<h3>Levels </h3>                



<form class="form-horizontal" method ="POST" action="" enctype="multipart/form-data">


		<?php if ($form_action == "edit") { ?>
				<input type="hidden" name="id" value="<?php echo $id;?>">       
		<?php } ?>


		<div class="control-group">
		 <label class="control-label" for="inputFirstName">Id</label>
		  <div class="controls">
			<input type="text" name="slug" value="<?php if( isset($form_values['id'])) echo $form_values['id']; ?>" />
			<?php if( isset($errors['id'])){ ?>
					<span class="help-inline"><?php echo $errors['id'];?></span>
			<?php } ?>
		  </div>
		   <label class="control-label" for="inputFirstName">Name</label>
		  <div class="controls">
			<input type="text" name="name" value="<?php if( isset($form_values['name'])) echo $form_values['name']; ?>" />
			<?php if( isset($errors['id'])){ ?>
					<span class="help-inline"><?php echo $errors['name'];?></span>
			<?php } ?>
		  </div>
		  
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputFirstName">Slug</label>
		  <div class="controls">
			<input type="text" name="slug" value="<?php if( isset($form_values['slug'])) echo $form_values['slug']; ?>" />
			<?php if( isset($errors['slug'])){ ?>
					<span class="help-inline"><?php echo $errors['slug'];?></span>
			<?php } ?>
			
			
		</div>
		<div class="control-group">
		  <label class="control-label" for="inputPhone">Description</label>
		  <div class="controls">
			<textarea rows="8" class="span4" name="description" /><?php if( isset($form_values['description'])) echo $form_values['description']; ?></textarea>				
		  </div>
		</div>			

		<div class="control-group">
		  <div class="controls">
			<button type="submit" name="submit_<?php echo $form_action;?>" value="submit-<?php echo $form_action;?>" class="btn btn-success">Submit</button>              
			<a class="btn" href="<?php echo $self; ?>">Cancel</a>			
			</div>
		</div>
		
</form>