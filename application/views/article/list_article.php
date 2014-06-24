<div class="col-md-12 ">

	<?php if ($this->session->flashdata('success')): ?>

	<div class="alert alert-success">
		<?php echo $this->session->flashdata('success'); ?>
	</div>

	<?php endif ?>

	<a class="btn btn-primary" href="<?php echo site_url('article/add_article'); ?>">Add Article</a>

	<div class="table-scrollable">
						<table class="table table-striped table-bordered table-advance table-hover">
						<thead>
						<tr>
							<th>
								<i class="fa fa-briefcase"></i> Title
							</th>
							<th class="hidden-xs">
								<i class="fa fa-user"></i> Content
							</th>
							<th>
								<i class="fa fa-shopping-cart"></i> Author
							</th>
							<th>
								Action
							</th>
						</tr>
						</thead>
						<tbody>

						<?php 

						if(isset($article_records) && !empty($article_records))
						{
							foreach ($article_records as $row) {
									
						?>	

						<tr>
							<td class="highlight">
								<div class="success">
								</div>
								<a href="#">
								<?php echo $row->article_title; ?> </a>
							</td>
							<td class="hidden-xs">
								 <?php echo $row->article_content; ?>
							</td>
							<td>
								 <?php echo $row->author_name; ?>
							</td>
							<td>
								<a class="btn default btn-xs purple" href="<?php echo site_url("article/edit_article/$row->article_id"); ?>">
								<i class="fa fa-edit"></i> Edit </a>

								<?php if($this->ion_auth->in_group('admin')){ ?>

								<a class="btn default btn-xs purple delete" href="#" data-id="<?php echo $row->article_id; ?>" >
								<i class="fa fa-trash-o"></i> Delete </a>

								<?php } ?>
							</td>
						</tr>

						<?php } } ?>
						
						</tbody>
						</table>
					</div>
				
					
				</div>