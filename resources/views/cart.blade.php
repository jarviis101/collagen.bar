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
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-11 col-lg-10 col-xl-8">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                Товары:
                                            </th>
                                            <th scope="col">Количество</th>
                                            <th scope="col">Цена</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                        <div class="img-product-block">
                                                            <img src="{{asset('storage/' . $product['item']['image'])}}" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex align-items-center">
                                                        <h4 class="name-of-item">
                                                            {{ $product['item']['name'] }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-xl-12">
                                                    <div class="row d-flex justify-content-between">
                                                        <a href="#" class="col-4 btn btn-primary pull-right btn-table btn-rm-1" id="btn-{{ $product['item']['slug'] }}" role="button">-</a>
                                                        <h5 class="col-4 d-flex justify-content-center counts">{{ $product['counts'] }}</h5>
                                                        <a href="#" class="col-4 btn btn-primary pull-right btn-table" role="button">+</a>    
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="price-product">
                                                <span class="price-items-block">
                                                    <h5 class="new-price">
                                                        <span>
                                                            {{$product['price']}}
                                                        </span>
                                                        грн
                                                    </h5>
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                </div>
                
            </div>
            @else
            
            @endif
        </div>
    </div>
@endsection