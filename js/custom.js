 $(document).ready(function(){ 
	$(window).resize(function () {
		var width = $(window).width();
		if(width <=770 ){
		    $('#menu-beltcarepro').removeClass('collapsed');
		    $('.yadcf-filter-wrapper').hide();
		    $('.dataTables_length').hide();
		}else{
		 	$('#menu-beltcarepro').addClass('collapsed');
		 	$('.yadcf-filter-wrapper').show();
		 	$('.dataTables_length').show();
		}		
	});

	var width = $(window).width();
	if(width <=770 ){
	    $('#menu-beltcarepro').removeClass('collapsed');
	    $('.yadcf-filter-wrapper').hide();
	    $('.dataTables_length').hide();
	}else{
	 	$('#menu-beltcarepro').addClass('collapsed');
	 	$('.yadcf-filter-wrapper').show();
	 	$('.dataTables_length').show();
	}		

});
 
