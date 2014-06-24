

	<div class="row">
		<div class="col-md-12">
			<h3 class="heading">Add Page</h3>
				<form class="form-horizontal" action="<?php echo site_url('page/add_page'); ?>" method="post" >
					<fieldset>
		
								<?php $error = ''; if(form_error('page_title')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="control-label">Page Title <span class="f_req">*</span></label>
							        <div class="controls">
										<input type="text" name="page_title" id="page_title" value="<?php echo set_value('page_title'); ?>" class="form-control"  >
										<?php echo form_error('page_title', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('page_content')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="control-label">Page Content <span class="f_req">*</span></label>
							        <div class="controls">
										<textarea class="span8" rows="3" cols="10" id="page_content" name="page_content"><?php echo set_value('page_content'); ?></textarea>
										<?php echo form_error('page_content', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<div class="form-group">
									<div class="controls">
										<button class="btn btn-primary" type="submit">Save</button>
										<a class="btn btn-default" href="<?php echo site_url('page'); ?>">Cancel</a>
									</div>
								</div>

					</fieldset>
				</form>
			</div>
		</div>