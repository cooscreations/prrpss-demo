<?php 
				
function page_head($page_ID) {

include 'db_conn.php';

$add_breadcrumbs = '';
// get page info from the DB:
$page_name = "Page Not Set";

if ($page_ID == '1') {
	$page_name = 'Home';
	
}
else if ($page_ID == '2') {
	$page_name = 'Search';
	
}
else if ($page_ID == '3') {
	$page_name = 'Wallet';
	
}
else if ($page_ID == '4') {
	$page_name = 'Profile';
	$add_breadcrumbs = '<li>
							<a href="users.php">
								<i class="fas fa-users"></i>
							</a>
						</li>';
	
}
else if ($page_ID == '5') {
	$page_name = 'Compose New Message';
	$add_breadcrumbs = '<li>
							<a href="messages.php">
								<i class="fas fa-envelope"></i>
							</a>
						</li>';
}
else if ($page_ID == '6') {
	$page_name = 'Messages';
}
else if ($page_ID == '7') {
	$page_name = 'Message View';
	$add_breadcrumbs = '<li>
							<a href="messages.php">
								<i class="fas fa-envelope"></i>
							</a>
						</li>';
}

else if ($page_ID == '8') {
	$page_name = 'About';
}
else if ($page_ID == '9') {
	$page_name = 'Help';
}
else if ($page_ID == '10') {
	$page_name = 'Tradesmen';
}
else if ($page_ID == '11') {
	$page_name = 'Food & Beverage';
}
else if ($page_ID == '12') {
	$page_name = 'Services';
}
else if ($page_ID == '13') {
	$page_name = 'Entertainment';
}
else if ($page_ID == '14') {
	$page_name = 'Fashion & Retail';
}
else if ($page_ID == '15') {
	$page_name = 'Health & Wellness';
}
else if ($page_ID == '16') {
	$page_name = 'Sports & Recreation';
}
else if ($page_ID == '17') {
	$page_name = 'Manufacturing';
}


?>
<!doctype html>
<html class="fixed fixed dark">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>PRRPSS - Driven by Data - <?php echo $page_name; ?></title>
		<meta name="keywords" content="PRRPSS, Driven by Data, Dashboard - <?php echo $page_name; ?>" />
		<meta name="description" content="PRRPSS, Driven by Data, Dashboard - <?php echo $page_name; ?>">
		<meta name="author" content="prrpss.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.css" />

		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" /> 
		<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-87DrmpqHRiY8hPLIr7ByqhPIywuSsjuQAfMXAE0sMUpY3BM7nXjf+mLIUSvhDArs" crossorigin="anonymous">-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>		

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header header-nav-menu">
				<div class="logo-container">
					<a href="/demo" class="logo">
						<img src="img/logo.png" width="75" height="35" alt="PRRPSS" />
					</a>
					<button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
						<i class="fas fa-bars"></i>
					</button>
			
					<!-- start: header nav menu -->
					<div class="header-nav collapse">
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
							<nav>
								<ul class="nav nav-pills" id="mainNav">
								
								<li class="dropdown dropdown-mega">
									    <a class="nav-link dropdown-toggle" href="#">Industries</a>
									
									
									
									
									<ul class="dropdown-menu">
										<li>
											<div class="dropdown-mega-content">
												<div class="container">
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Tradespeople</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-users fa-fw"></i> Builders</a></li>
																	<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-building-o fa-fw"></i> Gardeners</a></li>
																	<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-scissors fa-fw"></i> Electricians</a></li>
																	<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-copy fa-fw"></i> Plumbers</a></li>
																	<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-eye fa-fw"></i> Carpenters</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Food &amp; Beverage</h4></li>

																	<!-- Buttons -->
																	<li><a href="food_and_beverage.php"><i class="fa fa-database fa-fw"></i> Community Cooking</a></li>
																	<li><a href="food_and_beverage.php"><i class="fa fa-cannabis fa-fw"></i> Smallhold Farms</a></li>
																	<li><a href="food_and_beverage.php"><i class="fa fa-money fa-fw"></i> Restaurants</a></li>
																	<li><a href="food_and_beverage.php"><i class="fa fa-globe fa-fw"></i> Cafes</a></li>
																	<li><a href="food_and_beverage.php"><i class="fa fa-briefcase fa-fw"></i> Services</a></li>
																	<li><a href="food_and_beverage.php"><i class="fa fa-eye fa-fw"></i> Bars &amp; Nightclubs</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Services</h4></li>

																	<!-- Common Elements -->
																	<li><a href="service_industries.php"><i class="fa fa-rocket fa-fw"></i> Bookkeepers</a></li>
																	<li><a href="service_industries.php"><i class="fa fa-video-camera fa-fw"></i> Design Agencies</a></li>
																	<li><a href="service_industries.php"><i class="fa fa-eye fa-fw"></i> Consultants</a></li>
																	<li><a href="service_industries.php"><i class="fa fa-eye fa-fw"></i> Training &amp; Education</a></li>
																	<li><a href="service_industries.php"><i class="fa fa-eye fa-fw"></i> Cleaning</a></li>
																	<li><a href="service_industries.php"><i class="fa fa-eye fa-fw"></i> Insurance</a></li>
																	<li><a href="service_industries.php"><i class="fa fa-eye fa-fw"></i> IT Services</a></li>
																	<!-- End Common Elements -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Entertainment</h4></li>

																	<!-- Forms -->
																	<li><a href="entertainment_industries.php"><i class="fa fa-stethoscope fa-fw"></i> Live Music</a></li>
																	<li><a href="entertainment_industries.php"><i class="fa fa-tree fa-fw"></i> Festivals</a></li>
																	<li><a href="entertainment_industries.php"><i class="fa fa-medkit fa-fw"></i> Live TV</a></li>
																	<li><a href="entertainment_industries.php"><i class="fa fa-gamepad fa-fw"></i> Video Production</a></li>
																	<li><a href="entertainment_industries.php"><i class="fa fa-industry fa-fw"></i> Equipment</a></li>
																	<li><a href="entertainment_industries.php"><i class="fa fa-eye fa-fw"></i> Reporting</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
													
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Fashion &amp; Retail</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-eye fa-fw"></i> Hair</a></li>
																	<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-users fa-fw"></i> Make-up</a></li>
																	<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-building-o fa-fw"></i> Clothing</a></li>
																	<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-scissors fa-fw"></i> Shoes</a></li>
																	<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-copy fa-fw"></i> Accessories</a></li>
																	<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-copy fa-fw"></i> Live Events</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Health &amp; Wellness</h4></li>

																	<!-- Buttons -->
																	<li><a href="health_wellness.php"><i class="fa fa-eye fa-fw"></i> Yoga & Meditation</a></li>
																	<li><a href="health_wellness.php"><i class="fa fa-database fa-fw"></i> Nutritionists</a></li>
																	<li><a href="health_wellness.php"><i class="fa fa-bullhorn fa-fw"></i> Personal Trainers</a></li>
																	<li><a href="health_wellness.php"><i class="fa fa-money fa-fw"></i> Equipment &amp; Supplies</a></li>
																	<li><a href="health_wellness.php"><i class="fa fa-globe fa-fw"></i> Hospitals &amp; Clinics</a></li>
																	<li><a href="health_wellness.php"><i class="fa fa-briefcase fa-fw"></i> Live Events</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Sports &amp; Recreation</h4></li>

																	<!-- Common Elements -->
																	<li><a href="sports_recreation.php"><i class="fa fa-rocket fa-fw"></i> Fan Clubs</a></li>
																	<li><a href="sports_recreation.php"><i class="fa fa-video-camera fa-fw"></i> Leagues &amp; Competitions</a></li>
																	<li><a href="sports_recreation.php"><i class="fa fa-eye fa-fw"></i> Equipment &amp; Supplies</a></li>
																	<li><a href="sports_recreation.php"><i class="fa fa-eye fa-fw"></i> Community Groups</a></li>
																	<li><a href="sports_recreation.php"><i class="fa fa-eye fa-fw"></i> Kid's Activities</a></li>
																	<li><a href="sports_recreation.php"><i class="fa fa-eye fa-fw"></i> Live Events</a></li>
																	<!-- End Common Elements -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Manufacturing</h4></li>

																	<!-- Forms -->
																	<li><a href="manufacturing_industries.php"><i class="fa fa-stethoscope fa-fw"></i> Factories</a></li>
																	<li><a href="manufacturing_industries.php"><i class="fa fa-tree fa-fw"></i> Farms</a></li>
																	<li><a href="manufacturing_industries.php"><i class="fa fa-medkit fa-fw"></i> Labs</a></li>
																	<li><a href="manufacturing_industries.php"><i class="fa fa-gamepad fa-fw"></i> DIY</a></li>
																	<li><a href="manufacturing_industries.php"><i class="fa fa-industry fa-fw"></i> Logistics</a></li>
																	<li><a href="manufacturing_industries.php"><i class="fa fa-eye fa-fw"></i> Quality Assurance</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								
								
								
									
									
									<li class="dropdown dropdown-mega">
									    <a class="nav-link dropdown-toggle" href="#">Apps</a>
									
									
									
									
									<ul class="dropdown-menu">
										<li>
											<div class="dropdown-mega-content">
												<div class="container">
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Human Resources</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="#"><i class="fa fa-users fa-fw"></i> Recruiting</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-building-o fa-fw"></i> Training &amp; Development</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-scissors fa-fw"></i> Payroll</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-copy fa-fw"></i> Leave</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-eye fa-fw"></i> Discipline &amp; Dismissal</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Corporate</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-database fa-fw"></i> Mission &amp; Vision</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Policies &amp; Procedures</a></li>
																	<li><a href="#"><i class="fa fa-money fa-fw"></i> Forms &amp; Documents</a></li>
																	<li><a href="#"><i class="fa fa-globe fa-fw"></i> Reporting</a></li>
																	<li><a href="#"><i class="fa fa-briefcase fa-fw"></i> Government Relations</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Taxes &amp; Charity</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Customer Services (CRM)</h4></li>

																	<!-- Common Elements -->
																	<li><a href="#"><i class="fa fa-rocket fa-fw"></i> Client List</a></li>
																	<li><a href="#"><i class="fa fa-video-camera fa-fw"></i> Broadcast Message</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Inbox</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Business Intelligence</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Reporting</a></li>
																	<!-- End Common Elements -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Procurement</h4></li>

																	<!-- Forms -->
																	<li><a href="#"><i class="fa fa-stethoscope fa-fw"></i> Supplier List</a></li>
																	<li><a href="#"><i class="fa fa-tree fa-fw"></i> Purchase Orders</a></li>
																	<li><a href="#"><i class="fa fa-medkit fa-fw"></i> Supplier Audit</a></li>
																	<li><a href="#"><i class="fa fa-gamepad fa-fw"></i> Products</a></li>
																	<li><a href="#"><i class="fa fa-industry fa-fw"></i> Services</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Reporting</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
													
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Production</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="#"><i class="fa fa-copy fa-fw"></i> Projects</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-lightbulb fa-fw"></i> Forecasting</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-robot fa-fw"></i> Equipment</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-industry fa-fw"></i> Suppliers</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-clipboard-check fa-fw"></i> Quality</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>e-Commerce</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-boxes fa-fw"></i> Products</a></li>
																	<li><a href="#"><i class="fa fa-stopwatch fa-fw"></i> Services</a></li>
																	<li><a href="#"><i class="fa fa-hand-holding-usd fa-fw"></i> On-Site POS</a></li>
																	<li><a href="#"><i class="fa fa-calendar-check fa-fw"></i> Booking</a></li>
																	<li><a href="#"><i class="fa fa-truck-loading fa-fw"></i> Logistics</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Distribution</h4></li>

																	<!-- Common Elements -->
																	<li><a href="#"><i class="fa fa-taxi fa-fw"></i> Vehicles</a></li>
																	<li><a href="#"><i class="fa fa-user-astronaut fa-fw"></i> Drivers</a></li>
																	<li><a href="#"><i class="fa fa-file-invoice-dollar fa-fw"></i> Orders</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Reporting</a></li>
																	<!-- End Common Elements -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Sales</h4></li>

																	<!-- Forms -->
																	<li><a href="#"><i class="fa fa-tree fa-fw"></i> Accounts</a></li>
																	<li><a href="#"><i class="fa fa-medkit fa-fw"></i> Clients</a></li>
																	<li><a href="#"><i class="fa fa-gamepad fa-fw"></i> Orders</a></li>
																	<li><a href="#"><i class="fa fa-industry fa-fw"></i> Calendar</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Reporting</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								
									
									
									<li class="dropdown dropdown-mega">
									    <a class="nav-link dropdown-toggle" href="#">Technology</a>
									
									
									
									
									<ul class="dropdown-menu">
										<li>
											<div class="dropdown-mega-content">
												<div class="container">
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Power</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="#"><i class="fa fa-sun fa-fw"></i> Clean Energy</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-seedling fa-fw"></i> Storage &amp; Distribution</a></li>
																	<li><a class="nav-link" href="#"><i class="fa fa-copy fa-fw"></i> Emergency Power</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Network</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-database fa-fw"></i> Masternode</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Policies &amp; Procedures</a></li>
																	<li><a href="#"><i class="fa fa-money fa-fw"></i> Forms &amp; Documents</a></li>
																	<li><a href="#"><i class="fa fa-globe fa-fw"></i> Reporting</a></li>
																	<li><a href="#"><i class="fa fa-briefcase fa-fw"></i> Government Relations</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Taxes &amp; Charity</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Hardware</h4></li>

																	<!-- Common Elements -->
																	<li><a href="#"><i class="fa fa-laptop fa-fw"></i> Devices</a></li>
																	<li><a href="#"><i class="fa fa-dice-five fa-fw"></i> FiddleCube</a></li>
																	<li><a href="#"><i class="fa fa-download fa-fw"></i> Cold Storage</a></li>
																	<li><a href="#"><i class="fa fa-fingerprint fa-fw"></i> Biometric Ring</a></li>
																	<li><a href="#"><i class="fa fa-door-closed fa-fw"></i> Door Entry Systems</a></li>
																	<!-- End Common Elements -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Data Storage</h4></li>

																	<!-- Forms -->
																	<li><a href="#"><i class="fa fa-stethoscope fa-fw"></i> Supplier List</a></li>
																	<li><a href="#"><i class="fa fa-tree fa-fw"></i> Purchase Orders</a></li>
																	<li><a href="#"><i class="fa fa-medkit fa-fw"></i> Supplier Audit</a></li>
																	<li><a href="#"><i class="fa fa-gamepad fa-fw"></i> Products</a></li>
																	<li><a href="#"><i class="fa fa-industry fa-fw"></i> Services</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Reporting</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
													
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Security</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-code fa-fw"></i> Encryption</a></li>
																	<li><a href="#"><i class="fa fa-laptop fa-fw"></i> Hardware</a></li>
																	<li><a href="#"><i class="fa fa-list-ol fa-fw"></i> 3rd Party Auditors</a></li>
																	<li><a href="#"><i class="fa fa-user-check fa-fw"></i> Simulations</a></li>
																	<li><a href="#"><i class="fa fa-globe fa-fw"></i> Compliance</a></li>
																	<li><a href="#"><i class="fa fa-briefcase fa-fw"></i> Legal</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>User Interface</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-object-group fa-fw"></i> Custom Dashboards</a></li>
																	<li><a href="#"><i class="fa fa-eye fa-fw"></i> Dark Theme</a></li>
																	<li><a href="#"><i class="fa fa-mobile fa-fw"></i> Mobile Ready</a></li>
																	<li><a href="#"><i class="fa fa-chart-bar fa-fw"></i> Performance</a></li>
																	<li><a href="#"><i class="fa fa-gamepad fa-fw"></i> Accessories</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Blockchain</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="blockchain.php"><i class="fa fa-lock fa-fw"></i> Private</a></li>
																	<li><a class="nav-link" href="blockchain.php"><i class="fa fa-lock-open fa-fw"></i> Semi-Private</a></li>
																	<li><a class="nav-link" href="blockchain.php"><i class="fa fa-link fa-fw"></i> Consortium</a></li>
																	<li><a class="nav-link" href="blockchain.php"><i class="fa fa-bezier-curve fa-fw"></i> Public</a></li>
																	<li><a class="nav-link" href="whitepaper.php"><i class="fa fa-newspaper fa-fw"></i> Whitepaper</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>User Experience</h4></li>

																	<!-- Forms -->
																	<li><a href="#"><i class="fa fa-user-plus fa-fw"></i> Registration</a></li>
																	<li><a href="#"><i class="fa fa-sign-in fa-fw"></i> Log In</a></li>
																	<li><a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Training</a></li>
																	<li><a href="#"><i class="fa fa-life-ring fa-fw"></i> Support</a></li>
																	<li><a href="#"><i class="fa fa-calendar fa-fw"></i> Calendar</a></li>
																	<li><a href="#"><i class="fa fa-chart-bar fa-fw"></i> Reporting</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
									
								<li class="dropdown dropdown-mega">
									    <a class="nav-link dropdown-toggle" href="#">Currency</a>
									
									
									
									
									<ul class="dropdown-menu">
										<li>
											<div class="dropdown-mega-content">
												<div class="container">
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Wallet</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="wallet.php_secure"><i class="fa fa-lock fa-fw"></i> Safe &amp; Secure</a></li>
																	<li><a class="nav-link" href="wallet.php#send_rec"><i class="fa fa-recycle fa-fw"></i> Send &amp; Receive</a></li>
																	<li><a class="nav-link" href="wallet.php#credit_card"><i class="fa fa-credit-card fa-fw"></i> Credit Card &amp; ATM</a></li>
																	<li><a class="nav-link" href="wallet.php#mobile"><i class="fa fa-mobile fa-fw"></i> Mobile Payments</a></li>
																	<li><a class="nav-link" href="wallet.php#intl_pay"><i class="fa fa-globe fa-fw"></i> International Transfers</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Purchase</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-home-heart fa-fw"></i> Friends &amp; Family</a></li>
																	<li><a href="#"><i class="fa fa-hand-holding-heart fa-fw"></i> Early Investors</a></li>
																	<li><a href="#"><i class="fa fa-box-heart fa-fw"></i> Pre-ITO</a></li>
																	<li><a href="#"><i class="fa fa-book-heart fa-fw"></i> ITO</a></li>
																	<li><a href="#"><i class="fa fa-heart-circle fa-fw"></i> Exchanges</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Marketplace</h4></li>

																	<!-- Common Elements -->
																	<li><a href="#"><i class="fa fa-plus-square fa-fw"></i> Add My Business</a></li>
																	<li><a href="#"><i class="fa fa-tachometer-alt fa-fw"></i> My Dashboard</a></li>
																	<li><a href="#"><i class="fa fa-star fa-fw"></i> My Favourites</a></li>
																	<li><a href="#"><i class="fa fa-search fa-fw"></i> Search</a></li>
																	<!-- End Common Elements -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Performance-Related-Pay</h4></li>

																	<!-- Forms -->
																	<li><a href="#"><i class="fa fa-plus-square fa-fw"></i> Add a Task</a></li>
																	<li><a href="#"><i class="fa fa-award fa-fw"></i> Top Performers</a></li>
																	<li><a href="#"><i class="fa fa-tachometer-alt fa-fw"></i> My Dashboard</a></li>
																	<li><a href="#"><i class="fa fa-chart-pie fa-fw"></i> Reports</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
													
													
												</div>
											</div>
										</li>
									</ul>
								</li>
								
								<li class="dropdown dropdown-mega">
									    <a class="nav-link dropdown-toggle" href="#">More</a>
									
									
									
									
									<ul class="dropdown-menu">
										<li>
											<div class="dropdown-mega-content">
												<div class="container">
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>About</h4></li>

																	<!-- Typography -->
																	<li><a class="nav-link" href="about.php"><i class="fa fa-users fa-fw"></i> Mission & Vision</a></li>
																	<li><a class="nav-link" href="about.php"><i class="fa fa-copy fa-fw"></i> Timeline</a></li>
																	<li><a class="nav-link" href="about.php"><i class="fa fa-building-o fa-fw"></i> KPIs</a></li>
																	<li><a class="nav-link" href="about.php"><i class="fa fa-scissors fa-fw"></i> Corporate Governance</a></li>
																	<li><a class="nav-link" href="about.php"><i class="fa fa-eye fa-fw"></i> Investors</a></li>
																	<li><a class="nav-link" href="about.php"><i class="fa fa-eye fa-fw"></i> Contact</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Research</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-newspaper fa-fw"></i> Whitepaper</a></li>
																	<li><a href="#"><i class="fa fa-user-secret fa-fw"></i> Penetration Testing</a></li>
																	<li><a href="#"><i class="fa fa-exclamation-circle fa-fw"></i> Reporting</a></li>
																	<li><a href="#"><i class="fa fa-robot fa-fw"></i> Artificial Intelligence</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Partners</h4></li>

																	<!-- Common Elements -->
																	<li><a href="#"><i class="fa fa-folder-open fa-fw"></i> Introduction</a></li>
																	<li><a href="#"><i class="fa fa-bullseye fa-fw"></i> Solution Design</a></li>
																	<li><a href="#"><i class="fa fa-project-diagram fa-fw"></i> Implementation</a></li>
																	<li><a href="#"><i class="fa fa-tasks fa-fw"></i> Account Management</a></li>
																	<li><a href="#"><i class="fa fa-glasses fa-fw"></i> Developers</a></li>
																	<li><a href="#"><i class="fa fa-sitemap fa-fw"></i> Industry Leaders</a></li>
																	<!-- End Common Elements -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Help</h4></li>

																	<!-- Forms -->
																	<li><a href="search.php"><i class="fa fa-search fa-fw"></i> Search</a></li>
																	<li><a href="help.php"><i class="fa fa-hands-helping fa-fw"></i> Forum</a></li>
																	<li><a href="help.php"><i class="fa fa-medkit fa-fw"></i> Support Center</a></li>
																	<li><a href="help.php"><i class="fa fa-gamepad fa-fw"></i> Report a Bug</a></li>
																	<li><a href="help.php"><i class="fa fa-industry fa-fw"></i> Feature Request</a></li>
																	<li><a href="help.php"><i class="fa fa-eye fa-fw"></i> Training Center</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
													</div>
													
													<div class="row equal-height">
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Developers</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Advisors</h4></li>

																	<!-- Typography -->
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<!-- End Typography -->
																</ul>
															</div>
															<div class="col-md-3 equal-height-in">
																<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Partners</h4></li>

																	<!-- Forms -->
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<!-- End Forms -->
																</ul>
														</div>
															<div class="col-md-3 equal-height-in">
															<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
																	<li><h4>Core Team</h4></li>

																	<!-- Buttons -->
																	<li><a href="#"><i class="fa fa-eye"></i> Mark Clulow</a></li>
																	<li><a href="#"><i class="fa fa-database fa-fw"></i> Henry Johnson</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<li><a href="#"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
																	<!-- End Buttons -->
																</ul>
															</div>
													</div>
													
													
												</div>
											</div>
										</li>
									</ul>
								</li>
						
									
								</ul>
							</nav>
						</div>
					</div>
					<!-- end: header nav menu -->
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active" data-target=".search"><i class="fas fa-search"></i></a>
					<form action="search.php" class="search nav-form d-none d-xl-inline-block">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Generating Sales Report</span>
												<span class="message float-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Importing Contacts</span>
												<span class="message float-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Uploading something big</span>
												<span class="message float-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-1">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<a href="compose_mail.php"> 
									  <span class="float-right badge badge-default">NEW</span>  
									</a>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="message_string_demo.php?ID=1" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="message_string_demo.phpID=2" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="message_string_demo.php?ID=3" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="message_string_demo.php?ID=4" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="messages.php" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restored</span>
												<span class="message">10/10/2017</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="profile.php"><i class="fas fa-id-card"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="wallet.php"><i class="fas fa-wallet"></i> Wallet</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="messages.php"><i class="fas fa-envelope"></i> Messages</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="settings.php"><i class="fas fa-cogs"></i> Settings</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
							
								<ul class="nav nav-main">
									<li>
										<a class="nav-link" href="dashboard_tradespeople.php">
											<i class="fas fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>                        
									</li>
									<li class="nav-parent">
										<a class="nav-link" href="#">
											<i class="fas fa-gem" aria-hidden="true"></i>
											<span>Customers</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a class="nav-link" href="index.html">
													Customer List
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Orders
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Quotes
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Payments
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Feedback
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Social
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a class="nav-link" href="#">
											<i class="fas fa-project-diagram" aria-hidden="true"></i>
											<span>Projects</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a class="nav-link" href="index.html">
													Project List
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Project Types
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Appointments
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Calls
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Emails
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a class="nav-link" href="#">
											<i class="fas fa-industry" aria-hidden="true"></i>
											<span>Suppliers</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a class="nav-link" href="index.html">
													Supplier List
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Orders
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Quality Assurance
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Payments
												</a>
											</li>
										</ul>
									</li>
									
									<li class="nav-parent">
										<a class="nav-link" href="#">
											<i class="fas fa-file-invoice-dollar" aria-hidden="true"></i>
											<span>Orders</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a class="nav-link" href="index.html">
													Orders List
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Upcoming Projects
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Suppliers
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Training
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Order History
												</a>
											</li>
										</ul>
									</li>
									
									<li class="nav-parent">
										<a class="nav-link" href="#">
											<i class="fas fa-users" aria-hidden="true"></i>
											<span>Users</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a class="nav-link" href="index.html">
													User List
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Staff
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Customers
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Suppliers
												</a>
											</li>
											<li>
												<a class="nav-link" href="#">
													Partners
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a class="nav-link" href="settings.php&module=1&page=1">
											<i class="fas fa-cogs" aria-hidden="true"></i>
											<span>Settings</span>
										</a>                        
									</li>
				
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>Quotes</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-0">
										<li><a href="#">Mr Jones, Green Crescent</a></li>
										<li><a href="#">Linda Turner, Haver's Lane</a></li>
										<li><a href="#">Meghan, BAC Co., Ltd.</a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Fast Facts</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Next Level Up</span>
											<span class="stats-complete">85%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-warning progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
													<span class="sr-only">85% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Network Speed</span>
											<span class="stats-complete">98%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-success progress-without-number" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
													<span class="sr-only">98% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Wallet</span>
											<span class="stats-complete">45%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-danger progress-without-number" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
						<script>
							// Maintain Scroll Position
							if (typeof localStorage !== 'undefined') {
								if (localStorage.getItem('sidebar-left-position') !== null) {
									var initialPosition = localStorage.getItem('sidebar-left-position'),
										sidebarLeft = document.querySelector('#sidebar-left .nano-content');
									
									sidebarLeft.scrollTop = initialPosition;
								}
							}
						</script>
						
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
				
					<header class="page-header">
						<h2><?php echo $page_name; ?></h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<?php echo $add_breadcrumbs; ?>
								<li><span><?php echo $page_name; ?></span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
<?php 

} 

