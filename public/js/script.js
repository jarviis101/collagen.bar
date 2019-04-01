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
    

	$('#btn-filt').on('click', function(e)
	{
		e.preventDefault();
		$('#filter-form').slideToggle("slow");
	});


	$('#submit').on('click', function(event){
		event.preventDefault();
		$.ajaxSetup({
			cache: true
		});
		$.get('/filter?' + $('#filter-form').serialize(), function(data)
		{
			$('#data-products').html(data);
		});
	});
	$("#tabs").tabs();
});