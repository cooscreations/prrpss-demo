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


$page_ID = "62";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>



<!-- start: page -->
<div class="row">
	<div class="col-md-6">
		<section class="card mb-4">
			<header class="card-header">
				<div class="card-actions">
					<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
					<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
				</div>

				<h2 class="card-title">Pledges</h2>
			</header>
			<div class="card-body tet-center">
				<h2 class="text-center">140.5 ETH</h2>
				<p class="text-center">$63,340.00 USD</hp>
			</div>
			<div class="card-footer">
				<a href="pledges.php">View Full Report</a>
			</div>
		</section>
	</div>

	<div class="col-md-6">
		<section class="card mb-4">
			<header class="card-header">
				<div class="card-actions">
					<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
					<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
				</div>

				<h2 class="card-title">Funding Roadmap</h2>
				<p class="card-subtitle">From Zero to One...</p>
			</header>
			<div class="card-body">
				<ol>
				  <li>Engage small business owners to sign Letter of Intent</li>
				  <li>Engage Investors, Partners &amp; Advisors</li>
				  <li>Collect pledges on Whitelist to gauge confidence</li>
				  <li>Private Token Sale (Pre-ITO) (Limited whitelist access)</li>
				  <li>Public Token Sale (ITO) (All whitelist access)</li>
				  <li>Exchange Listing (General public access)</li>
				</ol>
			</div>
			<div class="card-footer">
				<button type="button" action="pledge.php">Pledge Now</button>
			</div>
		</section>
	</div>
</div>

<!-- end: page -->


		<?php

page_foot($page_ID);
?>