function page_foot($page_ID) {

include 'db_conn.php';
?>

<!-- page footner runner -->

<hr class="separator" />
<section class="card card container-fluid card-collapsed">
			<header class="card-header">
				
				<div class="card-actions">
					<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
					<a href="ajax/ui-elements-modals-ajax.html" class="card-action simple-ajax-modal "><i class="fas fa-cogs"></i></a>
				</div>

				<h2 class="card-title">Geeky Bits</h2>
			</header>
			<div class="card-body">
			

<div class="row pt-4 mt-1">

	<div class="col-xl-4">

				<h4>Page Info</h4>
			  <ul>
				<li>Load time: <strong>2.123 m/s</strong> <span class="float-right badge badge-warning">78%</span></li>
				<li><a href="#modal">Session Vars</a></li>
				<li><a href="#modal">Server Vars</a></li>
				<li><a href="edit_page.php?ID=<?php echo page_ID; ?>">Edit Page</a></li>
			  </ul>
	</div>

	<div class="col-xl-4">
				<h4>Page Settings</h4>
				<p>Coming soon...</p>
	</div>

	<div class="col-xl-4">
				<h4>System Notes</h4>
			  <ul>
				<li>&copy; 2018 <a href="http://www.prrpss.com">PRRPSS</a></li>
				<li><a href="donate.php">Donate</a></li>
				<li><a href="contributors.php">Contributors</a></li>
				<li><a href="system.php">Full System Data</a></li>
			  </ul>
	</div>
	
</div>
			</div>
			<div class="card-footer">
			  ...
			</div>
</section>


			<div class="text-center">
			  <p>&copy; 2018 <a href="http://www.prrpss.com">PRRPSS</a>
			  | <a href="donate.php">Donate</a>
			  | <a href="contributors.php">Contributors</a>
			  | <a href="system.php">Full System Data</a></p>
			</div>




<!-- end page footer runner -->
</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>
			
								<ul>
									<li>
										<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<section class="footer">

			<!-- Vendor -->
			<script src="vendor/jquery/jquery.js"></script>		
			<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		
			<script src="vendor/popper/umd/popper.min.js"></script>	
			<script src="vendor/bootstrap/js/bootstrap.js"></script>		
			<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="vendor/common/common.js"></script>
			<script src="vendor/nanoscroller/nanoscroller.js"></script>
			<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
			<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>
			
			
		<!-- Specific Page Vendor -->		
		<script src="vendor/select2/js/select2.js"></script>		
		<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>		
		<script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>		
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>		
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>		
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>		
		<script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>		
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>		
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		
			<!-- Theme Base, Components and Settings -->
			<script src="js/theme.js"></script>
		
			<!-- Theme Custom -->
			<script src="js/custom.js"></script>
		
			<!-- Theme Initialization Files -->
			<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.modals.js"></script>

		</section>
	</body>
</html>
<?php 
}

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////



