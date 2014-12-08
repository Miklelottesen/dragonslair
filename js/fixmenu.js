/***********************************************
Adds Bootstrap classes to the WP generated menu,
so it renders as a Bootstrap collapsable navbar.
***********************************************/

$(document).ready(function(){
	// First menu level:
	$('#menu-main').addClass( 'nav' );
	$('#menu-main').addClass( 'navbar-nav' );
	$('#menu-main').attr( 'role' , 'menu');

	// Second menu level (eg. dropdown):
	$('.sub-menu').addClass( 'dropdown-menu' );
	$('.dropdown-menu').attr( 'role', 'menu' );
	$('.dropdown-menu').parent().addClass( 'dropdown' );
	$('.dropdown > a').addClass( 'dropdown-toggle' );
	$('.dropdown > a').attr( 'data-toggle', 'dropdown' );
	$('.dropdown > a').attr( 'role', 'button' );
	$('.dropdown > a').attr( 'area-expanded', 'false' );

	// Set top-padding on <main>, to compensate for fixed navbar
	if ( $('#home-css').length === 0 ){
		// If home.css isn't loaded - eg, if it's not the Home page (homepage already has a top-margin)
		var navHeight = $('nav').height();
		$('main').css( 'paddingTop', navHeight);
	}

	// Set top-padding on nav, to compensate for WP admin bar - also adds border-bottom to admin bar
	var adminBar = $('#wpadminbar');
	if ( adminBar ){
		barHeight = adminBar.height();
		$('nav').css( 'paddingTop', barHeight );
		adminBar.css( 'borderBottom', '1px solid #151515' )
	}

	// Enable navigation when clicking on a link that has a dropdown (disabled by Bootstrap by default)
	$('.dropdown-toggle').click(function(){
		var aLocation = $(this).attr( 'href' ); // Store link destinaion as variable
		if ( $(".navbar-toggle").css( 'display' ) === 'none' ){
			// Only enable navigation on desktop version (when the menu button is hidden)
			window.location.href = aLocation;
		}
	});
});