@extends('layouts.main')
@section('title', 'Главная')

@section('content')
<section id="index-title-section">
    <!-- foreach -->
	<div class="slider title-slider">
		<div class="slide-item col-12">
			<div class="title-bg-image">
				<img src="img/DSC04602.png" alt="">
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<h1 class="d-flex justify-content-end align-items-center col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 title-text">
						Уникальная косметика с коллагеном
					</h1>
				</div>
				<div class="row btn-r">
					<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-11 d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-end justify-content-xl-end">
						<button class="btn btn-info btn-custom col-7 col-sm-7 col-md-6 col-lg-5 col-xl-4">
							Подробнее
						</button>
					</div>
				</div>
		    </div>
		</div>
    </div>
    <!-- endforeach -->
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
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 about-us-content order-1 order-sm-1 order-md-1 order-lg-1 order-xl-1">
			<div class="row justify-content-center">
				<h3 class="title">О нас</h3>
			</div>
			<div class="row justify-content-center">
				<p class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 text">
                    {{ $page_content->about_us }}
                </p>
			</div>
			<div class="row justify-content-center">
				<a href="#" class="btn btn-info btn-custom col-7 col-sm-7 col-md-6 col-lg-5  col-xl-4">
					Подробнее
                </a>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center h-712px order-2 order-sm-2 order-md-2 order-lg-2 order-xl-2">
			<div class="img-block">
				<img src="{{ asset('storage/' . $page_content->image_about_us) }}" alt="">
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center h-712px order-2 order-sm-2 order-md-1 order-lg-1 order-xl-1">
			<div class="img-block">
				<img src="{{ asset('storage/' . $page_content->image_collagen) }}" alt="">
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 about-us-content order-1 order-sm-1 order-md-2 order-lg-2 order-xl-2">
			<div class="row justify-content-center">
				<h3 class="title">О коллагене</h3>
			</div>
			<div class="row justify-content-center">
				<p class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 text">
                    {{ $page_content->about_collagen }}
                </p>
			</div>
			<div class="row justify-content-center">
				<a href="#" class="btn btn-info btn-custom col-7 col-sm-7 col-md-6 col-lg-5 col-xl-4">
					Подробнее
                </a>
			</div>
		</div>	
	</div>
</section>

<section class="container-fluid" id="index-products-section">
	<div class="row">
		<div class="col-6 offset-sm-1 col-sm-5 offset-md-1 col-md-5 offset-lg-1 col-lg-5 offset-xl-1 col-xl-5 d-flex justify-content-center justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start align-items-center">
			<div class="row justify-content-xl-start">
				<h3 class="title">Наша продукция</h3>
			</div>
		</div>
		<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
			<div class="row justify-content-xl-start">
				<h4 class="subtitle col-xl-10">Только коллаген и ничего больше</h4>
			</div>
		</div>
	</div>
	<div class="row mt-100px">
		<div class="slider col-xl-12 type-of-slider">
			<div class="slider-item">
				<div class="col-xl-12 product">
				    <div class="img-product-block">
						<a href="#" class="name-of-type"><span>Коллаген</span></a>
						<img src="img/product(1).png" alt="">
					</div>
				</div>
			</div>
			<div class="slider-item">
			    <div class="col-xl-12 product">
					<div class="img-product-block">
						<a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
						<img src="img/product(2).png" alt="">
					</div>
				</div>
			</div>
			<div class="slider-item">
				<div class="col-xl-12 product">
					<div class="img-product-block">
						<a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
						<img src="img/product(2).png" alt="">
					</div>
				</div>
			</div>		
			<div class="slider-item">
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
		<div class="offset-0 col-6 offset-sm-1 col-sm-5 offset-md-1 col-md-5 offset-lg-1 col-lg-5 offset-xl-1 col-xl-5 d-flex justify-content-center justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start align-items-center">
			<div class="row justify-content-xl-start">
				<h3 class="title">Наши услуги</h3>
			</div>
		</div>
		<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
			<div class="row justify-content-xl-start">
				<h4 class="subtitle col-xl-10">Только профессиональный подход к использованию</h4>
			</div>
		</div>
	</div>
	<div class="row mt-100px">
		<div class="slider col-xl-12 services-slider">
			<div class="slider-item">
				<div class="col-xl-12 product">
					<div class="img-product-block">
						<a href="#" class="name-of-type"><span>Диетолог</span></a>
						<img src="img/doctor.png" alt="">
					</div>
				</div>
			</div>
			<div class="slider-item">
				<div class="col-xl-12 product">
					<div class="img-product-block">
						<a href="#" class="name-of-type"><span>Косметолог</span></a>
						<img src="img/cosmetologist.png" alt="">
					</div>
				</div>
			</div>
			<div class="slider-item">
				<div class="col-xl-12 product">
					<div class="img-product-block">
						<a href="#" class="name-of-type"><span>Косметика с коллагеном</span></a>
						<img src="img/product(2).png" alt="">
					</div>
				</div>
			</div>		
			<div class="slider-item">
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