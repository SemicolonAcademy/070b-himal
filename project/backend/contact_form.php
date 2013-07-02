 <?php if ($form_action == "edit") { ?>
	<h3>Edit Contact </h3>                
<?php } else { ?>
	<h3>Add Contact</h3>                
<?php } ?>
<form class="bs-docs-example form-horizontal" method ="POST" action="" enctype="multipart/form-data">

            <?php if ($form_action == "edit") { ?>
				<input type="hidden" name="id" value="<?php echo $id;?>">       
		    <?php } ?>
			
			
            <div class="control-group">
              <label class="control-label" for="inputFirstName">Name</label>
              <div class="controls">
                <input type="text" name="name" id="inputName" value="<?php if( isset($form_values['name'])) echo $form_values['name']; ?>" >
				<?php if( isset($err['name'])){ ?>
						<span class="error"><?php echo $err['name'] ;?></span>
				<?php } ?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputPhone">Phone</label>
              <div class="controls">
                <input type="text" name="phone" id="inputPhone" value="<?php if( isset($form_values['phone'])) echo $form_values['phone']; ?>">
				<?php if( isset($err['phone'])){ ?>
						<span class="error"><?php echo $err['phone'] ;?></span>
				<?php } ?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" name="email" id="inputEmail" value="<?php if( isset($form_values['email'])) echo $form_values['email']; ?>">
				<?php if( isset($err['email'])){ ?>
						<span class="error"><?php echo $err['email'] ;?></span>
				<?php } ?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label" for="inputMessage">Message</label>
              <div class="controls">
                <textarea rows="8" class="span4" name="message" /><?php if( isset($form_values['message'])) echo $form_values['message']; ?></textarea>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" name="submit_<?php echo $form_action;?>" value="submit-<?php echo $form_action;?>" class="btn btn-success">Submit</button>              
				<a class="btn" href="<?php echo $self; ?>">Cancel</a>
				</div>
            </div>
          </form>