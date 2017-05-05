@extends('layouts.app') @section('content')
<main class="container site_content show_single_product">
    <div class="row show_product_row">

        <div class="col-md-4 col-sm-6">
            <div class="product_img"><img src="/{{ $products->image_path }}" alt="{{$products->product_title}}"></div>
        </div>

        <div class="col-md-5 col-sm-6 single_product_info">
            <div class="single_product_title">
            <h3>{{ $products->product_title }}</h3>
            </div>
            <div class="single_product_price"> NZD ${{ $products->product_price}}.00</div>
            <div class="single_product_description">{!! $products->product_description!!}</div>

            @if (Session::has('flash_message_added'))

                <a class="added_to_cart" href="/cart">   <div class="cart_button"> {{Session::get('flash_message_added')}}</div></a>

            @else
                <a class="add_to_cart" href="add_to_cart">  <div class="cart_button"> ADD TO CART</div></a>
            @endif
            <h2 class="back_to_shop"><a href="/shop">Back to shop</a></h2>
        </div>
    </div>
</main>
@stop

