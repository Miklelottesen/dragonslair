/****************************************************
 * Script to keep the footer in the bottom, always! *
 * Also makes sure that it will never be placed     *
 * beyond window height, if the content is less than*
 * window height..                                  *
 ****************************************************/

/*******************************
	FUNCTIONS:
*******************************/
function moveFooter (){
	var fHeight = $( 'footer' ).height(); //Get the footer's height.
	var fHeight = fHeight + 20; //Compensates for margin, padding, etc.
	var wHeight = $('body').height(); //Get height of the browser window.

	var wrapperHeight = wHeight - fHeight; //Calculates new height of #wrapper section (everything besides the footer)
	console.log('Footer height = '+fHeight);
	console.log('Window height = '+wHeight);
	console.log('Wrapper height = '+wrapperHeight);

	$('#wrapper').css( 'height' , wrapperHeight ); //Sets height of the #wrapper section
	$('#wrapper').css( 'minHeight' , wrapperHeight ); //Sets height of the #wrapper section
}

/*******************************
	LISTENERS:
*******************************/
$(document).ready(function(){
	moveFooter(); //Place footer correctly on document ready

	$(window).resize(function(){
		moveFooter(); //Places footer correctly on window resize
	});
});