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


$page_ID = "3";
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
											
											<div class="wallet_buttons">
												<button type="button" class="mb-1 mt-1 mr-1 btn btn-danger"><i class="fas fa-cloud-upload"></i> Send</button>
												<button type="button" class="mb-1 mt-1 mr-1 btn btn-success"><i class="fas fa-cloud-download"></i> Receive</button>
											</div>
							
											<ul class="list-unstyled mt-3 pt-3">
												<li>
													<a href="mailbox-folder.html" class="menu-item active">Home <span class="badge badge-primary font-weight-normal float-right">43</span></a>
												</li>
												<li>
													<a href="mailbox-folder.html" class="menu-item">Summary</a>
												</li>
												<li>
													<a href="mailbox-folder.html" class="menu-item">Activity</a>
												</li>
												<li>
													<a href="mailbox-folder.html" class="menu-item">QR Codes / Address</a>
												</li>
												<li>
													<a href="mailbox-folder.html" class="menu-item">Portfolio</a>
												</li>
											</ul>
							
											<hr class="separator" />
							
											<div class="sidebar-widget m-0">
												<div class="widget-header">
													<h6 class="title">Categories</h6>
													<span class="widget-toggle">+</span>
												</div>
												<div class="widget-content">
													<ul class="list-unstyled mailbox-bullets">
														<li>
															<a href="#" class="menu-item">Income <span class="ball green"></span></a>
														</li>
														<li>
															<a href="#" class="menu-item">Spending <span class="ball red"></span></a>
														</li>
														<li>
															<a href="#" class="menu-item">Fees &amp; Admin <span class="ball blue"></span></a>
														</li>
													</ul>
												</div>
											</div>
							
											<hr class="separator" />
							
											<div class="sidebar-widget m-0">
												<div class="widget-header">
													<h6 class="title">Switch Currencies</h6>
													<span class="widget-toggle">+</span>
												</div>
												<div class="widget-content">
													<ul class="list-unstyled mailbox-bullets">
														<li>
															<a href="#" class="menu-item">PRR <span class="ball green"></span></a>
														</li>
														<li>
															<a href="#" class="menu-item">PSS <span class="ball green"></span></a>
														</li>
														<li>
															<a href="#" class="menu-item">BTC <span class="ball orange"></span></a>
														</li>
														<li>
															<a href="#" class="menu-item">ETH <span class="ball red"></span></a>
														</li>
														<li>
															<a href="#" class="menu-item">USD <span class="ball red"></span></a>
														</li>
														<li class="text-center mt-3">
															<em><a href="#">show all</a></em>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</menu>
							<div class="inner-body mailbox-folder">
								<!-- START: .mailbox-header -->
								<header class="mailbox-header">
								<div class="row">
									<div class="col">
									<a class="" href="wallet.php#secure"><i class="fa fa-lock fa-fw"></i> Safe &amp; Secure</a> 
									| <a class="" href="wallet.php#send_rec"><i class="fa fa-recycle fa-fw"></i> Send &amp; Receive</a>
									| <a class="" href="wallet.php#credit_card"><i class="fa fa-credit-card fa-fw"></i> Credit Card &amp; ATM</a>
									| <a class="" href="wallet.php#mobile"><i class="fa fa-mobile fa-fw"></i> Mobile Payments</a>
									| <a class="" href="wallet.php#intl_pay"><i class="fa fa-globe fa-fw"></i> International Transfers</a>
									</div>
								</div>
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
							
												Recent Activity
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
													<li class="dropdown-item"><a class="dropdown-link" href="#">Income</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">Expense</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">Taxes</a></li>
													<li class="dropdown-item"><a class="dropdown-link" href="#">Fees</a></li>
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
								
									<table class="table table-responsive-md table-hover mb-0">
										<thead>
											<tr>
												<th>Time</th>
												<th>Type</th>
												<th>Amount</th>
												<th>Status</th>
												<th>Reason</th>
												<th>Notes</th>
												<th>Info</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>2018-06-24 16:20</td>
												<td><span class="ball green">+</span></td>
												<td>12.453 PRR</td>
												<td>OK</td>
												<td>Payment</td>
												<td>Payment for minor design work</td>
												<td>(?)</td>
											</tr>
											<tr>
												<td>2018-06-24 11:36</td>
												<td><span class="ball red">-</span></td>
												<td>4.234 PRR</td>
												<td>OK</td>
												<td>Payment</td>
												<td>Food & Beverage</td>
												<td>(?)</td>
											</tr>
											<tr>
												<td>2018-06-23 13:28</td>
												<td><span class="ball red">-</span></td>
												<td>3.735 PRR</td>
												<td>OK</td>
												<td>Payment</td>
												<td>Fuel</td>
												<td>(?)</td>
											</tr>
											<tr>
												<td>2018-06-23 08:20</td>
												<td><span class="ball green">+</span></td>
												<td>4.241 PRR</td>
												<td>OK</td>
												<td>Payment</td>
												<td>Sold old phone</td>
												<td>(?)</td>
											</tr>
										</tbody>
									</table>
								
								
								
									
								</div>
							</div>
						</div>
					</section>
					<!-- end: page -->
				
				
		<?php 

page_foot($page_ID);
?>		