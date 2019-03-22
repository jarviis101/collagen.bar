@extends('layouts.main')
@section('title', 'Темы')

@section('content')
    <div class="custom-block-menu">
        @include('partials.header')
    </div>
    <section class="container-fluid" id="title-posts-section">
        <div class="row justify-content-center">
            <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-4 d-xl-flex col-xl-4">
                <img src="{{asset('/img/Black_Pearl_Colagen_Firming_Mask__18464.1479655229.1280.png')}}" class="img-fluid" alt="">
            </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 title-block">
                    <div class="row justify-content-center">
                        <div class="title-text-bg">
                            <h1>Коллаген</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="col-12 title-text-content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="list-posts-section">
            <div class="row justify-content-center">
                <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-4 d-xl-flex col-xl-4">
                    <img src="{{ asset('/img/collagenmask32-900x900.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 title-block">
                    <div class="row justify-content-center">
                        <div class="title-text-bg">
                            <h1>Темы</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <ul class="col-12 list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3 col-sm-1 col-md-2 col-lg-1 col-xl-1 d-flex align-items-center justify-content-center">
                                        <div class="rectangle">
                                            <span class="number-of-list">
                                                1
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-start">
                                        <a href="#" class="title-list">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="additional-posts-section">
            <div class="row justify-content-center">
                <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-4 d-xl-flex col-xl-4">
                    <img src="img/3d87a4c158f905570dae6681bc26c008.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 title-block">
                    <div class="row justify-content-center">
                        <a href="#" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 links">
                            <span class="title-link">Информации достаточно чтобы перейти к заказу</span>
                            <span class="image-icon-block">
                                <img src="img/cream.png" alt="">
                            </span>
                        </a>
                        <a href="#" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 links">
                            <span class="title-link">хочу посмотреть видеоблог</span>
                            <span class="image-icon-block">
                                <img src="img/youtube (2).png" alt="">
                            </span>
                        </a>
                        <a href="#" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 links">
                            <span class="title-link">Не нашел нужную информацию задав вопрос</span>
                            <span class="image-icon-block">
                                <img src="img/question.png" alt="">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

@endsection