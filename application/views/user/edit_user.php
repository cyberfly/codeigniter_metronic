
	
		<div class="col-md-12">
			<div class="portlet box blue">
				


				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> Edit User
					</div>
				</div>
				<div class="portlet-body form">				
						


						<form class="form-horizontal" role="form" action="<?php echo site_url('user/edit_user'); ?>" method="post" >
							<div class="form-body">

								<?php $this->load->view('base_template/base_alert'); ?>		
															  	
								<?php $error = ''; if(form_error('username')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Username <span class="f_req">*</span></label>
							        <div class="col-md-5">
										<input type="text" name="username" id="username" value="<?php echo set_value('username',$user_info_records->username); ?>" class="form-control"  >
										<?php echo form_error('username', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('new_password')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">New Password </label>
							        <div class="col-md-5">
										<input type="password" name="new_password" id="new_password" value="" class="form-control"  >
										<?php echo form_error('new_password', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>

							  	<?php $error = ''; if(form_error('password_confirm')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Confirm Password </label>
							        <div class="col-md-5">
										<input type="password" name="password_confirm" id="password_confirm" value="" class="form-control"  >
										<?php echo form_error('password_confirm', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>							  	
															  	
								<?php $error = ''; if(form_error('email')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Email <span class="f_req">*</span></label>
							        <div class="col-md-5">
										<input type="text" name="email" id="email" value="<?php echo set_value('email',$user_info_records->email); ?>" class="form-control"  >
										<?php echo form_error('email', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>						  	
															  	
								<?php $error = ''; if(form_error('first_name')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">First Name <span class="f_req">*</span></label>
							        <div class="col-md-5">
										<input type="text" name="first_name" id="first_name" value="<?php echo set_value('first_name',$user_info_records->first_name); ?>" class="form-control"  >
										<?php echo form_error('first_name', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('last_name')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Last Name <span class="f_req">*</span></label>
							        <div class="col-md-5">
										<input type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name',$user_info_records->last_name); ?>" class="form-control"  >
										<?php echo form_error('last_name', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('company')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Company <span class="f_req">*</span></label>
							        <div class="col-md-5">
										<input type="text" name="company" id="company" value="<?php echo set_value('company',$user_info_records->company); ?>" class="form-control"  >
										<?php echo form_error('company', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('phone')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Phone <span class="f_req">*</span></label>
							        <div class="col-md-5">
										<input type="text" name="phone" id="phone" value="<?php echo set_value('phone',$user_info_records->phone); ?>" class="form-control"  >
										<?php echo form_error('phone', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>

							  	<?php $error = ''; if(form_error('address')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Address </label>
							        <div class="col-md-5">
										<input type="text" name="address" id="address" value="<?php echo set_value('address',$user_info_records->address); ?>" class="form-control"  >
										<?php echo form_error('address', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('state')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">State </label>
							        <div class="col-md-5">
										<input type="text" name="state" id="state" value="<?php echo set_value('state',$user_info_records->state); ?>" class="form-control"  >
										<?php echo form_error('state', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('city')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">City </label>
							        <div class="col-md-5">
										<input type="text" name="city" id="city" value="<?php echo set_value('city',$user_info_records->city); ?>" class="form-control"  >
										<?php echo form_error('city', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('office_no')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Office No </label>
							        <div class="col-md-5">
										<input type="text" name="office_no" id="office_no" value="<?php echo set_value('office_no',$user_info_records->office_no); ?>" class="form-control"  >
										<?php echo form_error('office_no', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('fax_no')){ $error = 'has-error'; } ?>

							   	<div class="form-group <?php echo $error; ?>">
							        <label for="" class="col-md-2 control-label">Fax No </label>
							        <div class="col-md-5">
										<input type="text" name="fax_no" id="fax_no" value="<?php echo set_value('fax_no',$user_info_records->fax_no); ?>" class="form-control"  >
										<?php echo form_error('fax_no', '<span class="help-block">', '</span>'); ?>
									</div>
							  	</div>
							  									

					</div>
					<div class="form-actions fluid">
						<div class="col-md-offset-2 col-md-10">							
							<input type="hidden" name="user_id" value="<?php echo encode_form_id($user_info_records->user_id); ?>" />
							
							<button class="btn btn-success" type="submit">Save Changes</button>
							<a class="btn btn-default" href="<?php echo site_url('user/user_list'); ?>">Cancel</a>
						</div>
					</div>			
				</form>
				</div>
				</div>
			</div>
			