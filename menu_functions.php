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



function main_menu($page_ID = 0) {

$public_path 			= pathinfo($_SERVER['SCRIPT_NAME']);

if ($public_path['dirname'] == '/demo') {
	// site is backend - show extra backend menu items
	$site_portal 		= 'demo';
}
else {
	$site_portal 		= 'public';
}

/*
$path_parts = $public_path;

// echo $path_parts['dirname'], "\n";
// echo $path_parts['basename'], "\n";
// echo $path_parts['extension'], "\n";
// echo $path_parts['filename'], "\n"; // since PHP 5.2.0

// echo "<h1>HERE: ".$public_path."</h1>";
*/
$this_file 				= $public_path['basename'];
$GLOBALS['this_file'] 	= $this_file; 

	?>
<!-- START MAIN MENU FUNCTION -->
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
										<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-wrench fa-fw"></i> Builders</a></li>
										<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-leaf fa-fw"></i> Gardeners</a></li>
										<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-bolt fa-fw"></i> Electricians</a></li>
										<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-tint fa-fw"></i> Plumbers</a></li>
										<li><a class="nav-link" href="tradespeople.php"><i class="fa fa-tree fa-fw"></i> Carpenters</a></li>
										<!-- End Typography -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Food &amp; Beverage</h4></li>

										<!-- Buttons -->
										<li><a href="food_and_beverage.php"><i class="fa fa-cookie-bite fa-fw"></i> Community Cooking</a></li>
										<li><a href="food_and_beverage.php"><i class="fa fa-seedling fa-fw"></i> Smallhold Farms</a></li>
										<li><a href="food_and_beverage.php"><i class="fa fa-utensils fa-fw"></i> Restaurants</a></li>
										<li><a href="food_and_beverage.php"><i class="fa fa-coffee fa-fw"></i> Cafes</a></li>
										<li><a href="food_and_beverage.php"><i class="fa fa-truck-loading fa-fw"></i> Services</a></li>
										<li><a href="food_and_beverage.php"><i class="fa fa-glass-martini fa-fw"></i> Bars &amp; Nightclubs</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Services</h4></li>

										<!-- Common Elements -->
										<li><a href="service_industries.php"><i class="fa fa-pencil-alt fa-fw"></i> Design Agencies</a></li>
										<li><a href="service_industries.php"><i class="fa fa-briefcase fa-fw"></i> Consultants</a></li>
										<li><a href="service_industries.php"><i class="fa fa-user-graduate fa-fw"></i> Training &amp; Education</a></li>
										<li><a href="service_industries.php"><i class="fa fa-broom fa-fw"></i> Cleaning</a></li>
										<li><a href="service_industries.php"><i class="fa fa-piggy-bank fa-fw"></i> Insurance</a></li>
										<li><a href="service_industries.php"><i class="fa fa-server fa-fw"></i> FIN & IT Services</a></li>
										<!-- End Common Elements -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Entertainment</h4></li>

										<!-- Forms -->
										<li><a href="entertainment_industries.php"><i class="fa fa-music fa-fw"></i> Live Music</a></li>
										<li><a href="entertainment_industries.php"><i class="fa fa-users fa-fw"></i> Festivals</a></li>
										<li><a href="entertainment_industries.php"><i class="fa fa-tv fa-fw"></i> Live TV</a></li>
										<li><a href="entertainment_industries.php"><i class="fa fa-film fa-fw"></i> Video Production</a></li>
										<li><a href="entertainment_industries.php"><i class="fa fa-video fa-fw"></i> Equipment</a></li>
										<li><a href="entertainment_industries.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<!-- End Forms -->
									</ul>
							</div>
						</div>

						<div class="row equal-height">
								<div class="col-md-3 equal-height-in">
								<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Fashion &amp; Retail</h4></li>

										<!-- Typography -->
										<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-cut fa-fw"></i> Hair</a></li>
										<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-eye fa-fw"></i> Make-up</a></li>
										<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-tshirt fa-fw"></i> Clothing</a></li>
										<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-shoe-prints fa-fw"></i> Shoes</a></li>
										<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-gem fa-fw"></i> Accessories</a></li>
										<li><a class="nav-link" href="fashion_retail.php"><i class="fa fa-users fa-fw"></i> Live Events</a></li>
										<!-- End Typography -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Health &amp; Wellness</h4></li>

										<!-- Buttons -->
										<li><a href="health_wellness.php"><i class="fa fa-spa fa-fw"></i> Yoga & Meditation</a></li>
										<li><a href="health_wellness.php"><i class="fa fa-blender fa-fw"></i> Nutritionists</a></li>
										<li><a href="health_wellness.php"><i class="fa fa-diagnoses fa-fw"></i> Personal Trainers</a></li>
										<li><a href="health_wellness.php"><i class="fa fa-link fa-fw"></i> Equipment &amp; Supplies</a></li>
										<li><a href="health_wellness.php"><i class="fa fa-hospital-alt fa-fw"></i> Hospitals &amp; Clinics</a></li>
										<li><a href="health_wellness.php"><i class="fa fa-users fa-fw"></i> Live Events</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Sports &amp; Recreation</h4></li>

										<!-- Common Elements -->
										<li><a href="sports_recreation.php"><i class="fa fa-universal-access fa-fw"></i> Fan Clubs</a></li>
										<li><a href="sports_recreation.php"><i class="fa fa-trophy fa-fw"></i> Leagues &amp; Competitions</a></li>
										<li><a href="sports_recreation.php"><i class="fa fa-palette fa-fw"></i> Equipment &amp; Supplies</a></li>
										<li><a href="sports_recreation.php"><i class="fa fa-globe fa-fw"></i> Community Groups</a></li>
										<li><a href="sports_recreation.php"><i class="fa fa-child fa-fw"></i> Kid's Activities</a></li>
										<li><a href="sports_recreation.php"><i class="fa fa-users fa-fw"></i> Live Events</a></li>
										<!-- End Common Elements -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Manufacturing</h4></li>

										<!-- Forms -->
										<li><a href="manufacturing_industries.php"><i class="fa fa-warehouse fa-fw"></i> Factories</a></li>
										<li><a href="manufacturing_industries.php"><i class="fa fa-cannabis fa-fw"></i> Farms</a></li>
										<li><a href="manufacturing_industries.php"><i class="fa fa-flask fa-fw"></i> Labs</a></li>
										<li><a href="manufacturing_industries.php"><i class="fa fa-screwdriver fa-fw"></i> DIY</a></li>
										<li><a href="manufacturing_industries.php"><i class="fa fa-truck fa-fw"></i> Logistics</a></li>
										<li><a href="manufacturing_industries.php"><i class="fa fa-search fa-fw"></i> Quality Assurance</a></li>
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
										<li><a class="nav-link" href="human_resources.php"><i class="fa fa-exchange-alt fa-fw"></i> Recruiting</a></li>
										<li><a class="nav-link" href="human_resources.php"><i class="fa fa-chalkboard-teacher fa-fw"></i> Training &amp; Development</a></li>
										<li><a class="nav-link" href="human_resources.php"><i class="fa fa-money-bill-wave fa-fw"></i> Payroll</a></li>
										<li><a class="nav-link" href="human_resources.php"><i class="fa fa-plane fa-fw"></i> Leave</a></li>
										<li><a class="nav-link" href="human_resources.php"><i class="fa fa-exclamation-triangle fa-fw"></i> Discipline &amp; Dismissal</a></li>
										<!-- End Typography -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Corporate</h4></li>

										<!-- Buttons -->
										<li><a href="corporate.php"><i class="fa fa-space-shuttle fa-fw"></i> Mission &amp; Vision</a></li>
										<li><a href="corporate.php"><i class="fa fa-tasks fa-fw"></i> Policies &amp; Procedures</a></li>
										<li><a href="corporate.php"><i class="fa fa-file-contract fa-fw"></i> Forms &amp; Documents</a></li>
										<li><a href="corporate.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<li><a href="corporate.php"><i class="fa fa-id-badge fa-fw"></i> Government Relations</a></li>
										<li><a href="corporate.php"><i class="fa fa-share-square fa-fw"></i> Taxes &amp; Charity</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Customer Services (CRM)</h4></li>

										<!-- Common Elements -->
										<li><a href="customer_service_CRM.php"><i class="fa fa-users fa-fw"></i> Client List</a></li>
										<li><a href="customer_service_CRM.php"><i class="fa fa-broadcast-tower fa-fw"></i> Broadcast Message</a></li>
										<li><a href="customer_service_CRM.php"><i class="fa fa-inbox fa-fw"></i> Inbox</a></li>
										<li><a href="customer_service_CRM.php"><i class="fa fa-chess fa-fw"></i> Business Intelligence</a></li>
										<li><a href="customer_service_CRM.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<!-- End Common Elements -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Procurement</h4></li>

										<!-- Forms -->
										<li><a href="procurement.php"><i class="fa fa-th-list fa-fw"></i> Supplier List</a></li>
										<li><a href="procurement.php"><i class="fa fa-file-invoice-dollar fa-fw"></i> Purchase Orders</a></li>
										<li><a href="procurement.php"><i class="fa fa-sort-amount-up fa-fw"></i> Supplier Audit</a></li>
										<li><a href="procurement.php"><i class="fa fa-star fa-fw"></i> Products</a></li>
										<li><a href="procurement.php"><i class="fa fa-gem fa-fw"></i> Services</a></li>
										<li><a href="procurement.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<!-- End Forms -->
									</ul>
							</div>
						</div>

						<div class="row equal-height">
								<div class="col-md-3 equal-height-in">
								<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Production</h4></li>

										<!-- Typography -->
										<li><a class="nav-link" href="production.php"><i class="fas fa-project-diagram fa-fw"></i> Projects</a></li>
										<li><a class="nav-link" href="production.php"><i class="fa fa-chart-line fa-fw"></i> Forecasting</a></li>
										<li><a class="nav-link" href="production.php"><i class="fa fa-wrench fa-fw"></i> Equipment</a></li>
										<li><a class="nav-link" href="production.php"><i class="fa fa-industry fa-fw"></i> Suppliers</a></li>
										<li><a class="nav-link" href="production.php"><i class="fa fa-clipboard-check fa-fw"></i> Quality</a></li>
										<!-- End Typography -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>e-Commerce</h4></li>

										<!-- Buttons -->
										<li><a href="eCommerce.php"><i class="fa fa-shopping-cart fa-fw"></i> Products</a></li>
										<li><a href="eCommerce.php"><i class="fa fa-list-ol fa-fw"></i> Services</a></li>
										<li><a href="eCommerce.php"><i class="fa fa-map-marker-alt fa-fw"></i> On-Site POS</a></li>
										<li><a href="eCommerce.php"><i class="fa fa-calendar-alt fa-fw"></i> Booking</a></li>
										<li><a href="eCommerce.php"><i class="fa fa-truck fa-fw"></i> Logistics</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Distribution</h4></li>

										<!-- Common Elements -->
										<li><a href="distribution.php"><i class="fa fa-taxi fa-fw"></i> Vehicles</a></li>
										<li><a href="distribution.php"><i class="fa fa-user-astronaut fa-fw"></i> Drivers</a></li>
										<li><a href="distribution.php"><i class="fa fa-file-invoice-dollar fa-fw"></i> Orders</a></li>
										<li><a href="distribution.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<!-- End Common Elements -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Sales</h4></li>

										<!-- Forms -->
										<li><a href="sales.php"><i class="fa fa-user-circle fa-fw"></i> Accounts</a></li>
										<li><a href="sales.php"><i class="fa fa-user fa-fw"></i> Clients</a></li>
										<li><a href="sales.php"><i class="fa fa-file-invoice-dollar fa-fw"></i> Orders</a></li>
										<li><a href="sales.php"><i class="fa fa-calendar-alt fa-fw"></i> Calendar</a></li>
										<li><a href="sales.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
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
										<li><a class="nav-link" href="../power.php"><i class="fa fa-sun fa-fw"></i> Clean Energy</a></li>
										<li><a class="nav-link" href="../power.php"><i class="fa fa-seedling fa-fw"></i> Storage &amp; Distribution</a></li>
										<li><a class="nav-link" href="../power.php"><i class="fa fa-copy fa-fw"></i> Emergency Power</a></li>
										<!-- End Typography -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Network</h4></li>

										<!-- Buttons -->
										<li><a href="../network.php"><i class="fab fa-connectdevelop fa-fw"></i> Masternode</a></li>
										<li><a href="../network.php"><i class="fa fa-tasks fa-fw"></i> Policies &amp; Procedures</a></li>
										<li><a href="../network.php"><i class="fa fa-file-contract fa-fw"></i> Forms &amp; Documents</a></li>
										<li><a href="../network.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<li><a href="../network.php"><i class="fa fa-id-badge fa-fw"></i> Government Relations</a></li>
										<li><a href="../network.php"><i class="fa fa-share-square fa-fw"></i> Taxes &amp; Charity</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Hardware</h4></li>

										<!-- Common Elements -->
										<li><a href="../hardware.php"><i class="fa fa-laptop fa-fw"></i> Devices</a></li>
										<li><a href="../hardware.php"><i class="fa fa-dice-five fa-fw"></i> FiddleCube</a></li>
										<li><a href="../hardware.php"><i class="fa fa-download fa-fw"></i> Cold Storage</a></li>
										<li><a href="../hardware.php"><i class="fa fa-fingerprint fa-fw"></i> Biometric Ring</a></li>
										<li><a href="../hardware.php"><i class="fa fa-door-closed fa-fw"></i> Door Entry Systems</a></li>
										<!-- End Common Elements -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Data Storage</h4></li>

										<!-- Forms -->
										<li><a href="../data_storage.php"><i class="fa fa-th-list fa-fw"></i> Supplier List</a></li>
										<li><a href="../data_storage.php"><i class="fa fa-file-invoice-dollar fa-fw"></i> Purchase Orders</a></li>
										<li><a href="../data_storage.php"><i class="fa fa-sort-amount-up fa-fw"></i> Supplier Audit</a></li>
										<li><a href="../data_storage.php"><i class="fa fa-shopping-cart fa-fw"></i> Products</a></li>
										<li><a href="../data_storage.php"><i class="fa fa-list-ol fa-fw"></i> Services</a></li>
										<li><a href="../data_storage.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<!-- End Forms -->
									</ul>
							</div>
						</div>

						<div class="row equal-height">
								<div class="col-md-3 equal-height-in">
								<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Security</h4></li>

										<!-- Buttons -->
										<li><a href="../security.php"><i class="fa fa-code fa-fw"></i> Encryption</a></li>
										<li><a href="../security.php"><i class="fa fa-laptop fa-fw"></i> Hardware</a></li>
										<li><a href="../security.php"><i class="fa fa-list-ol fa-fw"></i> 3rd Party Auditors</a></li>
										<li><a href="../security.php"><i class="fa fa-user-check fa-fw"></i> Simulations</a></li>
										<li><a href="../security.php"><i class="fa fa-globe fa-fw"></i> Compliance</a></li>
										<li><a href="../security.php"><i class="fa fa-briefcase fa-fw"></i> Legal</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>User Interface (UI)</h4></li>

										<!-- Buttons -->
										<li><a href="../user_interface_UI.php"><i class="fa fa-object-group fa-fw"></i> Custom Dashboards</a></li>
										<li><a href="../user_interface_UI.php"><i class="fa fa-eye fa-fw"></i> Dark Theme</a></li>
										<li><a href="../user_interface_UI.php"><i class="fa fa-mobile fa-fw"></i> Mobile Ready</a></li>
										<li><a href="../user_interface_UI.php"><i class="fa fa-chart-bar fa-fw"></i> Performance</a></li>
										<li><a href="../user_interface_UI.php"><i class="fa fa-gamepad fa-fw"></i> Accessories</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Blockchain</h4></li>

										<!-- Typography -->
										<li><a class="nav-link" href="../blockchain.php"><i class="fa fa-lock fa-fw"></i> Private</a></li>
										<li><a class="nav-link" href="../blockchain.php"><i class="fa fa-lock-open fa-fw"></i> Semi-Private</a></li>
										<li><a class="nav-link" href="../blockchain.php"><i class="fa fa-link fa-fw"></i> Consortium</a></li>
										<li><a class="nav-link" href="../blockchain.php"><i class="fa fa-bezier-curve fa-fw"></i> Public</a></li>
										<li><a class="nav-link" href="../whitepaper.php"><i class="fa fa-newspaper fa-fw"></i> Whitepaper</a></li>
										<!-- End Typography -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>User Experience (UX)</h4></li>

										<!-- Forms -->
										<li><a href="../user_experience_UX.php"><i class="fa fa-user-plus fa-fw"></i> Registration</a></li>
										<li><a href="../user_experience_UX.php"><i class="fas fa-sign-in-alt fa-fw"></i> Log In</a></li>
										<li><a href="../user_experience_UX.php"><i class="fa fa-graduation-cap fa-fw"></i> Training</a></li>
										<li><a href="../user_experience_UX.php"><i class="fa fa-life-ring fa-fw"></i> Support</a></li>
										<li><a href="../user_experience_UX.php"><i class="fa fa-calendar fa-fw"></i> Calendar</a></li>
										<li><a href="../user_experience_UX.php"><i class="fa fa-chart-bar fa-fw"></i> Reporting</a></li>
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
										<li><a class="nav-link" href="wallet.php"><i class="fa fa-lock fa-fw"></i> Safe &amp; Secure</a></li>
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
										<li><a href="../purchase.php"><i class="fa fa-user-friends fa-fw"></i> Friends &amp; Family</a></li>
										<li><a href="../purchase.php"><i class="fa fa-hand-holding-heart fa-fw"></i> Early Investors</a></li>
										<li><a href="../purchase.php"><i class="fa fa-file-invoice-dollar fa-fw"></i> Pre-ITO</a></li>
										<li><a href="../purchase.php"><i class="fa fa-coins fa-fw"></i> ITO</a></li>
										<li><a href="../purchase.php"><i class="fa fa-exchange-alt fa-fw"></i> Exchanges</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Marketplace</h4></li>

										<!-- Common Elements -->
										<li><a href="marketplace.php"><i class="fa fa-plus-square fa-fw"></i> Add My Business</a></li>
										<li><a href="marketplace.php"><i class="fa fa-tachometer-alt fa-fw"></i> My Dashboard</a></li>
										<li><a href="marketplace.php"><i class="fa fa-star fa-fw"></i> My Favourites</a></li>
										<li><a href="marketplace.php"><i class="fa fa-search fa-fw"></i> Search</a></li>
										<!-- End Common Elements -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Performance-Related-Pay</h4></li>

										<!-- Forms -->
										<li><a href="performance_related_pay.php"><i class="fa fa-plus-square fa-fw"></i> Add a Task</a></li>
										<li><a href="performance_related_pay.php"><i class="fa fa-award fa-fw"></i> Top Performers</a></li>
										<li><a href="performance_related_pay.php"><i class="fa fa-tachometer-alt fa-fw"></i> My Dashboard</a></li>
										<li><a href="performance_related_pay.php"><i class="fa fa-chart-pie fa-fw"></i> Reports</a></li>
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
										<li><a href="whitepaper.php"><i class="fa fa-newspaper fa-fw"></i> Whitepaper</a></li>
										<li><a href="research.php"><i class="fa fa-user-secret fa-fw"></i> Penetration Testing</a></li>
										<li><a href="research.php"><i class="fa fa-chart-pie fa-fw"></i> Reporting</a></li>
										<li><a href="research.php"><i class="fa fa-robot fa-fw"></i> Artificial Intelligence</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Partners</h4></li>

										<!-- Common Elements -->
										<li><a href="partners.php"><i class="fa fa-folder-open fa-fw"></i> Introduction</a></li>
										<li><a href="partners.php"><i class="fa fa-bullseye fa-fw"></i> Solution Design</a></li>
										<li><a href="partners.php"><i class="fa fa-project-diagram fa-fw"></i> Implementation</a></li>
										<li><a href="partners.php"><i class="fa fa-tasks fa-fw"></i> Account Management</a></li>
										<li><a href="partners.php"><i class="fa fa-glasses fa-fw"></i> Developers</a></li>
										<li><a href="partners.php"><i class="fa fa-sitemap fa-fw"></i> Industry Leaders</a></li>
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
										<li><a href="developers.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="developers.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="developers.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="developers.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="developers.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="developers.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Advisors</h4></li>

										<!-- Typography -->
										<li><a href="advisors.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="advisors.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="advisors.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="advisors.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="advisors.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="advisors.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<!-- End Typography -->
									</ul>
								</div>
								<div class="col-md-3 equal-height-in">
									<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Partners</h4></li>

										<!-- Forms -->
										<li><a href="partners.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="partners.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="partners.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="partners.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="partners.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="partners.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<!-- End Forms -->
									</ul>
							</div>
								<div class="col-md-3 equal-height-in">
								<ul class="list-unstyled equal-height-list dropdown-mega-sub-nav">
										<li><h4>Core Team</h4></li>

										<!-- Buttons -->
										<li><a href="core_team.php"><i class="fa fa-eye"></i> Mark Clulow</a></li>
										<li><a href="core_team.php"><i class="fa fa-database fa-fw"></i> Henry Johnson</a></li>
										<li><a href="core_team.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="core_team.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="core_team.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<li><a href="core_team.php"><i class="fa fa-bullhorn fa-fw"></i> Bob Smith</a></li>
										<!-- End Buttons -->
									</ul>
								</div>
						</div>


					</div>
				</div>
			</li>
			
		</ul>
	</li>
	
	<?php 
	
	if ($site_portal == 'public') {
	
	?>
	
	<li class="dropdown dropdown-mega dropdown-mega-signin signin" id="headerAccount">
														<a class="dropdown-item dropdown-toggle" href="page-login.html">
															<i class="fa fa-user"></i> Sign In
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col">

																			<div class="signin-form">

																				<span class="dropdown-mega-sub-title">Sign In</span>

																				<form action="/" id="frmSignIn" method="post">
																					<div class="form-row">
																						<div class="form-group col">
																							<label>Username or E-mail Address</label>
																							<input type="text" value="" class="form-control form-control-lg" tabindex="1">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col">
																							<a class="float-right mt-0 p-0" id="headerRecover" href="#">(Lost Password?)</a>
																							<label>Password</label>
																							<input type="password" value="" class="form-control form-control-lg" tabindex="2">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col-lg-6 pl-0">
																							<span class="remember-box form-check">
																								<label class="form-check-label" for="rememberme">
																									<input class="form-check-input mr-2" type="checkbox" id="rememberme" name="rememberme">Remember Me
																								</label>
																							</span>
																						</div>
																						<div class="form-group col-lg-6 pr-0">
																							<input type="submit" value="Login" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
																						</div>
																					</div>
																				</form>

																				<p class="sign-up-info">Don't have an account yet? <a href="#" id="headerSignUp" class="p-0 m-0 ml-1">Sign Up</a></p>

																			</div>

																			<div class="signup-form">
																				<span class="dropdown-mega-sub-title">Create Account</span>

																				<form action="/" id="frmSignUp" method="post">
																					<div class="form-row">
																						<div class="form-group col">
																							<label>E-mail Address</label>
																							<input type="text" value="" class="form-control form-control-lg">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col-lg-6">
																							<label>Password</label>
																							<input type="password" value="" class="form-control form-control-lg">
																						</div>
																						<div class="form-group col-lg-6">
																							<label>Re-enter Password</label>
																							<input type="password" value="" class="form-control form-control-lg">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="col-lg-12">
																							<input type="submit" value="Create Account" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
																						</div>
																					</div>
																				</form>

																				<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn" class="p-0 m-0 ml-1">Log In</a></p>
																			</div>

																			<div class="recover-form">
																				<span class="dropdown-mega-sub-title">Reset My Password</span>
																				<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

																				<form action="/" id="frmResetPassword" method="post">
																					<div class="form-row">
																						<div class="form-group col">
																							<label>E-mail Address</label>
																							<input type="text" value="" class="form-control form-control-lg">
																						</div>
																					</div>
																					<div class="form-row">
																						<div class="form-group col">
																							<input type="submit" value="Submit" class="btn btn-primary float-right mb-3" data-loading-text="Loading...">
																						</div>
																					</div>
																				</form>

																				<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel" class="p-0 m-0 ml-1">Log In</a></p>
																			</div>

																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
	<li class="dropdown dropdown-mega dropdown-mega-signin signin logged" id="headerAccount">
		<a class="dropdown-item dropdown-toggle" href="page-login.html">
			<i class="fa fa-user"></i> John Smith
		</a>
		<ul class="dropdown-menu">
			<li>
				<div class="dropdown-mega-content">

					<div class="row">
						<div class="col-lg-8">
							<div class="user-avatar">
								<div class="img-thumbnail d-block">
									<img src="img/clients/client-1.jpg" alt="">
								</div>
								<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
							</div>
						</div>
						<div class="col-lg-4">
							<ul class="list-account-options">
								<li>
									<a href="#">My Account</a>
								</li>
								<li>
									<a href="#">Log Out</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</li>

	<?php 
	// END OF PUBLIC LOGIN / ACCOUNT PANEL DROP DOWN
	}
	?>

	</ul>
</nav>
<!-- END MAIN MENU FUNCTION -->
	<?php

}


?>