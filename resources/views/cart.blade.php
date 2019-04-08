@extends('layouts.main')
@section('title', 'Корзина')

@section('content')
    <div class="container-fluid" id="cart">
        <div class="conatiner cart-header">
            <div class="row justify-content-center">
                <h1 class="col-12">
                    Корзина
                </h1>
            </div>
        </div>
        <div class="container basket">
            @if(Session::has('cart'))
            <div class="row justify-content-start">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><span>Товары</span></th>
                                    <th scope="col"><span>Количество</span></th>
                                    <th scope="col"><span>Цена</span></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-6">
                                                    <div class="img-product-block">
                                                        <img src="{{asset('storage/' . $product['item']['image'])}}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col d-flex align-items-center">
                                                    <a href="/product/{{$product['item']['category_id']}}/{{$product['item']['slug']}}" class="name-of-item">
                                                        {{ $product['item']['name'] }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-xl-12">
                                                <div class="row d-flex justify-content-center">
                                                    <a href="/delete-from-cart/{{$product['item']['category_id']}}/{{$product['item']['slug']}}" class="btn btn-table" role="button"><i class="fas fa-minus"></i></a>
                                                    <h5 class="col-3 d-flex align-items-center justify-content-center counts">{{ $product['counts'] }}</h5>
                                                    <a href="/add-to-cart/{{$product['item']['category_id']}}/{{$product['item']['slug']}}" class="btn btn-table" role="button"><i class="fas fa-plus"></i></a>    
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price-product">
                                            <h5 class="new-price">
                                                <span>
                                                    {{$product['price']}}
                                                </span>
                                                грн
                                            </h5>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <h1 class="col-12">Итого к оплате: <span class="total-price">{{$totalPrice}} грн</span></h1>
            </div>
            <div class="row justify-content-start">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="row">
                        <form action="/send" class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-5" method="post">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control"  placeholder="Ф.И.О" required>
                            </div>
                            <div class="form-group">
                                <input name="products" ype="tel" class="form-control" placeholder="Номер телефона" required>
                            </div>
                            <div class="form-group">
                                <input name="totalprice" class="form-control" value="{{$totalPrice}}"  type="hidden">
                            </div>
                            <div class="form-group">
                                <input name="cart" class="form-control" value="@foreach($products as $product)Название:{{$product['item']['name']}}<br>Количество:{{$product['counts']}}<br>Цена:{{$product['price']}}<br><hr>@endforeach" type="hidden">
                            </div>
                            <div class="form-group row justify-content-between" id="btn-block">
                               <button type="submit" class="btn btn-info col-12 col-sm-10 col-md-6 col-lg-5 col-xl-5" id="agree">подтвердить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @else
            
            @endif
        </div>
    </div>
@endsection