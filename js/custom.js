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




	function information_message(a,b) {	
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-bottom-right",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		toastr.success(a,b, opts);
	}

	function validasi_error_message(a,b) {
	     var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-top-full-width",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		
		toastr.error(a,b, opts);
	}

	function warning_message(a,b) {
			var opts = {
				"closeButton": true,
				"debug": false,
				"positionClass": "toast-bottom-left",
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			};
		
		toastr.error(a,b, opts);
	}


	$(".error_validasi").click(function(ev)
	{
		$('.validasi').each(function() {		
			//  untuk menghandel validasi select
			var select =$(this).hasClass('selectboxit');

			if ($(this).val()==='' && select===false){
				var message = $(this).attr( "data-message-required" );		
				if(message){
					validasi_error_message(message,'Information');	
				}
			}
		});	
	});

});
 
