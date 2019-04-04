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
        }],
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
        }],
        draggable: true,  
        prevArrow: ('#index-services-section .slick-prev'),
        nextArrow: ('#index-services-section .slick-next')
    });
    

    $('#btn-filt').on('click', function(e)
    {
        e.preventDefault();
        $('#filter-form-hair').slideToggle("slow");
    });
    $('#btn-filt').on('click', function(e)
	{
        e.preventDefault();
        $('#filter-form-coll').slideToggle("slow");
    });

    $('#filter-form-coll').on('submit', function(event){
        event.preventDefault();
        var data = $(this).serialize();
        $.ajaxSetup({
            cache: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/filter_collagen',
            type: 'POST',
            data: data,
            success: function(data, response)
            {
                $('#data-products').html(data);
                console.log(response);
            }
        });
    });

	$('#filter-form-hair').on('submit', function(event){
        event.preventDefault();

        var data = $(this).serialize();
        $.ajaxSetup({
            cache: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
		});
        $.ajax({
            url: '/filter_hairCare',
            type: 'POST',
            data: data,
            success: function(data)
            {
                $('#data-products').html(data);
            }
        });
    });

    $('.ajax-btn').on('click', function(event)
    {
        event.preventDefault();
        $.ajaxSetup({
            cache: true
        });

        var category_id = $(this).attr('href').split('add-to-cart/')[1].split('/')[0];
        var slug = $(this).attr('href').split('add-to-cart/')[1].split('/')[1];
        $.ajax({
            url: "/add-to-cart/"+category_id+"/"+slug,
            type: 'GET',
            success: function(data, response)
            {
                console.log(response);
            }
        });
    });
	$("#tabs").tabs();
});