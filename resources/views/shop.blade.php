@extends('layouts.app') @section('content')
<div class="container">
    <div class="row shop_row">

        @foreach($products as $product)
            <div class="col-md-3  col-xs-6 product_item" >
                <div class="product_thumbnail">
                    <a href="{{$product->id}}/view_product">
                    <img src="{{ $product->image_path }}" alt="">
                    </a>
                    <a href="{{$product->id}}/view_product"><div class="img_hover_overlay"></div></a>
                </div>
                <div class="product_info">
                    <a href="{{$product->id}}/view_product">
                    <div class="product_title">
                    <h3>{{ $product->product_title }}</h3>
                    </div>
                    <div class="product_subtitle">{{ $product->product_subtitle }}</div>
                    <div class="product_price">${{ $product->product_price}}.00</div>
                    </a>
                </div>
            </div>

        @endforeach

    </div>
</div>
@stop