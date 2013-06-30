<?php	
            if(defined('WEB_ROOT')){ ?> 

<h3>Add Profiles</h3>
				
		<form class="form-horizontal" action="profile.php?form_action=<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
				
				<?php if ($form_action == "edit") { ?>
							<input type="hidden" name="id" value="<?php echo $id;?>" />
				<?php } ?>		
						
			<div class="control-group">
			      <label class="control-label" for="inputAddress">User ID :</label>
				<div class="controls">
					<input type="text"  name="uid" value="<?php if ($userid) {echo $userid;}?>" >
						<?php if($euserid){ ?>
						<span class="error"> <?php echo $euserid ;?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="inputAddress">Biodata :</label>
				<div class="controls">
					  <textarea rows="3" name="bio"  name="bio" value="<?php if ($bio) {echo $bio;}?>"></textarea> 
						<?php if($ebio){ ?>
						<span class="error"> <?php echo $ebio; ?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
				    <label class="control-label" for="inputAddress">Age :</label>
				<div class="controls">
					<input type="text"  name="age" value="<?php if($age) echo $age;?>" >
					<?php if($eage){ ?>
						<span class="error"> <?php echo $eage; ?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
			   <label class="control-label" for="inputAddress">Permanent Address :</label>
				  <div class="controls">
					<input type="text"  name="paddress" value="<?php if ($paddress) {echo $paddress;}?>" >
						<?php if($epaddress){ ?>
						<span class="error"> <?php echo $epaddress; ?>	</span>
					<?php } ?>
				</div>
			</div>
				
			<div class="control-group">
			  <label class="control-label" for="inputAddress">Temporary Address :</label>
				<div class="controls">
					<input type="text" name="taddress" value="<?php if ($taddress) {echo $taddress;}?>">
						<?php if($etaddress){ ?>
						<span class="error"> <?php echo $etaddress; ?></span>
					<?php } ?>
				</div>
			</div>
			
			 <div class="control-group">
						                <label class="control-label" for="inputAddress" >Teaching City :</label>
						             <div class="controls">
						
                                             <select name="city">
                                                 <option>1</option>
                                                 <option>2</option>
                                                  <option>3</option>
                                                   <option>4</option>
                                                  <option>5</option>
                                             </select>
            
                        
							         </div>
							     </div>
			
			<div class="control-group">
				<label class="control-label" for="inputAddress" >Teaching Location :</label>
				<div class="controls">
					    <textarea rows="3" name="tlocation" value="<?php if ($location){echo $location;}?>"></textarea>
						<?php if($elocation){ ?>
						<span class="error"> <?php echo $elocation; ?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" >Qulification :</label>
				<div class="controls">
				 <textarea rows="3" name="qualification"  value="<?php if ($qualification){echo $qualification;}?>" ></textarea>
						<?php if($equalification){ ?>
						<span class="error"> <?php echo $equalification ;?>	</span>
					<?php } ?>
				</div>
			</div>
			
			<div class="control-group">
				 <label class="control-label" >Teaching Experience :</label>
				<div class="controls">
				   <textarea rows="3" name="experience"  value="<?php if ($experience){echo $experience;}?>" ></textarea>
						<?php if($eexperience){ ?>
						<span class="error"> <?php echo $eexperience ;?>	</span>
					<?php } ?>
				</div>
			</div>
			 <div class="control-group">
						                <label class="control-label" >Experience Year :</label>
						             <div class="controls" >
						
                                             <select name="experiyence_year" required>
                                                  <option>0</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                   <option>3</option>
                                                  <option>4</option>
												   <option>5</option>
												    <option>6</option>
													 <option>7</option>
													  <option>8</option>
													   <option>9</option>
													    <option>10</option>
														
                                             </select>
            
       
		                            </div>
		                         </div>
								 
								  <div class="control-group">
						                <label class="control-label" >Number of Students :</label>
						             <div class="controls" >
						
                                             <select name="no_student" required>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                   <option>4</option>
                                                  <option>5</option>
                                             </select>
            
       
		                            </div>
		                         </div>
			
			
			<div class="control-group">
				   <label class="control-label" >Expected Fee :</label>
				<div class="controls">
					<input type="text"  name="fee" value="<?php if ($fee){echo $fee;}?>" >
						<?php if($efee){ ?>
						<span class="error"> <?php echo $efee ;?>	</span>
					<?php } ?>
				</div>
			</div>
			
			
			<div class="control-group">
						            <label class="control-label" >Available Shift :</label>
						        <div class="controls">
						 
                                         <select name="shift" required>
                                             <option>Morning</option>
                                             <option>Day</option>
                                             <option>Evening</option>
                                             <option>Night</option>
            
                                         </select>
            
                        
                              </div>
	                      </div>
                		  
						   <div class="control-group">
						          </label> <label class="control-label" >Available Time Slot : </label>
						         <div class="controls" >
						
                                          <select name="time">
                                              <option>1</option>
                                                <option>2</option>
                                                    <option>3</option>
                                                      <option>4</option>
                                                       <option>5</option>
                                   </select>
            
                     
	                           </div>
		                     </div>
			
			
		
			<div class="control-group">
			<div class="controls">				
				<button type="submit" class="btn btn-success" value="submit" name="user_<?php echo $form_action;?>">Sign up</button>
			</div>
			</div>
		</form>
			<?php	}else header("location:login.php");?>