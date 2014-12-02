/**************************************************
Reduce width of content area, if sidebar is present
**************************************************/

$(document).ready(function(){
	
	var sideBar = $( 'aside' );
	if ( sideBar.length ){
		$('#content').addClass( 'col-sm-9' );
		/*Add Bootstrap class to #content area, which reduces 
		the width from 12/12 to 9/12 on small screens IF
		the sidebar is present.*/
	}
});