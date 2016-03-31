<?php /* Template Name:  Single Page Form Submit */ ?>
			<?php
				$hidden     = $_POST['hidden'];
		
				if(isset($hidden) && $hidden == 'hidden') {
				
				    // process form stuff here
						
				} else {
			?>
					<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
							<div class="form-group">
								<label for="formitem1">formitem1:</label>
								<input name="formitem1"   type="text" id="formitem1" placeholder="formitem1" value="formitem1" />
							</div>
							<div class="form-group">
								<input type="hidden" value="hidden" name="hidden">
								<input type="submit" value="submit" class="btn btn-primary">
							</div>
					</form>
			<?php } ?>
		</div>
