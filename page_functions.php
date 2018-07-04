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



function page_head($page_ID) {

include 'db_conn.php';
include '../menu_functions.php'; // calling gloabl main menu etc.
include '../data_menu.php'; // calling gloabl main menu etc.
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
		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />
		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
		<link rel="stylesheet" href="vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

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
							<?php main_menu($page_ID); ?>
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
													<img src="img/mark_clulow_head_shot_web.jpg" alt="Mark Clulow" class="rounded-circle" style="width: 40px;" />
												</figure>
												<span class="title">Mark Clulow</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="message_string_demo.php?ID=2" class="clearfix">
												<figure class="image">
													<img src="img/mark_clulow_head_shot_web.jpg" alt="Mark Clulow" class="rounded-circle" style="width: 40px;" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="message_string_demo.php?ID=3" class="clearfix">
												<figure class="image">
													<img src="img/mark_clulow_head_shot_web.jpg" alt="Mark Clulow" class="rounded-circle" style="width: 40px;" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="message_string_demo.php?ID=4" class="clearfix">
												<figure class="image">
													<img src="img/mark_clulow_head_shot_web.jpg" alt="Mark Clulow" class="rounded-circle" style="width: 40px;" />
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
							<a href="notifications.php" class="dropdown-toggle notification-icon" data-toggle="dropdown">
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
											<a href="notifications.php" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="notifications.php" class="clearfix">
												<div class="image">
													<i class="fas fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="notifications.php" class="clearfix">
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
								<img src="img/mark_clulow_head_shot_web.jpg" alt="Mark Clulow" class="rounded-circle" style="width: 40px;" data-lock-picture="img/mark_clulow_head_shot_web.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Mark Clulow</span>
								<span class="role">Level: Awesome!</span>
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
									<a role="menuitem" tabindex="-1" href="user_settings.php"><i class="fas fa-cogs"></i> Settings</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fas fa-power-off"></i> Logout</a>
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
												<a class="nav-link" href="customers.php">
													Customer List
												</a>
											</li>
											<li>
												<a class="nav-link" href="orders.php">
													Orders
												</a>
											</li>
											<li>
												<a class="nav-link" href="quotes.php">
													Quotes
												</a>
											</li>
											<li>
												<a class="nav-link" href="payments.php">
													Payments
												</a>
											</li>
											<li>
												<a class="nav-link" href="feedback.php">
													Feedback
												</a>
											</li>
											<li>
												<a class="nav-link" href="social.php">
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
												<a class="nav-link" href="projects.php">
													Project List
												</a>
											</li>
											<li>
												<a class="nav-link" href="project_types.php">
													Project Types
												</a>
											</li>
											<li>
												<a class="nav-link" href="appointments.php">
													Appointments
												</a>
											</li>
											<li>
												<a class="nav-link" href="calls.php">
													Calls
												</a>
											</li>
											<li>
												<a class="nav-link" href="emails.php">
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
												<a class="nav-link" href="suppliers.php">
													Supplier List
												</a>
											</li>
											<li>
												<a class="nav-link" href="orders.php">
													Orders
												</a>
											</li>
											<li>
												<a class="nav-link" href="quality_assurance_QA">
													Quality Assurance (QA)
												</a>
											</li>
											<li>
												<a class="nav-link" href="payments.php">
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
												<a class="nav-link" href="orders.php">
													Orders List
												</a>
											</li>
											<li>
												<a class="nav-link" href="projects.php">
													Upcoming Projects
												</a>
											</li>
											<li>
												<a class="nav-link" href="suppliers.php">
													Suppliers
												</a>
											</li>
											<li>
												<a class="nav-link" href="training.php">
													Training
												</a>
											</li>
											<li>
												<a class="nav-link" href="order_history.php">
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
												<a class="nav-link" href="users.php">
													User List
												</a>
											</li>
											<li>
												<a class="nav-link" href="users.php?type=staff">
													Staff
												</a>
											</li>
											<li>
												<a class="nav-link" href="users.php?type=customers">
													Customers
												</a>
											</li>
											<li>
												<a class="nav-link" href="users.php?type=suppliers">
													Suppliers
												</a>
											</li>
											<li>
												<a class="nav-link" href="users.php?type=partners">
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
			  <hr />
			  
				<h4>System Notes</h4>
			  <ul>
				<li>&copy; 2018 <a href="http://www.prrpss.com">PRRPSS</a></li>
				<li><a href="donate.php">Donate</a></li>
				<li><a href="contributors.php">Contributors</a></li>
				<li><a href="system.php">Full System Data</a></li>
			  </ul>
	</div>

	<div class="col-xl-8">
				<h4>Page Settings</h4>
				
				<!-- START OUTPUT SEERVER VARS -->
				<?php 
					$indicesServer = array('PHP_SELF', 
					'argv', 
					'argc', 
					'GATEWAY_INTERFACE', 
					'SERVER_ADDR', 
					'SERVER_NAME', 
					'SERVER_SOFTWARE', 
					'SERVER_PROTOCOL', 
					'REQUEST_METHOD', 
					'REQUEST_TIME', 
					'REQUEST_TIME_FLOAT', 
					'QUERY_STRING', 
					'DOCUMENT_ROOT', 
					'HTTP_ACCEPT', 
					'HTTP_ACCEPT_CHARSET', 
					'HTTP_ACCEPT_ENCODING', 
					'HTTP_ACCEPT_LANGUAGE', 
					'HTTP_CONNECTION', 
					'HTTP_HOST', 
					'HTTP_REFERER', 
					'HTTP_USER_AGENT', 
					'HTTPS', 
					'REMOTE_ADDR', 
					'REMOTE_HOST', 
					'REMOTE_PORT', 
					'REMOTE_USER', 
					'REDIRECT_REMOTE_USER', 
					'SCRIPT_FILENAME', 
					'SERVER_ADMIN', 
					'SERVER_PORT', 
					'SERVER_SIGNATURE', 
					'PATH_TRANSLATED', 
					'SCRIPT_NAME', 
					'REQUEST_URI', 
					'PHP_AUTH_DIGEST', 
					'PHP_AUTH_USER', 
					'PHP_AUTH_PW', 
					'AUTH_TYPE', 
					'PATH_INFO', 
					'ORIG_PATH_INFO') ; 

					echo '<table class="table table-responsive">
							<thead>
							  <th>Variable</th>
							  <th>Value</th>
							</thead>
					
					' ; 
					foreach ($indicesServer as $arg) { 
						if (isset($_SERVER[$arg])) { 
							echo '<tr><td class="text-right">'.$arg.'</td><th>' . $_SERVER[$arg] . '</th></tr>' ; 
						} 
						else { 
							echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
						} 
					} 
					echo '</table>' ; 
					?>
				<!-- END OUTPUT SERVER VARS -->
	</div>

</div>
			</div>
			<div class="card-footer">
			  <a href="settings.php?ref=geeky_bits">Settings</a>
			</div>
</section>


			<div class="text-center">
			  <p>&copy; 2018 <a href="http://www.prrpss.com">PRRPSS</a>
			  | <a href="whitepaper.php">Whitepaper</a>
			  | <a href="whitelist.php">Whitelist</a>
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
		<script src="vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

			<!-- Theme Base, Components and Settings -->
			<script src="js/theme.js"></script>

			<!-- Theme Custom -->
			<script src="js/custom.js"></script>

			<!-- Theme Initialization Files -->
			<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.modals.js"></script>
		<script src="js/examples/examples.datatables.editable.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.datatables.default.js"></script>
		<script src="js/examples/examples.datatables.row.with.details.js"></script>
		<script src="js/examples/examples.datatables.tabletools.js"></script>

		</section>
	</body>
</html>
<?php

// now append the analytics table

    $record_pageview_SQL = "INSERT INTO `page_views`(`ID`, `page_ID`, `filename`, `date`, `user_ID`, `referrer`) VALUES (NULL,'" . $page_ID . "', '" . $_SERVER['PHP_SELF'] . "','" . date("Y-m-d H:i:s") . "','0', '" . $_SERVER['HTTP_REFERER'] . "')";
	// echo $record_pageview_SQL;

	if (mysqli_query($con, $record_pageview_SQL)) {
		// AWESOME! We added the change record to the database
		// OK

	}
	else {
		echo "<h4>Failed to record the change in the edit log with SQL: <br />" . $record_edit_SQL . "</h4>";
	}

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
