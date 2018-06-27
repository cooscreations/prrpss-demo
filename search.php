<?php 
$page_ID = "2";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>

					

<!-- start: page -->
					<div class="search-content">
						<div class="search-control-wrapper">
							<form action="pages-search-results.html">
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" value="something">
										<span class="input-group-append">
											<button class="btn btn-primary p-3" type="button">Search</button>
										</span>
									</div>
								</div>
							</form>
						</div>
						<div class="search-toolbar">
							<ul class="list-unstyled nav nav-tabs nav-pills">
								<li class="nav-item active">
									<a class="nav-link" href="#everything" data-toggle="tab">Everything</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#medias" data-toggle="tab">Medias</a>
								</li>
							</ul>
						</div>
						<div class="tab-content pb-5">
							<div id="everything" class="tab-pane active">
								<p class="total-results text-muted">Showing 1 to 10 of 47 results</p>

								<ul class="list-unstyled search-results-list">
									<li>
										<p class="result-type">
											<span class="badge badge-primary">user</span>
										</p>
										<a href="pages-user-profile.html" class="has-thumb">
											<div class="result-thumb">
												<img src="img/!logged-user.jpg" alt="John Doe" />
											</div>
											<div class="result-data">
												<p class="h3 title text-primary">John Doe</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="badge badge-primary">page</span>
										</p>
										<a href="ui-elements-charts.html">
											<div class="result-data">
												<p class="h3 title text-primary">Charts</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur <strong>something</strong> elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="badge badge-primary">page</span>
										</p>
										<a href="pages-invoice.html" class="has-thumb">
											<div class="result-thumb">
												<img src="img/projects/project-6.jpg" alt="Invoice" />
											</div>
											<div class="result-data">
												<p class="h3 title text-primary">Invoice</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="badge badge-primary">email</span>
										</p>
										<a href="mailbox-email.html" class="has-thumb">
											<div class="result-thumb">
												<i class="fas fa-envelope"></i>
											</div>
											<div class="result-data">
												<p class="h3 title text-primary">John Doe</p>
												<p class="description">
													<small>05/09/2017 11:34PM</small>
													<br/>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.
												</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="badge badge-primary">page</span>
										</p>
										<a href="pages-media-gallery.html">
											<div class="result-data">
												<p class="h3 title text-primary">Media Gallery</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="badge badge-primary">page</span>
										</p>
										<a href="pages-invoice.html">
											<div class="result-data">
												<p class="h3 title text-primary">Invoice</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
									<li>
										<p class="result-type">
											<span class="badge badge-primary">page</span>
										</p>
										<a href="pages-calendar.html">
											<div class="result-data">
												<p class="h3 title text-primary">Calendar</p>
												<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
								</ul>

								<hr class="solid mb-0" />

								<ul class="pagination mt-5">
									<li class="page-item"><a class="page-link" href="#">«</a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">»</a></li>
								</ul>
							</div>
							<div id="medias" class="tab-pane">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumb-preview">
											<a class="thumb-image" href="#">
												<img src="img/projects/project-2.jpg" class="img-fluid" alt="Project">
											</a>
										</div>
										<h5 class="mg-title font-weight-semibold">Blog<small>.png</small></h5>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumb-preview">
											<a class="thumb-image" href="#">
												<img src="img/projects/project-5.jpg" class="img-fluid" alt="Project">
											</a>
										</div>
										<h5 class="mg-title font-weight-semibold">Friends<small>.png</small></h5>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumb-preview">
											<a class="thumb-image" href="#">
												<img src="img/projects/project-4.jpg" class="img-fluid" alt="Project">
											</a>
										</div>
										<h5 class="mg-title font-weight-semibold">Life<small>.png</small></h5>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="thumb-preview">
											<a class="thumb-image" href="#">
												<img src="img/projects/project-5.jpg" class="img-fluid" alt="Project">
											</a>
										</div>
										<h5 class="mg-title font-weight-semibold">Poetry<small>.png</small></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end: page -->
				
				
		<?php 

page_foot($page_ID);
?>		