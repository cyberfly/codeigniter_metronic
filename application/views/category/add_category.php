<div class="col-md-12 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> Add Article
							</div>
							<div class="tools">
								<a href="" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="" class="reload">
								</a>
								<a href="" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form action="<?php echo site_url('article/add_article'); ?>" method="post" role="form">
										
								<?php if(validation_errors()) { ?>

									<div class="note note-danger">
										<?php echo validation_errors(); ?>
									</div>

								<?php } ?>

								<?php if ($this->session->flashdata('success')): ?>

								<div class="alert alert-success">
									<?php echo $this->session->flashdata('success'); ?>
								</div>	
									
								<?php endif ?>																			

								<div class="form-body">

									<?php

									$article_div_class = ''; 
									$content_div_class = ''; 

									if(form_error('article_title'))
									{
										$article_div_class = "has-error";
									}

									if(form_error('article_content'))
									{
										$content_div_class = "has-error";
									}

									?>


									<div class="form-group <?php echo $article_div_class; ?>">
										<label>Title</label>
										<input type="text" value="<?php echo set_value('article_title'); ?>" name="article_title" id="article_title" class="form-control" placeholder="Your title here">										
										
									</div>
									<div class="form-group <?php echo $content_div_class; ?>">
										<label>Content</label>
										<textarea name="article_content" id="article_content" class="form-control" rows="20" placeholder="Your content here"><?php echo set_value('article_content'); ?></textarea>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
				
					
				</div>