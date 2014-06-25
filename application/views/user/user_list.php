

	
		<div class="col-md-12">
			
			<div class="portlet box purple">



				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-comments"></i> User List
					</div>
				</div>
				<div class="portlet-body">

					<?php $this->load->view('base_template/base_alert'); ?>

					<?php if($this->ion_auth->in_group('admin')){ ?>

					<div class="row">
						<div class="col-md-12">
							<a href="<?php echo site_url('user/add_user'); ?>" class="btn btn-primary" >Add User</a>
						</div>
					</div>

					<?php } ?>

					<div class="table-scrollable">

						<table class="table table-striped table-bordered table-hover" id="dt_d">
		                    <thead>
		                        <tr>
		                        	<th>No.</th>
									<th>Username</th>
									<th>Email</th>							
									<th>Created On</th>							
									<th>First Name</th>
									<th>Last Name</th>
									<th>Company</th>
									<th>Phone</th>
									<th>Action</th>
								</tr>
                    	</thead>
                   		<tbody>
	                    <?php
						    $num = 0; if(isset($user_records) && !empty($user_records)) { foreach($user_records as $row){ $num++;
						?>
						<tr>
							<td><?php echo $num; ?></td>							
							<td><?php echo $row->username; ?></td>							
							<td><?php echo $row->email; ?></td>							
							<td><?php echo $row->created_on; ?></td>							
							<td><?php echo $row->first_name; ?></td>
							<td><?php echo $row->last_name; ?></td>
							<td><?php echo $row->company; ?></td>
							<td><?php echo $row->phone; ?></td>
							<td>
                              
                              <?php if($this->ion_auth->in_group('admin')){ ?>

                              <a href="<?php echo site_url('user/edit_user/'.$row->user_id.'/'.encode_id($row->user_id)); ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
                              <a href="#" class="delete" data-id="<?php echo encode_ajax_id($row->user_id); ?>" title="Delete"><i class="icon-trash"></i></a>
                          	  
                          	  <?php } ?>		

                          	</td>
                        </tr>
                        <?php } } else { ?>						
						<tr>
							<td colspan="16">No records</td>
						</tr>
						<?php } ?>
                    </tbody>
            	</table>

            	</div>	

				</div>
			</div>
      	</div>
 	