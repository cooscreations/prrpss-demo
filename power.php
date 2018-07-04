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


$page_ID = "26";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>



<!-- start: page -->
<div class="row">

<div class="col-md-4">

<section class="card mb-4">
	<header class="card-header">
		<div class="card-actions">
			<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
			<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
		</div>

		<h2 class="card-title"><i class="fa fa-sun fa-fw"></i> Clean Energy</h2>
		<p class="card-subtitle">Solar, Tidal, Wind</p>
	</header>
	<div class="card-body">
		<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
	</div>
	<div class="card-footer">
		<a href="#">Find out more soon...</a>
	</div>
</section>

</div>
<div class="col-md-4">

<section class="card mb-4">
	<header class="card-header">
		<div class="card-actions">
			<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
			<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
		</div>

		<h2 class="card-title"><i class="fa fa-seedling fa-fw"></i> Storage &amp; Distribution</h2>
		<p class="card-subtitle">Batteries, Cells, Power Network</p>
	</header>
	<div class="card-body">
		<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
	</div>
	<div class="card-footer">
		<a href="#">Find out more soon...</a>
	</div>
</section>

</div>
<div class="col-md-4">

<section class="card mb-4">
	<header class="card-header">
		<div class="card-actions">
			<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
			<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
		</div>

		<h2 class="card-title"><i class="fa fa-copy fa-fw"></i> Emergency Power</h2>
		<p class="card-subtitle">Ensuring On-Going Success</p>
	</header>
	<div class="card-body">
		<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
	</div>
	<div class="card-footer">
		<a href="#">Find out more soon...</a>
	</div>
</section>
</div>
</div>
<!-- end: page -->


		<?php

page_foot($page_ID);
?>
