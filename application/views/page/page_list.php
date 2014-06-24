

	<div class="row">
		<div class="col-md-12">
			<h3 class="heading">Page List</h3>

				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo site_url('page/add_page'); ?>" class="btn btn-primary" >Add Page</a>
					</div>
				</div>

				<table class="table table-striped table-bordered" id="dt_d">
                    <thead>
                        <tr>
                        	<th>No.</th>
                        	<th>Page Title</th>
							<th>Page Content</th>
							<th>Author</th>
							<th>Action</th>
						</tr>
                    </thead>
                    <tbody>
	                    <?php
						    $num = 0; if(isset($page_records) && !empty($page_records)) { foreach($page_records as $row){ $num++;
						?>
						<tr>
							<td></td>
							<td><?php echo $row->page_title; ?></td>
							<td><?php echo $row->page_content; ?></td>
							<td><?php echo $row->author_name; ?></td>
							<td>
                              <a href="<?php echo site_url('page/edit_page/'.$row->page_id.'/'.encode_id($row->page_id)); ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
                              <a href="#" class="delete" data-id="<?php echo encode_ajax_id($row->page_id); ?>" title="Delete"><span class="glyphicon-class">glyphicon glyphicon-trash</span></a>
                          	</td>
                        </tr>
                        <?php } } else { ?>						
						<tr colspan="3">
							<td>No records</td>
						</tr>
						<?php } ?>
                    </tbody>
            	</table>
      	</div>
 	</div>