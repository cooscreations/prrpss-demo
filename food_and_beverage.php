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


$page_ID = "11";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>

					

<!-- start: page -->

<p>This page is coming soon...</p>

<h4>Case Studies</h4>

<div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
	<div class="row">
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fa fa-utensils"></i>
					<h4>Restaurants</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
					<p>
						<a href="#restaurants" class="lnk-primary learn-more">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/#industry=restaurants">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fa fa-coffee"></i>
					<h4>Cafes</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
					<p>
						<a href="/" class="lnk-primary learn-more">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/#industry=restaurants">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fa fa-glass-martini"></i>
					<h4>Bars & Nightclubs</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
					<p>
						<a href="/" class="lnk-primary learn-more">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/#industry=restaurants">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fa fa-truck-loading"></i>
					<h4>Services</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
					<p>
						<a href="/" class="lnk-primary learn-more">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/#industry=restaurants">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fa fa-seedling"></i>
					<h4>Smallhold Farms</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
					<p>
						<a href="/" class="lnk-primary learn-more">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/#industry=restaurants">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fa fa-cookie-bite"></i>
					<h4>Community Cooking</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
					<p>
						<a href="/" class="lnk-primary learn-more">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/#industry=restaurants">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
	</div>
</div>

<hr class="tall">


<!-- end: page -->
				
				
		<?php 

page_foot($page_ID);
?>		