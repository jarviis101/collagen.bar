<div class="row justify-content-start products">
    @foreach ($product as $item)
        <div class="card col-12 col-sm-6 col-md-6 col-lg-5 col-xl-4">
            <div class="row justify-content-end top-row">
                @if($item->is_top_sales == 'rd1')
                    <span class="top-of-sales">Топ продаж</span>
                @endif
            </div>
            <a href="/product/{{$item->category_id}}/{{$item->slug}}" class="img-product-block">
                <img src="{{ asset('storage/' . $item->image) }}">
            </a>
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text">{{ str_limit($item->description, $limit = 75, $end="...") }}</p>
                <div class="d-flex align-items-center justify-content-between">
                    @if( $item->presence_of == 'radio1')
                        <div class="col-5 col-sm-5 col-md-6 col-lg-5 col-xl-5 instance-block">
                            <div class="d-flex align-items-center justify-content-around">
                                <i class="fas fa-check"></i>
                                <span class="instance">Есть в наличии</span>
                            </div>
                        </div>
                    @else
                        <div class="col-5 col-sm-5 col-md-6 col-lg-5 col-xl-5 instance-block-no">
                            <div class="d-flex align-items-center justify-content-around">
                                <i class="fas fa-times"></i>
                                <span class="instance">Нету в наличии</span>
                            </div>
                        </div>
                    @endif
                    <div class="col-6 price-block">
                        <span class="price">
                            <span class="value">{{ $item->price }}</span> грн
                        </span>
                    </div>
                </div>
                <div class="d-flex order-row justify-content-between">
                    <a class="btn-custom col-6 ajax-btn" href="/add-to-cart/{{$item->category_id}}/{{$item->id}}">
                        Купить
                    </a>
                    @if($item->is_under_order == 'rd1')
                        <span class="col-5 under-order">
                            Под заказ
                        </span>
                    @endif
                </div>
            </div>
            <a href="#" class="reviews-block">
                <i class="fas fa-comments"></i>
                <span class="counts-reviews">6</span> отзывов
            </a>
        </div>
    @endforeach
</div>