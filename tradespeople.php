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


$page_ID = "10";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);

$link_name_1 	= 'builders';
$full_name_1 	= "Builders";
$this_icon_1 	= "wrench";
$intro_para_1	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_1	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_2 	= 'gardeners';
$full_name_2 	= "Gardeners";
$this_icon_2 	= "leaf";
$intro_para_2	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_2	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_3 	= 'electricians';
$full_name_3 	= "Electricians";
$this_icon_3 	= "bolt";
$intro_para_3	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_3	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_4 	= 'plumbers';
$full_name_4 	= "Plumbers";
$this_icon_4 	= "tint";
$intro_para_4	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_4	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_5 	= 'carpenters';
$full_name_5 	= "Carpenters";
$this_icon_5 	= "tree";
$intro_para_5	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_5	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_6 	= 'decorators';
$full_name_6 	= "Decorators";
$this_icon_6 	= "paint-roller";
$intro_para_6	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_6	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';

?>



<!-- start: page -->
<div class="row">
<!-- START NEW WIDGET -->
<div class="col-lg-2 col-xl-2">
	<section class="card mt-4">
		<header class="card-header bg-primary">
			<div class="card-header-icon">
				<i class="fas fa-<?php echo $this_icon_1; ?>"></i>
			</div>
		</header>
		<div class="card-body text-center">
			<h3 class="font-weight-semibold mt-3 text-center"><?php echo $full_name_1; ?></h3>
		</div>
	</section>
</div>
<!-- END NEW WIDGET -->

<!-- //////////////////////////////////////////////////////// -->

<!-- START NEW WIDGET -->
<div class="col-lg-2 col-xl-2">
	<section class="card mt-4">
		<header class="card-header bg-primary">
			<div class="card-header-icon">
				<i class="fas fa-<?php echo $this_icon_2; ?>"></i>
			</div>
		</header>
		<div class="card-body text-center">
			<h3 class="font-weight-semibold mt-3 text-center"><?php echo $full_name_2; ?></h3>
		</div>
	</section>
</div>
<!-- END NEW WIDGET -->

<!-- //////////////////////////////////////////////////////// -->

<!-- START NEW WIDGET -->
<div class="col-lg-2 col-xl-2">
	<section class="card mt-4">
		<header class="card-header bg-primary">
			<div class="card-header-icon">
				<i class="fas fa-<?php echo $this_icon_3; ?>"></i>
			</div>
		</header>
		<div class="card-body text-center">
			<h3 class="font-weight-semibold mt-3 text-center"><?php echo $full_name_3; ?></h3>
		</div>
	</section>
</div>
<!-- END NEW WIDGET -->

<!-- //////////////////////////////////////////////////////// -->

<!-- START NEW WIDGET -->
<div class="col-lg-2 col-xl-2">
	<section class="card mt-4">
		<header class="card-header bg-primary">
			<div class="card-header-icon">
				<i class="fas fa-<?php echo $this_icon_4; ?>"></i>
			</div>
		</header>
		<div class="card-body text-center">
			<h3 class="font-weight-semibold mt-3 text-center"><?php echo $full_name_4; ?></h3>
		</div>
	</section>
</div>
<!-- END NEW WIDGET -->

<!-- //////////////////////////////////////////////////////// -->

<!-- START NEW WIDGET -->
<div class="col-lg-2 col-xl-2">
	<section class="card mt-4">
		<header class="card-header bg-primary">
			<div class="card-header-icon">
				<i class="fas fa-<?php echo $this_icon_5; ?>"></i>
			</div>
		</header>
		<div class="card-body text-center">
			<h3 class="font-weight-semibold mt-3 text-center"><?php echo $full_name_5; ?></h3>
		</div>
	</section>
</div>
<!-- END NEW WIDGET -->

<!-- //////////////////////////////////////////////////////// -->

<!-- START NEW WIDGET -->
<div class="col-lg-2 col-xl-2">
	<section class="card mt-4">
		<header class="card-header bg-primary">
			<div class="card-header-icon">
				<i class="fas fa-<?php echo $this_icon_6; ?>"></i>
			</div>
		</header>
		<div class="card-body text-center">
			<h3 class="font-weight-semibold mt-3 text-center"><?php echo $full_name_6; ?></h3>
		</div>
	</section>
</div>
<!-- END NEW WIDGET -->

<!-- //////////////////////////////////////////////////////// -->
</div>

<!-- end: page -->


		<?php

page_foot($page_ID);
?>
