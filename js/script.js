$(document).ready(function(){


//sideBarSlideDown
	$('#li2').on('click', function(){
		$('.aboutMethod').slideToggle();
	})
//datapicker
	$.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
 	$( "#datepicker" ).datepicker({
 		autoSize: true
 	});	
//slicker slider
	$('.sidebarSlider').slick({
		appendArrows:$('.sidebarSlider')
	});
	$('.maincontentSlider').slick({
		appendArrows:$('.maincontentSlider')
	})


});