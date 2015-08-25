$(document).ready(function(){


//sideBarSlideDown
	$('#li2').on('click', function(){
		$('.aboutMethod').slideToggle();
	})
//datapicker
	$.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
 	$( "#datepicker" ).datepicker({
 		autoSize: true,
 		onSelect: function(dateText, inst) {
	        var date = $(this).val();
	        var nowDate = "1";
	        var numOfEvent ;
	        var listOfEvents = $('.dateEvent').length;
	        for(i=0; i<listOfEvents; i++){
	        	if($('.dateEvent').eq(i).data('date')==date){
	        	  nowDate = $('.dateEvent').eq(i).data('date');
	        	  numOfEvent = i;
	        	}     	
	        }	        
	        var eventText = $('.dateEvent').eq(numOfEvent).text();
	        if(typeof(numOfEvent) == "number"){
	        	$('#datepicker').find('.innerInfo').remove().end().append('<div class="innerInfo"><p class="closeEvent">закрыть</p></div>');
	        	$('.closeEvent').on('click',function(){
	        		$('#datepicker').find('.innerInfo').remove();
	        	})
	        	$('.innerInfo').append('<p class="eventText">'+eventText+'</p>');

	        }else{
	        	$('#datepicker').find('.innerInfo').remove()
	        }
	        
    	}
 	});	
//slicker slider
	$('.sidebarSlider').slick({
		appendArrows:$('.sidebarSlider')
	});
	$('.maincontentSlider').slick({
		appendArrows:$('.maincontentSlider')
	})


});