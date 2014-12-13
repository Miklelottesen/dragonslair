<!DOCTYPE html>
<html>
<head>
	<title>Dragons Lair</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- Bootstrap css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css"><!-- Own css file -->
	<?php
		if (empty($_GET)) {
		    // no data passed by get, which means it's the Home page
		    echo '<link id="home-css" rel="stylesheet" type="text/css" href="css/home.css">';
		    	// Load custom CSS for Home page
		}
	?>
	<link rel="shortcut icon" href="/favicons/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<script src="js/jquery-2.1.1.min.js"></script><!-- jQuery -->
	<script src="js/bootstrap.min.js"></script><!-- Bootstrap js file -->
		<?php // As this php file is ultimately shown in root://index.php, all paths are relative to the root ?>
	<?php wp_head(); // Loads WP header stuff ?>
</head>
<body>
	<header>
		<!-- Header: -->
		<?php
			include 'wp/wp-content/themes/dragonslair/nav.php'; 
				// The navbar with logo and search field
		?>
	</header>