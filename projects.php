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


$page_ID = "53";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>



<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Project List</h2>
									</header>
									<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<button id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
										</div>
									</div>
								</div>
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
													<th>Company</th>
													<th>Name</th>
													<th>Group</th>
													<th>Phone</th>
													<th>Email</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Company</th>
													<th>Name</th>
													<th>Group</th>
													<th>Phone</th>
													<th>Email</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
												<tr>
													<th><a href="customer_profile.php?ID=1">Hermitage Landscape Gardening</a></th>
													<th><a href="user_profile.php?ID=0">Joan Pool</a></th>
													<th><a href="tradespeople.php">Customer</a></th>
													<th><a href="callto:+44123123123">+44123123123</a></th>
													<th><a href="mailto:joan@hermitagespam.co.uk"><i class="fa fa-envelope"></i></a></th>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>

<!-- end: page -->


		<?php

page_foot($page_ID);
?>
