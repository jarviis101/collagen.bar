$(document).ready(function(){
	$('.title-slider').slick({
		dots: false,
		slidesToShow: 1,
		draggable: false,
		easing: 'linear',  
		prevArrow: ('#index-title-section .slick-prev'),
		nextArrow: ('#index-title-section .slick-next')
    });

	$('.services-slider').slick({
		dots: false,
		draggable: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 1441,
			settings: {
				draggable: true,
				slidesToShow: 2,
				slidesToScroll: 1
			} 
		}],
		draggable: true,  
		prevArrow: ('#index-services-section .slick-prev'),
		nextArrow: ('#index-services-section .slick-next')
    });
    $('.type-of-slider').slick({
		dots: false,
		draggable: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 1441,
			settings: {
				draggable: true,
				slidesToShow: 2,
				slidesToScroll: 1
			} 
		}],
		draggable: true,
		easing: 'linear',  
		prevArrow: ('#index-products-section .slick-prev'),
		nextArrow: ('#index-products-section .slick-next')
    });


    
/*    var menu = $("#menu");
  	$(window).scroll(function() {
   		var top = $(this).scrollTop();
    	if ( top <= 560 ) {
      		menu.css({'background':'rgba(0,0,0, .2)'});
	    } else if ( top >= 660 ) {
			menu.css({'background':'red'});
		}
  	});*/
});