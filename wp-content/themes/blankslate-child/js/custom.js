

 
	jQuery(document).ready(function ($) {
	    jQuery('.header .header-nav').meanmenu();

	    $('#clock').countdown('2017/6/10', function(event) {
  var $this = $(this).html(event.strftime(''
   
    + '<p class="days-wrapper"><span class="value">%d</span><span class="text">days</span> </p>'
    + '<p class="hour-wrapper"><span class="hour value">%H</span><span class="text">hours</span></p>'
    + '<p class="minute-wrapper"><span class="minute value">%M</span><span class="text">minutes</span></p>'
    + '<p class="seconds-wrapper"><span class="seconds value">%S</span><span class="text">seconds</span></p>'));
});
 
	});
	
 

  


