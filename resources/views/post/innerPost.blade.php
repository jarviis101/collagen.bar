@extends('layouts.main')
@section('title', 'Публикация')
@section('content')
    <div class="custom-block-menu">
        @include('partials.header')
    </div>
    @foreach ($post as $item)	
        <section class="container-fluid" id="inner-article-title-section">
            <!--<div class="bg-image-container">
                <img src="" alt="">
            </div>-->
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10" style="color: #000;">
                        {{$item->title}}
                    </h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                        <div class="row justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start flex-date">
                            <div class="col-sm-6 col-md-5 col-lg-5 col-xl-3 date">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-calendar-day"></i>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <span class="date-time">{{$item->created_at->formatLocalized('%d.%m.%Y  в %H:%M')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="container-fluid" id="article-content-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                        <p class="content">
                            {{$item->content}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection