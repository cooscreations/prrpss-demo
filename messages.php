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


$page_ID = "6";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>

					

<!-- start: page -->
					<section class="content-with-menu mailbox">
						<div class="content-with-menu-container" data-mailbox data-mailbox-view="folder">
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
							<div class="inner-body mailbox-folder">
								<!-- START: .mailbox-header -->
								<header class="mailbox-header">
									<div class="row">
										<div class="col-md-6">
											<h1 class="mailbox-title font-weight-light m-0">
												<a id="mailboxToggleSidebar" class="sidebar-toggle-btn trigger-toggle-sidebar">
													<span class="line"></span>
													<span class="line"></span>
													<span class="line"></span>
													<span class="line line-angle1"></span>
													<span class="line line-angle2"></span>
												</a>
							
												Inbox
											</h1>
										</div>
										<div class="col-md-6">
											<div class="search">
												<div class="input-group">
													<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
													<span class="input-group-append">
														<button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
													</span>
												</div>
											</div>
										</div>
									</div>
								</header>
								<!-- END: .mailbox-header -->
							
								<!-- START: .mailbox-actions -->
								<div class="mailbox-actions">
									<ul class="list-unstyled m-0 pt-3 pb-3">
										<li class="ib mr-2">
											<div class="btn-group">
												<a href="#" class="item-action fas fa-chevron-down" data-toggle="dropdown"></a>
							
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-item"><a class="dropdown-link" href="#">All</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">None</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">Read</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">Unread</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">Starred</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">Unstarred</a></li>
												</ul>
											</div>
										</li>
										<li class="ib mr-2">
											<a class="item-action fas fa-sync" href="#"></a>
										</li>
										<li class="ib mr-2">
											<a class="item-action fas fa-tag" href="#"></a>
										</li>
										<li class="ib">
											<a class="item-action fas fa-times text-danger" href="#"></a>
										</li>
									</ul>
								</div>
								<!-- END: .mailbox-actions -->
							
								<div id="mailbox-email-list" class="mailbox-email-list">
									<div class="nano">
										<div class="nano-content">
											<ul id="" class="list-unstyled">
							
												<li class="unread">
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail1">
																<label for="mail1"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">11:35</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: #EA4C89"></i>
							
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail2">
																<label for="mail2"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">New Funds Received  &nbsp;–&nbsp;</span>
																<span class="mail-partial">Check it out.</span>
															</p>
															<i class="mail-attachment fa fa-download"></i>
															<p class="m-0 mail-date">15:35</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<i class="mail-attachment fas fa-paperclip"></i>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<i class="mail-attachment fas fa-paperclip"></i>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
												<li>
													<a href="message_string_demo.php?ID=0">
														<i class="mail-label" style="border-color: grey"></i>
														<div class="col-sender">
															<div class="checkbox-custom checkbox-text-primary ib">
																<input type="checkbox" id="mail3">
																<label for="mail3"></label>
															</div>
															<p class="m-0 ib">PRRPSS Team</p>
														</div>
														<div class="col-mail">
															<p class="m-0 mail-content">
																<span class="subject">Important Updates for your business &nbsp;–&nbsp;</span>
																<span class="mail-partial">In order to help you grow faster and with less effort, we continue to make updates to your PRRPSS system. The following email outlines the most recent updates.</span>
															</p>
															<p class="m-0 mail-date">Jul 03</p>
														</div>
													</a>
												</li>
							
											</ul>
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