function mail_main_menu() { ?>
<!-- START MAIN MAIL MENU -->
<ul class="list-unstyled mt-3 pt-3">
	<li>
		<a href="messages.php#inbox" class="menu-item active">Inbox <span class="badge badge-primary font-weight-normal float-right">43</span></a>
	</li>
	<li>
		<a href="messages.php#important" class="menu-item">Important</a>
	</li>
	<li>
		<a href="messages.php#sent" class="menu-item">Sent</a>
	</li>
	<li>
		<a href="messages.php#drafts" class="menu-item">Drafts</a>
	</li>
	<li>
		<a href="messages.php#trash" class="menu-item">Trash</a>
	</li>
</ul>
<!-- END MAIN MAIL MENU -->
											
<?php
}

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////


function mail_labels() {
	?>
	
	
<!-- START MAIL LABELS FUNCTION -->						
<div class="sidebar-widget m-0">
	<div class="widget-header">
		<h6 class="title">Labels</h6>
		<span class="widget-toggle">+</span>
	</div>
	<div class="widget-content">
		<ul class="list-unstyled mailbox-bullets">
			<li>
				<a href="#" class="menu-item">Management & Sales <span class="ball pink"></span></a>
			</li>
			<li>
				<a href="#" class="menu-item">HR & FIN <span class="ball green"></span></a>
			</li>
			<li>
				<a href="#" class="menu-item">Reports <span class="ball blue"></span></a>
			</li>
			<li>
				<a href="#" class="menu-item">Operations & Security <span class="ball red"></span></a>
			</li>
		</ul>
	</div>
</div>
<!-- END MAIL LABELS FUNCTION -->
	
	<?php
}

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

function chat_user_list() {
?>
<!-- START CHAT USER LIST -->
<div class="sidebar-widget m-0">
	<div class="widget-header">
		<h6 class="title">Chat</h6>
		<span class="widget-toggle">+</span>
	</div>
	<div class="widget-content">
		<ul class="list-unstyled mailbox-bullets">
			<li>
				<a href="#" class="menu-item">Amy Doe <span class="ball green"></span></a>
			</li>
			<li>
				<a href="#" class="menu-item">Joey Doe <span class="ball green"></span></a>
			</li>
			<li>
				<a href="#" class="menu-item">Robert Doe <span class="ball orange"></span></a>
			</li>
			<li>
				<a href="#" class="menu-item">John Doe <span class="ball red"></span></a>
			</li>
			<li>
				<a href="#" class="menu-item">Uncle Doe <span class="ball red"></span></a>
			</li>
			<li class="text-center mt-3">
				<em><a href="#">show offline</a></em>
			</li>
		</ul>
	</div>
</div>
<!-- END CHAT USER LIST -->
<?php
}

?>