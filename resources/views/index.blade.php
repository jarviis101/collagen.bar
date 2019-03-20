@extends('layouts.main')
@section('title', 'Главная')
@section('content')
<section id="index-title-section">
    <div class="slider title-slider">
        <div class="slide-item col-12">
            <div class="title-bg-image">
                <img src="img/DSC04602.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-xl-center">
                    <h1 class="d-flex justify-content-end align-items-center col-xl-10 title-text">
                        Уникальная косметика с коллагеном
                    </h1>
                </div>
                <div class="row btn-r">
                    <div class="col-xl-11 d-flex justify-content-end">
                        <button class="btn btn-info btn-custom col-xl-4">
                            Подробнее
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item col-12">
            <div class="title-bg-image">
                <img src="img/DSC04602.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-xl-center">
                    <h1 class="d-flex justify-content-end align-items-center col-xl-10 title-text">
                        Уникальная косметика с коллагеном
                    </h1>
                </div>
                <div class="row btn-r">
                    <div class="col-xl-11 d-flex justify-content-end">
                        <button class="btn btn-info btn-custom col-xl-4">
                            Подробнее
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sliders-arrows container">
        <a data-role="none" class="slick-prev">
            <div class="prev-block"><i class="fas fa-arrow-left"></i></div>
        </a>
        <a data-role="none" class="slick-next">
             <div class="next-block"><i class="fas fa-arrow-right"></i></div>
        </a>
    </div>
    
</section>

<section class="container-fluid" id="index-about-us-section">
    <div class="row justify-content-center">
        <div class="col-xl-6 about-us-content">
            <div class="row justify-content-center">
                <h3 class="title">О нас</h3>
            </div>
            <div class="row justify-content-center">
                <p class="col-10 text">
                    {{ $page_content->about_us }}
                </p>
            </div>
            <div class="row justify-content-center">
                <button class="btn btn-info btn-custom col-xl-4">
                    Подробнее
                </button>
            </div>
        </div>
        <div class="col-xl-6 d-flex justify-content-center h-712px">
            <div class="img-block">

                <img src="{{ asset('storage/' . $page_content->image_about_us) }}" alt="">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-6 d-flex justify-content-center h-712px">
            <div class="img-block">
                    <img src="{{ asset('storage/' . $page_content->image_collagen) }}" alt="">
            </div>
        </div>
        <div class="col-xl-6 about-us-content">
            <div class="row justify-content-center">
                <h3 class="title">О коллагене</h3>
            </div>
            <div class="row justify-content-center">
                <p class="col-10 text">
                    {{ $page_content->about_collagen }}
                </p>
            </div>
            <div class="row justify-content-center">
                <button class="btn btn-info btn-custom col-xl-4">
                    Подробнее
                </button>
            </div>
        </div>
        
    </div>
</section>

<section class="container-fluid" id="index-products-section">
    <div class="row">
        <div class="offset-xl-1 col-xl-5 d-flex align-items-center">
            <div class="row justify-content-xl-start">
                <h3 class="title">Наша продукция</h3>
            </div>
        </div>
        <div class="col-xl-6 d-flex align-items-center">
            <div class="row justify-content-xl-start">
                <h4 class="subtitle col-xl-10">Только коллаген и ничего больше</h4>
            </div>
        </div>
    </div>
    <div class="row mt-100px">
            <div class="slider col-xl-12 type-of-slider">
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Коллаген</span></a>
                            <img src="img/product(1).png" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
                            <img src="img/product(2).png" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
                            <img src="img/product(2).png" alt="">
                        </div>
                    </div>
                </div>		
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
                            <img src="img/product(2).png" alt="">
                        </div>
                    </div>
                </div>					
            </div>
        <div class="sliders-arrows container">
            <a data-role="none" class="slick-prev">
                <div class="prev-block"><i class="fas fa-arrow-left"></i></div>
            </a>

            <a data-role="none" class="slick-next">
                 <div class="next-block"><i class="fas fa-arrow-right"></i></div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="ml-xl-4 site-bar">
            <div class="row justify-content-center">
                <div class="col-2">
                    <div class="eclipse"></div>
                </div>
                <div class="col">
                    <a href="#" class="link-site-bar">collagen.bar</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid" id="index-services-section">
    <div class="row">
        <div class="offset-xl-1 col-xl-5 d-flex align-items-center">
            <div class="row justify-content-xl-start">
                <h3 class="title">Наши услуги</h3>
            </div>
        </div>
        <div class="col-xl-6 d-flex align-items-center">
            <div class="row justify-content-xl-start">
                <h4 class="subtitle col-xl-10">Только профессиональный подход к использованию</h4>
            </div>
        </div>
    </div>
    <div class="row mt-100px">
            <div class="slider col-xl-12 services-slider">
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Диетолог</span></a>
                            <img src="img/doctor.png" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Косметолог</span></a>
                            <img src="img/cosmetologist.png" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
                            <img src="img/product(2).png" alt="">
                        </div>
                    </div>
                </div>		
                <div>
                    <div class="col-xl-12 product">
                        
                        <div class="img-product-block">
                            <a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
                            <img src="img/product(2).png" alt="">
                        </div>
                    </div>
                </div>					
            </div>
        <div class="sliders-arrows container">
            <a data-role="none" class="slick-prev">
                <div class="prev-block"><i class="fas fa-arrow-left"></i></div>
            </a>
            <a data-role="none" class="slick-next">
                 <div class="next-block"><i class="fas fa-arrow-right"></i></div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class=" ml-xl-4 site-bar">
            <div class="row justify-content-center">
                <div class="col-2">
                    <div class="eclipse"></div>
                </div>
                <div class="col">
                    <a href="#" class="link-site-bar">collagen.bar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection