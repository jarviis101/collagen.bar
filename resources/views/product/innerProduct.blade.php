@extends('layouts.main')
@section('title', 'Товар')
@section('content')
    <div class="custom-block-menu">
        @include('partials.header')
    </div>
    <section class="container-fluid" id="inner-product-title-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-5 col-xl-5 product-block-image">
                    <div class="img-product-block">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="">
                    </div>
                </div>
                <div class="col flex-column">
                    <div class="row justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <h1>{{$product->name}}</h1>
                    </div>
                    @if($product->category_id == 1)
                        <div class="row options">
                            @if ($product->type_of_care == 'first_type')
                                <span class="span-inner"><span class="font-inner">Тип ухода: </span>Профессиональная серия</span>
                            @else
                                <span class="span-inner"><span class="font-inner">Тип ухода: </span>Домашний уход</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->country == 'usa')
                                <span class="span-inner"><span class="font-inner">Страна: </span>США</span>
                            @endif
                            @if ($product->country == 'eur')
                                <span class="span-inner"><span class="font-inner">Страна: </span>Европа</span>
                            @endif
                            @if ($product->country == 'other')
                                <span class="span-inner"><span class="font-inner">Страна: </span>Другие</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->product_type == 'sls')
                                <span class="span-inner"><span class="font-inner">Вид продукции: </span>Безсульфатные шампуни SLS</span>
                            @endif
                            @if ($product->product_type == 'treatment')
                                <span class="span-inner"><span class="font-inner">Вид продукции: </span>Лечение (глубокая реконструкция)</span>
                            @endif
                            @if ($product->product_type == 'masks')
                                <span class="span-inner"><span class="font-inner">Вид продукции: </span>Маски для волос</span>
                            @endif
                            @if ($product->product_type == 'spray')
                                <span class="span-inner"><span class="font-inner">Вид продукции: </span>Спрей (глубокое увлажнение)</span>
                            @endif
                            @if ($product->product_type == 'balms')
                                <span class="span-inner"><span class="font-inner">Вид продукции: </span>Бальзамы/Кондиционеры</span>
                            @endif
                            @if ($product->product_type == 'sets')
                                <span class="span-inner"><span class="font-inner">Вид продукции: </span>Наборы (SET)</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->type_of_hair == 'normal')
                                <span class="span-inner"><span class="font-inner">Тип волос: </span>Нормальные</span>
                            @endif
                            @if ($product->type_of_hair == 'thin')
                                <span class="span-inner"><span class="font-inner">Тип волос: </span>Тонкие</span>
                            @endif
                            @if ($product->type_of_hair == 'color')
                                <span class="span-inner"><span class="font-inner">Тип волос: </span>Окрашенные</span>
                            @endif
                            @if ($product->type_of_hair == 'weakened')
                                <span class="span-inner"><span class="font-inner">Тип волос: </span>Ослабленные</span>
                            @endif
                            @if ($product->type_of_hair == 'damaged')
                                <span class="span-inner"><span class="font-inner">Тип волос: </span>Очень поврежденные</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->brand == 'shiseido')
                                <span class="span-inner"><span class="font-inner">Бренд: </span>Shiseido</span>
                            @endif
                            @if ($product->brand == 'lebel')
                                <span class="span-inner"><span class="font-inner">Бренд: </span>Lebel</span>
                            @endif
                            @if ($product->brand == 'artego')
                                <span class="span-inner"><span class="font-inner">Бренд: </span>Artego</span>
                            @endif
                            @if ($product->brand == 'chi')
                                <span class="span-inner"><span class="font-inner">Бренд: </span>Chi</span>
                            @endif
                            @if ($product->brand == 'other')
                                <span class="span-inner"><span class="font-inner">Бренд: </span>Другие</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->presence_of == 'radio1')
                            <span class="span-inner"><span class="font-inner">Наличие: </span>Есть в наличии</span>
                            @else
                            <span class="span-inner"><span class="font-inner">Наличие: </span>Нет в наличии</span>
                            @endif
                        </div>
                    @endif
                    @if($product->category_id == 3)
                        <div class="row options">
                            @if ($product->type == 'first_type')
                                <span class="span-inner"><span class="font-inner">Тип: </span>Тип I и III (кожа)</span>
                            @else
                                <span class="span-inner"><span class="font-inner">Тип: </span>Тип III (суставы)</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->country == 'usa')
                                <span class="span-inner"><span class="font-inner">Страна: </span>США</span>
                            @endif
                            @if ($product->country == 'japan')
                                <span class="span-inner"><span class="font-inner">Страна: </span>Япония</span>
                            @endif
                            @if ($product->country == 'other')
                                <span class="span-inner"><span class="font-inner">Страна: </span>Другие</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->form_issue == 'hydro_f')
                                <span class="span-inner"><span class="font-inner">Форма выпуска: </span>Гидролизованный коллаген</span>
                            @endif
                            @if ($product->form_issue == 'tablet_f')
                                <span class="span-inner"><span class="font-inner">Форма выпуска: </span>Таблетированная форма</span>
                            @endif
                            @if ($product->form_issue == 'drink_f')
                                <span class="span-inner"><span class="font-inner">Форма выпуска: </span>Питьевой коллаген</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->material == 'sea')
                                <span class="span-inner"><span class="font-inner">Сырье: </span>Морского происхождения</span>
                            @endif
                            @if ($product->material == 'animals')
                                <span class="span-inner"><span class="font-inner">Сырье: </span>Животного происхождения</span>
                            @endif
                        </div>
                        <div class="row options">
                            @if ($product->presence_of == 'radio1')
                            <span class="span-inner"><span class="font-inner">Наличие: </span>Есть в наличии</span>
                            @else
                            <span class="span-inner"><span class="font-inner">Наличие: </span>Нет в наличии</span>
                            @endif
                        </div>
                    @endif
                    <div class="row price-n-order">
                        <div class="col-5 col-sm-6 col-md-6 col-lg-6 col-xl-4 price-block">
                            <span class="price">
                                <span class="value">{{ $product->price}}</span> грн
                            </span>
                        </div>
                        <a class="btn-custom col-5 col-sm-5 col-md-5 col-lg-5 col-xl-4">
                            Купить
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="inner-product-tabs-section">
        <div class="container">
            <div class="row">
                <div id="tabs" class="col-12">
              <ul class="d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row justify-content-center">
                <li class="col col-xl-2"><a href="#tabs-1">Все о продукте</a></li>
                {{-- <li class="col col-xl-2"><a href="#tabs-2">Характеристики</a></li> --}}
                <li class="col col-xl-2"><a href="#tabs-3">Фото</a></li>
                <li class="col col-xl-2"><a href="#tabs-4">Отзывы</a></li>
                <li class="col col-xl-2"><a href="#tabs-5">Instagram</a></li>
              </ul>
              <div id="tabs-1">
                <p class="description col-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              {{-- <div id="tabs-2">
                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
              </div> --}}
              <div id="tabs-3">
                <div class="col-12 d-flex flex-row justify-content-around">
                    @if (!empty($photos))
                        <div class="img-gallery-block">
                            <img src="{{ asset('storage/' . $photos->image_1) }}" alt="">
                        </div>
                        <div class="img-gallery-block">
                            <img src="{{ asset('storage/' . $photos->image_2) }}" alt="">
                        </div>
                        <div class="img-gallery-block">
                            <img src="{{ asset('storage/' . $photos->image_3) }}" alt="">
                        </div>
                        <div class="img-gallery-block">
                            <img src="{{ asset('storage/' . $photos->image_4) }}" alt="">
                        </div>
                    @else
                        <div class="row justify-content-center align-items-center">
                            <h2 class="py-5">Этот продукт не содержит дополнительных картинок</h2>
                        </div>
                    @endif
                </div>
              </div>
              <div id="tabs-4">
                <p class="description col-12">Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
              </div>
              <div id="tabs-5">
                <p class="description col-12">Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
              </div>
            </div>
            </div>
            
        </div>
    </section>
@endsection

