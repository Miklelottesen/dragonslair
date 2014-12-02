/*****************************************
Function to load content using AJAX, 
with a progress event for the progress bar
*****************************************/
function ajaxLoad( pageID ){
  $.ajax({
    xhr: function()
    {
      var xhr = new window.XMLHttpRequest();
      //Download progress
      xhr.addEventListener("progress", function(evt){
        if (evt.lengthComputable) {
          var percentComplete = evt.loaded / evt.total;
          //Do something with download progress
          console.log(percentComplete);
        }
      }, false);
      return xhr;
    },
    type: 'GET',
    url: pageID,
    data: {},
    success: function(data){
      $("#content").html(data);
    }
  });
}

/***************************************
Function to split a string by the ? char
***************************************/
function stringSplit( str ) {
    var res = str.split("?");
    return res;
}

/****************************************
Click listener for link - hijacks default
click events and loads the AJAX function
instead. Configured to only apply to the
appropiate links.
****************************************/
$(document).ready(function(){
  $('a').click(function( event ){
    var x = $(this);
    if ( //If the clicked link doesn't open in a new window and has an href attribute
        !( x.attr( 'target' ) && x.attr( 'target' ) === '_blank' )
        &&
        x.attr( 'href' )
      ){
      event.preventDefault();
      var pageID = x.attr( 'href' );
      if(pageID.indexOf('?') === -1){
        //If link has no ?page-id, pageID + 'ajax.php'
        var pageID = pageID + ajax.php;
      } else {
        //Call the stringSplit function and construct a new pageID including ajax.php
        y = stringSplit( pageID );
        pageID = y[0] + 'ajax.php?' + y[1];
      }
      ajaxLoad( pageID );
    }
    
  })
})
