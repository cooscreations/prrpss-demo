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


$page_ID = "4";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>

					<!-- start: page -->

					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
										<img src="img/mark_clulow_head_shot_web.jpg" class="rounded img-fluid" alt="Mark Clulow">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">Mark Clulow</span>
											<span class="thumb-info-type">PRRPSS Founder</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-3">
										<div class="widget-header">
											<h5 class="mb-2">Profile Completion</h5>
											<div class="widget-toggle">+</div>
										</div>
										<div class="widget-content-collapsed">
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													60%
												</div>
											</div>
										</div>
										<div class="widget-content-expanded">
											<ul class="simple-todo-list mt-3">
												<li class="completed">Update Profile Picture</li>
												<li class="completed">Change Personal Information</li>
												<li>Update Social Media</li>
												<li>Follow Someone</li>
											</ul>
										</div>
									</div>

									<hr class="dotted short">

									<h5 class="mb-2 mt-3">About</h5>
									<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>
									<div class="clearfix">
										<a class="text-uppercase text-muted float-right" href="#">(View All)</a>
									</div>

									<hr class="dotted short">

									<div class="social-icons-list">
										<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</div>

								</div>
							</section>


							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">
										<span class="badge badge-primary label-sm font-weight-normal va-middle mr-3">198</span>
										<span class="va-middle">Friends</span>
									</h2>
								</header>
								<div class="card-body">
									<div class="content">
										<ul class="simple-user-list">
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
										</ul>
										<hr class="dotted short">
										<div class="text-right">
											<a class="text-uppercase text-muted" href="#">(View All)</a>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="input-group">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
										<span class="input-group-append">
											<button class="btn btn-default" type="submit"><i class="fas fa-search"></i>
											</button>
										</span>
									</div>
								</div>
							</section>

							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Popular Posts</h2>
								</header>
								<div class="card-body">
									<ul class="simple-post-list">
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="img/post-thumb-1.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Nullam Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="img/post-thumb-2.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail">
													<a href="#">
														<img src="img/post-thumb-3.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="#">Odiosters Nullam Vitae</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
									</ul>
								</div>
							</section>

						</div>
						<div class="col-lg-8 col-xl-6">

							<div class="tabs dark">
								<ul class="nav nav-tabs tabs">
									<li class="nav-item active">
										<a class="nav-link" href="#overview" data-toggle="tab">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#edit" data-toggle="tab">Edit</a>
									</li>
								</ul>
								<div class="tab-content dark">
									<div id="overview" class="tab-pane active">

										<div class="p-3">

											<h4 class="mb-3">Update Status</h4>

											<section class="simple-compose-box mb-3">
												<form method="get" action="/">
													<textarea name="message-text" data-plugin-textarea-autosize placeholder="What's on your mind?" rows="1"></textarea>
												</form>
												<div class="compose-box-footer">
													<ul class="compose-toolbar">
														<li>
															<a href="#"><i class="fas fa-camera"></i></a>
														</li>
														<li>
															<a href="#"><i class="fas fa-map-marker-alt"></i></a>
														</li>
													</ul>
													<ul class="compose-btn">
														<li>
															<a href="#" class="btn btn-primary btn-xs">Post</a>
														</li>
													</ul>
												</div>
											</section>

											<h4 class="mb-3 pt-4">Timeline</h4>

											<div class="timeline timeline-simple mt-3 mb-3">
												<div class="tm-body">
													<div class="tm-title">
														<h5 class="m-0 pt-2 pb-2 text-uppercase">November 2017</h5>
													</div>
													<ol class="tm-items">
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
																</p>
															</div>
														</li>
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	What is your biggest developer pain point?
																</p>
															</div>
														</li>
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	Checkout! How cool is that!
																</p>
																<div class="thumbnail-gallery">
																	<a class="img-thumbnail lightbox" href="img/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
																		<img class="img-fluid" width="215" src="img/projects/project-4.jpg">
																		<span class="zoom">
																			<i class="fas fa-search"></i>
																		</span>
																	</a>
																</div>
															</div>
														</li>
													</ol>
												</div>
											</div>
										</div>

									</div>
									<div id="edit" class="tab-pane">

										<form class="p-3">
											<h4 class="mb-3">Personal Information</h4>
											<div class="form-group">
												<label for="inputAddress">Address</label>
												<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
											</div>
											<div class="form-group">
												<label for="inputAddress2">Address 2</label>
												<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputCity">City</label>
													<input type="text" class="form-control" id="inputCity">
												</div>
												<div class="form-group col-md-4">
													<label for="inputState">State</label>
													<select id="inputState" class="form-control">
														<option selected>Choose...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-2">
													<label for="inputZip">Zip</label>
													<input type="text" class="form-control" id="inputZip">
												</div>
											</div>

											<hr class="dotted tall">

											<h4 class="mb-3">Change Password</h4>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputPassword4">New Password</label>
													<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
												</div>
												<div class="form-group col-md-6">
													<label for="inputPassword4">Re New Password</label>
													<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
												</div>
											</div>

											<div class="form-row">
												<div class="col-md-12 text-right mt-3">
													<button class="btn btn-primary modal-confirm">Save</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">

							<h4 class="mb-3 mt-0">Sale Stats</h4>
							<ul class="simple-card-list mb-3">
								<li class="primary">
									<h3>488</h3>
									<p class="text-light">Nullam quris ris.</p>
								</li>
								<li class="primary">
									<h3>$ 189,000.00</h3>
									<p class="text-light">Nullam quris ris.</p>
								</li>
								<li class="primary">
									<h3>16</h3>
									<p class="text-light">Nullam quris ris.</p>
								</li>
							</ul>

							<h4 class="mb-3 mt-4 pt-2">Projects</h4>
							<ul class="simple-bullet-list mb-3">
								<li class="red">
									<span class="title">Porto Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
								<li class="green">
									<span class="title">Tucson HTML5 Template</span>
									<span class="description truncate">Lorem ipsom dolor sit amet</span>
								</li>
								<li class="blue">
									<span class="title">Porto HTML5 Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
								<li class="orange">
									<span class="title">Tucson Template</span>
									<span class="description truncate">Lorem ipsom dolor sit.</span>
								</li>
							</ul>

							<h4 class="mb-3 mt-4 pt-2">Messages</h4>
							<ul class="simple-user-list mb-3">
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
									</figure>
									<span class="title">Joseph Doe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
									</figure>
									<span class="title">Joseph Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
									</figure>
									<span class="title">Joe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
								<li>
									<figure class="image rounded">
										<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
									</figure>
									<span class="title">Joseph Doe Junior</span>
									<span class="message">Lorem ipsum dolor sit.</span>
								</li>
							</ul>
						</div>

					</div>
					<!-- end: page -->

				
		<?php 

page_foot($page_ID);
?>		