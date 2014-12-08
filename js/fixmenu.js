/***********************************************
Adds Bootstrap classes to the WP generated menu,
so it renders as a Bootstrap collapsable navbar.
***********************************************/

$(document).ready(function(){
	$('#menu-main').addClass( 'nav' );
	$('#menu-main').addClass( 'navbar-nav' );
	$('#menu-main').attr( 'role' , 'menu');

	$('.sub-menu').addClass( 'dropdown-menu' );
	$('.dropdown-menu').attr( 'role', 'menu' );
	$('.dropdown-menu').parent().addClass( 'dropdown' );
	$('.dropdown > a').addClass( 'dropdown-toggle' );
	$('.dropdown > a').attr( 'data-toggle', 'dropdown' );
	$('.dropdown > a').attr( 'role', 'button' );
	$('.dropdown > a').attr( 'area-expanded', 'false' );

//	$('.navbar-brand').after( '<h4 class="col-xs-6">Test</h4>' );
	console.log($('#home-css').length);
	if ( $('#home-css').length === 0 ){
		// If home.css isn't loaded - eg, if it's not the Home page
		var navHeight = $('nav').height();
		$('main').css( 'paddingTop', navHeight);
	}

	var adminBar = $('#wpadminbar');
	if ( adminBar ){
		barHeight = adminBar.height();
		$('nav').css( 'paddingTop', barHeight );
	}
});