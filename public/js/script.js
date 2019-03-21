$(document).ready(function(){
	$('.title-slider').slick({
		dots: false,
		draggable: false,
		slidesToShow: 1,
		prevArrow: ('#index-title-section .slick-prev'),
		nextArrow: ('#index-title-section .slick-next'),
		responsive: [
		{
			breakpoint: 768,
			settings: {
				draggable: true,
				arrows: false
			}
		}],
    });
    $('.type-of-slider').slick({
    	slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		draggable: true,
		responsive: [
		{
			breakpoint: 2560,
			settings: {
				draggable: true,
				slidesToShow: 3,
				slidesToScroll: 1
			} 
		},
		{
			breakpoint: 1441,
			settings: {
				draggable: true,
				slidesToShow: 2,
				slidesToScroll: 1
			} 
		},
		{
			breakpoint: 575,
			settings: {
				draggable: true,
				slidesToShow: 1,
				slidesToScroll: 1
			} 
		}
		],
		draggable: true,
		easing: 'linear',  
		prevArrow: ('#index-products-section .slick-prev'),
		nextArrow: ('#index-products-section .slick-next')
    });

	$('.services-slider').slick({
		dots: false,
		draggable: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 2560,
			settings: {
				draggable: true,
				slidesToShow: 3,
				slidesToScroll: 1
			} 
		},
		{
			breakpoint: 1441,
			settings: {
				draggable: true,
				slidesToShow: 2,
				slidesToScroll: 1
			} 
		},
		{
			breakpoint: 992,
			settings: {
				draggable: true,
				slidesToShow: 2,
				slidesToScroll: 1
			} 
		},
		{
			breakpoint: 767,
			settings: {
				draggable: true,
				slidesToShow: 2,
				slidesToScroll: 1
			} 
		},
		{
			breakpoint: 575,
			settings: {
				draggable: true,
				slidesToShow: 1,
				slidesToScroll: 1
			} 
		}
		],
		draggable: true,  
		prevArrow: ('#index-services-section .slick-prev'),
		nextArrow: ('#index-services-section .slick-next')
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