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


	// Validasi Image
	var a = $('ul.errorlist li ul').find('li');
	if(a.length >= 1){
		validasi_error_message('This field is required.','Information');
	}

	//  Image Lightbox
	$('.image-Lightbox').each(function() {
		var rel_image = $(this).attr( "rel-image" );
		$("."+rel_image).colorbox({rel:rel_image});
	});
	

	$('.collapse').on('show.bs.collapse', function () {
            $('.collapse.in').collapse('hide');
              
     });


	// Default status Action
	$('.status-action').each(function() {
		if ($(this).is(':checked')) {
	    	$(this).siblings('label').html('Passed');
	    	$(this).siblings('label').addClass('status-step');
	    	$(this).siblings('label').removeClass('waiting-step');
	  	} else {
	    	$(this).siblings('label').html('Waiting');
	    	$(this).siblings('label').addClass('waiting-step');
	    	$(this).siblings('label').removeClass('status-step');
	  	}
	});


	// Checkbox Click
	$('.status-action').click(function() {
	  if($(this).is(':checked')) {
	    $(this).siblings('label').html('Passed');
	    $(this).siblings('label').addClass('status-step');
	    $(this).siblings('label').removeClass('waiting-step');
	  } else {
	    $(this).siblings('label').html('Waiting');
	    $(this).siblings('label').addClass('waiting-step');
	    $(this).siblings('label').removeClass('status-step');
	  }
	});




	// Default status Inspect
	$('.status-inspect').each(function() {
		if ($(this).is(':checked')) {
	    	$(this).siblings('label').html('Done');
	    	$(this).siblings('label').addClass('status-step');
	    	$(this).siblings('label').removeClass('waiting-step');
	  	} else {
	    	$(this).siblings('label').html('Waiting');
	    	$(this).siblings('label').addClass('waiting-step');
	    	$(this).siblings('label').removeClass('status-step');
	  	}
	});


	// Default status Inspect Checkbox Click
	$('.status-inspect').click(function() {
	  if($(this).is(':checked')) {
	    $(this).siblings('label').html('Done');
	    $(this).siblings('label').addClass('status-step');
	    $(this).siblings('label').removeClass('waiting-step');
	  } else {
	    $(this).siblings('label').html('Waiting');
	    $(this).siblings('label').addClass('waiting-step');
	    $(this).siblings('label').removeClass('status-step');
	  }
	});




	// status Progress action default
	$('.accordion-toggle').each(function(){
		var data_target = $(this).attr( "data-target" );
		var res_target = data_target.replace("#", ""); 

		var jumlah=0;
		var active=0;
		var no_active=0;

		$('.status-action').each(function() {
			if ($(this).is(':checked')) {
				var id_check = $(this).attr("id");
				var res = id_check.substr(0, 8);

				if (res_target === res){
					active=active+1;
					jumlah=jumlah+1;
				}

		  	}else {
		  		var id_check = $(this).attr("id");
				var res = id_check.substr(0, 8);
				if (res_target === res){
					no_active=no_active+1;
					jumlah=jumlah+1;
				}
		  	}
		});

		var nilai_progressbar=(100/jumlah) * active;

		if (nilai_progressbar < 40){
			$("#progress-bar-"+res_target).addClass('progress-bar-red');
			$("#progress-bar-"+res_target).removeClass('progress-bar-info');
			$("#progress-bar-"+res_target).removeClass('progress-bar-success');
		}else if(nilai_progressbar >= 40 && nilai_progressbar <= 70){
			$("#progress-bar-"+res_target).removeClass('progress-bar-red');
			$("#progress-bar-"+res_target).addClass('progress-bar-info');
			$("#progress-bar-"+res_target).removeClass('progress-bar-success');
		}else if(nilai_progressbar > 70){
			$("#progress-bar-"+res_target).removeClass('progress-bar-red');
			$("#progress-bar-"+res_target).removeClass('progress-bar-info');
			$("#progress-bar-"+res_target).addClass('progress-bar-success');
		}

		$("#progress-bar-"+res_target).attr("style", "width:"+nilai_progressbar+"%");

	});


	// Status Progress Action Click
	$('.status-action').click(function() {
		var id_check_click = $(this).attr("id");
		var res_click = id_check_click.substr(0, 8);
		var jumlah=0;
		var active=0;
		var no_active=0;

		$('.status-action').each(function() {
			if ($(this).is(':checked')) {
				var id_check = $(this).attr("id");
				var res = id_check.substr(0, 8);

				if (res_click === res){
					active=active+1;
					jumlah=jumlah+1;
				}

		  	}else {
		  		var id_check = $(this).attr("id");
				var res = id_check.substr(0, 8);
				if (res_click === res){
					no_active=no_active+1;
					jumlah=jumlah+1;
				}
		  	}
		});
		var nilai_progressbar=(100/jumlah) * active;

		if (nilai_progressbar < 40){
			$("#progress-bar-"+res_click).addClass('progress-bar-red');
			$("#progress-bar-"+res_click).removeClass('progress-bar-info');
			$("#progress-bar-"+res_click).removeClass('progress-bar-success');
		}else if(nilai_progressbar >= 40 && nilai_progressbar <= 70){
			$("#progress-bar-"+res_click).removeClass('progress-bar-red');
			$("#progress-bar-"+res_click).addClass('progress-bar-info');
			$("#progress-bar-"+res_click).removeClass('progress-bar-success');
		}else if(nilai_progressbar > 70){
			$("#progress-bar-"+res_click).removeClass('progress-bar-red');
			$("#progress-bar-"+res_click).removeClass('progress-bar-info');
			$("#progress-bar-"+res_click).addClass('progress-bar-success');
		}

		$("#progress-bar-"+res_click).attr("style", "width:"+nilai_progressbar+"%");

	});

});
 
