/***********************************************
Adds Bootstrap classes to the WP generated menu,
so it renders as a Bootstrap collapsable navbar.
***********************************************/

$(document).ready(function(){
	$('#menu-main').addClass( 'nav' );
	$('#menu-main').addClass( 'navbar-nav' );
	$('#menu-main').attr( 'role' , 'menu');
});