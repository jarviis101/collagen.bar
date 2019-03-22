@extends('layouts.main')
@section('title', 'Новости')

@section('content')
    <div class="custom-block-menu">
        @include('partials.header')
    </div>
    <section class="container-fluid" id="news-section">
		<div class="container">
			<div class="row title-text justify-content-center">
				<div class="title-text-bg">
					<h1>Новости</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div id="carousel-thumb" class="col-10 carousel slide carousel-thumbnails d-flex justify-content-center" data-interval="false" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach ($news as $key=>$value)
                            @if( $key == 0)
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-self-md-start align-self-lg-center align-self-xl-center">
                                            <a href="/news/{{ $value->slug }}" class="img-slider-block d-flex align-items-center">
                                                <img class="slider-image img-fluid"  src="{{ asset('storage/' . $value->image) }}">
                                            </a>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-column align-self-center slider-text-descr">
                                            <a href="/news/{{ $value->slug }}" class="slide-h4">{{$value->title}}</a>
                                            <span class="date-time">{{$value->created_at->formatLocalized('%d.%m.%Y  в %H:%M')}}</span>
                                            <p>
                                                {{ $value->content }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col d-flex flex-column align-self-md-start align-self-lg-center align-self-xl-center">
                                            <a href="/news/{{ $value->slug }}" class="img-slider-block d-flex align-items-center">
                                                <img class="slider-image img-fluid"  src="{{ asset('storage/' . $value->image) }}">
                                            </a>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-column align-self-center slider-text-descr">
                                            <a href="/news/{{ $value->slug }}" class="slide-h4">{{$value->title}}</a>
                                            <span class="date-time">{{$value->created_at->formatLocalized('%d.%m.%Y  в %H:%M')}}</span>
                                            <p>
                                                {{ $value->content }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                        <div class="prev-block">
                            <i class="im im-angle-left"></i>
                        </div>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                        <div class="next-block">
                            <i class="im im-angle-right"></i>
                        </div>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        @foreach($news as $key=>$value)
                            @if( $key == 0)
                                <li data-target="#carousel-thumb" data-slide-to="0" class="active"> 
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <img class="d-block w-100" src="{{ asset('storage/' . $value->image) }}" class="img-fluid">
                                        </div>
                                        <div class="col-xl-12">
                                            <h4 class="slide-h4-indc">{{ $value->title }}</h4>
                                            <span class="date-time">{{$value->created_at->formatLocalized('%d.%m.%Y  в %H:%M')}}</span>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li data-target="#carousel-thumb" data-slide-to="{{$key++}}">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <img class="d-block w-100" src="{{ asset('storage/' . $value->image) }}" class="img-fluid">
                                        </div>
                                        <div class="col-xl-12">
                                            <h4 class="slide-h4-indc">{{ $value->title }}</h4>
                                            <span class="date-time">{{$value->created_at->formatLocalized('%d.%m.%Y  в %H:%M')}}</span>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                </div>
			</div>
		</div>
	</section>
@endsection