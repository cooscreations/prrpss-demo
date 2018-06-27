<?php 
$page_ID = "5";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>

					

<!-- start: page -->
					<section class="content-with-menu mailbox">
						<div class="content-with-menu-container" data-mailbox data-mailbox-view="email">
							<div class="inner-menu-toggle">
								<a href="#" class="inner-menu-expand" data-open="inner-menu">
									Show Menu <i class="fas fa-chevron-right"></i>
								</a>
							</div>
							
							<menu id="content-menu" class="inner-menu" role="menu">
								<div class="nano">
									<div class="nano-content">
							
										<div class="inner-menu-toggle-inside">
											<a href="#" class="inner-menu-collapse">
												<i class="fas fa-chevron-up d-inline-block d-md-none"></i><i class="fas fa-chevron-left d-none d-md-inline-block"></i> Hide Menu
											</a>
							
											<a href="#" class="inner-menu-expand" data-open="inner-menu">
												Show Menu <i class="fas fa-chevron-down"></i>
											</a>
										</div>
							
										<div class="inner-menu-content">
											<a href="compose_mail.php" class="btn btn-block btn-primary btn-md pt-2 pb-2 text-3">
												<i class="fas fa-envelope mr-1"></i>
												Compose
											</a>
							
											<?php mail_main_menu(); ?>
							
											<hr class="separator" />
											
											<?php mail_labels(); ?>
							
											<hr class="separator" />
							
											<?php chat_user_list(); ?>
										</div>
									</div>
								</div>
							</menu>
							<div class="inner-body">
								<div class="inner-toolbar clearfix">
									<ul>
										<li>
											<a href="#"><i class="far fa-paper-plane mr-2"></i> Send</a>
										</li>
										<li>
											<a href="#"><i class="fas fa-times mr-2"></i> Discard</a>
										</li>
										<li>
											<a href="#"><i class="fas fa-paperclip mr-2"></i> Attach</a>
										</li>
									</ul>
								</div>
								<div class="mailbox-compose">
									<form class="form-horizontal form-bordered form-bordered">
							
										<div class="form-group form-group-invisible">
											<label for="to" class="control-label-invisible">To:</label>
											<div class="col-md-12 mailbox-compose-field">
												<input id="to" type="text" class="form-control form-control-invisible" data-role="tagsinput" data-tag-class="badge badge-primary" value="">
											</div>
										</div>
							
										<div class="form-group form-group-invisible">
											<label for="cc" class="control-label-invisible">CC:</label>
											<div class="col-md-12 mailbox-compose-field">
												<input id="cc" type="text" class="form-control form-control-invisible" data-role="tagsinput" data-tag-class="badge badge-primary" value="">
											</div>
										</div>
							
										<div class="form-group form-group-invisible">
											<label for="subject" class="control-label-invisible">Subject:</label>
											<div class="col-md-12 mailbox-compose-field">
												<input id="subject" type="text" class="form-control form-control-invisible" value="">
											</div>
										</div>
							
										<div class="form-group">
										  <p>Compose Message Editor coming here soon...</p>
											<div class="compose">
												<div id="compose-field" class="compose-control">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
					<!-- end: page -->
				
				
		<?php 

page_foot($page_ID);
?>		