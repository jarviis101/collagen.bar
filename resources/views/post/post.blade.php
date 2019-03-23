@extends('layouts.main')
@section('title', 'Темы')

@section('content')
    <div class="custom-block-menu">
        @include('partials.header')
    </div>
    @php 
        $head_text = \App\PostsPageContent::find(1);
        $images = \App\PostsPageImage::find(1);
        $links = \App\PostsPageLink::find(1);
    @endphp
    <section class="container-fluid" id="title-posts-section">
        <div class="row justify-content-center">
            <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-4 d-xl-flex col-xl-4">
                <img src="{{ asset('storage/' . $images->image_1) }}" class="img-fluid" alt="">
            </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 title-block">
                    <div class="row justify-content-center">
                        <div class="title-text-bg">
                            <h1>Коллаген</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="col-12 title-text-content">
                            {{ $head_text->header_text }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="list-posts-section">
            <div class="row justify-content-center">
                <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-4 d-xl-flex col-xl-4">
                    <img src="{{ asset('storage/' . $images->image_2) }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 title-block">
                    <div class="row justify-content-center">
                        <div class="title-text-bg">
                            <h1>Темы</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <ul class="col-12 list-group">
                            @foreach ($post as $key => $value)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3 col-sm-1 col-md-2 col-lg-1 col-xl-1 d-flex align-items-center justify-content-center">
                                        <div class="rectangle">
                                            <span class="number-of-list">
                                                {{$key + 1}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-start">
                                        <a href="/post/{{ $value->slug }}" class="title-list">
                                            {{ $value->title }}
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="additional-posts-section">
            <div class="row justify-content-center">
                <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-4 d-xl-flex col-xl-4">
                    <img src="{{ asset('storage/' . $images->image_3) }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 title-block">
                    <div class="row justify-content-center">
                        <a href="{{ $links->link_info}}" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 links">
                            <span class="title-link">{{$links->title_info}}</span>
                            <span class="image-icon-block">
                                <img src="img/cream.png" alt="">
                            </span>
                        </a>
                        <a href="{{ $links->link_youtube}}" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 links">
                            <span class="title-link">{{$links->title_youtube}}</span>
                            <span class="image-icon-block">
                                <img src="img/youtube (2).png" alt="">
                            </span>
                        </a>
                        <a href="{{ $links->link_question}}" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 links">
                            <span class="title-link">{{$links->title_question}}</span>
                            <span class="image-icon-block">
                                <img src="img/question.png" alt="">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

@endsection