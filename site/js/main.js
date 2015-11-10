$(document).ready(function(){
var tabindex = false;
	var accessNav = $('#access-nav');
	$("body").on('keydown', function(e) { 
  var keyCode = e.keyCode || e.which; 

  if (keyCode == 9 && tabindex==false) { 
    e.preventDefault(); 
    accessNav.show();
      $('#gotoMenu').focus();
      tabindex=true;
  } 
});
})