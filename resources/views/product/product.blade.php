@extends('layouts.main')
@section('title', 'Товары')
@section('content')
    <div class="custom-block-menu">
        @include('partials.header')
	</div>
    <section class="container-fluid" id="product-section">
		<div class="col-12 title-block">
			<div class="row justify-content-center">
				<div class="title-text-bg">
					<h1>{{ $name }}</h1>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
                <div class="col-12 col-sm-12 col-md-4 
                col-lg-3 col-xl-3 d-flex 
                flex-column flex-sm-row flex-md-column 
                flex-lg-column flex-xl-column pos-r">
                    @include('product.product(filter)')
				</div>
				<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-9">
					<div class="row"></div>
					<div id="data-products">
						@include('product.product(list)')
					</div>
                </div>
			</div>
		</div>
	</section>
@endsection