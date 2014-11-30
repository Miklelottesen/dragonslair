$(document).ready(function(){
	//Reduce width of content area, if sidebar is present
	var sideBar = $( 'aside' );
	console.log(sideBar);
	if ( sideBar.length ){
		$('#content').addClass( 'col-sm-9' );
	}
});