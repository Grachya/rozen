$(document).ready(function(){
	// $('#accordionSideBar').accordion({
	// 	collapsible: true
	// })

//sideBarSlideDown
	$('#li2').on('click', function(){
		$('.aboutMethod').slideToggle();
	})

//datapicker
	// $.datepicker.setDefaults(
	// 	$.extend($.datepicker.regional["ru"]);
	// );
	$.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
 	$( "#datepicker" ).datepicker({
 		autoSize: true
 	});	
})