<!DOCTYPE html>
<html>
<head>
	 <title>Dragons Lair</title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- Bootstrap css file -->
	 <link rel="stylesheet" type="text/css" href="css/style.css"><!-- Own css file -->
	 <link rel="shortcut icon" href="/favicons/favicon.ico" type="image/x-icon" />
	 <meta name="viewport" content="width=device-width, initial-scale=1, use-scalable=no">
	 <script src="js/jquery-2.1.1.min.js"></script><!-- jQuery -->
	 <script src="js/bootstrap.min.js"></script><!-- Bootstrap js file -->
		<!-- As this php file is ultimately shown in root://index.php, all paths are relative to the root -->
	<?php wp_head(); // Loads WP header stuff ?>
</head>
<body>
	<section id="wrapper">
		<!-- Wrapper for the entire site, except the footer -->

		<header>
			<!-- Header: -->
			<section class="col-lg-3 col-md-3 col-sm-4 col-xs-min-4"><h1>LOGO</h1></section>
			<section class="col-lg-6 col-md-6 col-sm-4 col-xs-min-4"><h2>Social buttons</h2></section>
			<section class="col-lg-3 col-md-3 col-sm-4 col-xs-min-4"><h2>Search <i>Home</i></h2></section>
			<!-- Navbar container: -->
			<nav class="navbar navbar-default col-sm-12" role="navigation">
				<section class="container-fluid">
					<!-- Menu button for collapsed bar: -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Section containing actual navbar: -->
					<section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<!-- Get Wordpress links (generates its own list): -->  
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						<!-- Script to add Bootstrap classes to WP generated list -->  
						<script src="js/fixmenu.js"></script> 
					</section>
				</section>  
			</nav>
		</header>