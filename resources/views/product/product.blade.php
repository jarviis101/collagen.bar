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
					<h1>Коллаген</h1>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-xl-4">
					
				</div>
				<div class="col-xl-8">
                    <div class="row"></div>
                    @include('product.product(list)')
				</div>
			</div>
		</div>
	</section>
@endsection