/*****************************************************
Function that positions the footer on the bottom, if 
the page doesn't have enough content to push it there.
*****************************************************/
function fixFooter() {
	var docHeight = $(window).height();
	var footerHeight = $('footer').height();
	var footerTop = $('footer').position().top + footerHeight;
	if (footerTop < docHeight) {
		$('footer').css('margin-top', (docHeight - footerTop) + 'px');
	}
}

// The function is executed on document.ready
$(document).ready(function(){
	fixFooter();
	setTimeout(function(){
		// Necessary on some pages, for some reason
		fixFooter();
	},1);
});

// And also executed on window.resize
$(window).resize(function(){
	fixFooter();
});