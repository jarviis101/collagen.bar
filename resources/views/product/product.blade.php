@extends('layouts.main')
@section('title', 'Товары')
	@php
		
	@endphp
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
				<div class="col-xl-3 d-flex flex-column">
					<form method="GET" action="/filter" class="filter">
						<div class="col-12 filter-block">
							<div class="row">
								<h5 class="titles-filter">Типы коллагена</h5>
							</div>
							<div class="row flex-column">
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="type1" value="first_type" name="f_type">
								  <label class="custom-control-label" for="type1">Тип 1 и 3(кожа)</label>
								</div>
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="type2" value="second_type" name="s_type">
								  <label class="custom-control-label" for="type2">Тип 3(суставы)</label>
								</div>
							</div>
						</div>
						<div class="col-12 filter-block">
							<div class="row">
								<h5 class="titles-filter">Страна производителя</h5>
							</div>
							<div class="row flex-column">
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="jpn" value="japan" name="japan">
								  <label class="custom-control-label" for="jpn">Япония</label>
								</div>
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="usa" value="usa" name="usa">
								  <label class="custom-control-label" for="usa">США</label>
								</div>
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="other" value="other" name="other">
								  <label class="custom-control-label" for="other">Другие</label>
								</div>
							</div>
						</div>
						<div class="col-12 filter-block">
							<div class="row">
								<h5 class="titles-filter">Форма выпуска</h5>
							</div>
							<div class="row flex-column">
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="form1" value="hydro_f" name="hydro_f">
								  <label class="custom-control-label" for="form1">Гидролизованный коллаген</label>
								</div>
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="form2" value="tablet_f" name="tablet_f">
								  <label class="custom-control-label" for="form2">Таблетированная форма</label>
								</div>
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="form3" value="drink_f" name="drink_f">
								  <label class="custom-control-label" for="form3">Питьевой коллаген</label>
								</div>
							</div>
						</div>		
						<div class="col-12 filter-block">
							<div class="row">
								<h5 class="titles-filter">Сырье</h5>
							</div>
							<div class="row flex-column">
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="material1" value="sea" name="sea">
								  <label class="custom-control-label" for="material1">Морского происхождения</label>
								</div>
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="material2" value="animals" name="animals">
								  <label class="custom-control-label" for="material2">Животного происхождения</label>
								</div>
							</div>
						</div>
						<div class="col-12 filter-block">
							<div class="row">
								<h5 class="titles-filter">Цена</h5>
							</div>
							<div class="row flex-row">
								<div class="form-group col-4">
								    <input type="text" class="form-control" id="min" name="min-price">
								</div>
								<span class="divider"> - </span>
								<div class="form-group col-4">
								    <input type="text" class="form-control" id="max" name="max-price">
								</div>
							</div>
						</div>
						<div class="col-12 filter-block">
							<div class="row justify-content-start">
								<button type="submit" class="col-6 btn-custom" id="submit">Подтвердить</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-xl-9">
                    <div class="row"></div>
                    @include('product.product(list)')
				</div>
			</div>
		</div>
	</section>
@endsection