 $(document).ready(function(){ 
	$(window).resize(function () {
		var width = $(window).width();
		if(width <=770 ){
		    $('#menu-beltcarepro').removeClass('collapsed');
		}else{
		 	$('#menu-beltcarepro').addClass('collapsed');
		}		
	});
});
 
