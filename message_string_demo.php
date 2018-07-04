<?php 

// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
/* ////// */     session_start ();     /* ////// */
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
//   now check the user is OK to view this page  //
/* ///// */  require ('page_access.php');  /*////*/
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////


$page_ID = "7";
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
							<div class="inner-body mailbox-email">
								<div class="mailbox-email-header mb-3">
									<h3 class="mailbox-email-subject m-0 font-weight-light">
										Your PRRPSS Funds have been deposited!
									</h3>
							
									<p class="mt-2 mb-0 text-5">From <a href="user_profile.php?ID=0">PRRPSS Team</a> to <a href="user_profile.php?me">You</a>, started on July, 05, 2018</p>
								</div>
								<div class="mailbox-email-container">
									<div class="mailbox-email-screen pt-4">
										<div class="card mb-3">
											<div class="card-header">
												<div class="card-actions">
													<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
													<a href="#" class="fas fa-reply"></a>
													<a href="#" class="fas fa-reply-all"></a>
													<a href="#" class="far fa-star"></a>
												</div>
							
												<p class="card-title">PRRPSS Team <i class="fas fa-angle-right fa-fw"></i> You</p>
											</div>
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
							
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
											</div>
											<div class="card-footer">
												<p class="m-0"><small>2018-07-01 13:22</small></p>
											</div>
										</div>
							
										<div class="card mb-3">
											<div class="card-header">
												<div class="card-actions">
													<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
													<a href="#" class="fas fa-reply"></a>
													<a href="#" class="fas fa-reply-all"></a>
													<a href="#" class="far fa-star"></a>
												</div>
							
												<p class="card-title">You <i class="fas fa-angle-right fa-fw"></i> PRRPSS Team
											</div>
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
							
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
											</div>
											<div class="card-footer">
												<p class="m-0"><small>2018-06-26 11:56</small></p>
											</div>
										</div>
							
										<div class="card mb-3">
											<div class="card-header">
												<div class="card-actions">
													<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
													<a href="#" class="fas fa-reply"></a>
													<a href="#" class="fas fa-reply-all"></a>
													<a href="#" class="far fa-star"></a>
												</div>
							
												<p class="card-title">PRRPSS Team <i class="fas fa-angle-right fa-fw"></i> You
											</div>
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
							
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat nulla et sollicitudin volutpat. Suspendisse consequat massa et varius tincidunt. In quis velit et enim posuere consectetur at et erat. Praesent condimentum ipsum non ligula tempor cursus. Maecenas ornare vitae nibh blandit suscipit. Nulla suscipit mollis dui vitae porttitor. Nulla faucibus neque leo. Sed tincidunt enim sit amet tellus bibendum consectetur. Nunc lobortis metus posuere adipiscing auctor. Duis ante ipsum, malesuada eu risus vitae, mattis dapibus arcu. Nullam metus dui, fermentum dictum nulla id, gravida dignissim eros.</p>
											</div>
											<div class="card-footer">
												<p class="m-0"><small>2018-06-25 00:12</small></p>
											</div>
										</div>
									</div>
							
									<div class="compose pt-3">
										<div id="compose-field" class="compose">
										</div>
										<div class="text-right mt-3">
											<a href="compose_mail.php?from_string" class="btn btn-primary">
												<i class="fas fa-paper-plane mr-1"></i>
												Send
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- end: page -->
				
				
		<?php 

page_foot($page_ID);
?>		