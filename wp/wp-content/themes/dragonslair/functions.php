<?php
	//Neccessary to load customized WP menu
	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
	// Neccessary to enable post thumbnails:
	add_theme_support( 'post-thumbnails' ); 
?>