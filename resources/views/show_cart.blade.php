@extends('layouts.app') @section('content')

<div class="container site_content">
    <div class="row cart_row">
    @if (Cart::count() == 0 )
          <div class="col-md-12 empty_cart">
           <h1>Your cart is empty!</h1>
           <h2><a href="/shop">Shop now</a></h2>
            </div>
           @else



            @if (Session::has('flash_message'))
                    <div class="remove_item_flash  alert alert-success">{{Session::get('flash_message')}}</div>
            @endif
            <div class="col-md-6 cart_left">
            <h3>Order summary</h3>
            @foreach($cart_items as $cart_item)
            <div class="col-md-12 cart_item">
                <img src="{{ $cart_item->options->image }}" alt="">
                <div class="cart_info">
                    <div class="product_title">
                        {{ $cart_item->name}}</div>
                    <div class="cart_subtitle">{{ $cart_item->description }}</div>
                    <div class="cart_price">Price NZD: ${{ $cart_item->price}}.00</div>
                    <div class="cart_qty">QTY: {{ $cart_item->qty}}</div>
                    <a href="{{$cart_item->rowId}}/remove_from_cart"><strong>Remove item</strong> <img id="cross_icon"src="/images/cross.png" alt=""></a> 
                </div>
            </div>
            @endforeach

                <div class="col-md-12 cart_total"><div class="left_total"><strong>Subtotal</strong></div><div class="right_total"><strong>NZD ${{Cart::subtotal()}}</strong></div></div>
                <div class="col-md-12 cart_total"><div class="left_total"><strong>Shipping</strong></div><div class="right_total"><strong>NZD $0.00</strong></div></div>
                <div class="col-md-12 cart_total"><div class="left_total"><strong>Grand Total</strong></div><div class="right_total"><strong>NZD ${{Cart::subtotal()}}</strong></div></div>
        
            </div>
            
            <div class="col-md-6 cart_right">
               <h3>Personal Details</h3>
                <form id="personal_details_form"action="">
                   <div class="form-group">
                    <input class="form-control" type="text" id="name" placeholder="Full name" required>
                    </div>
                    <div class="form-group">
                    <input class="form-control" type="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">

                    <input class="form-control" type="number" id="phone" placeholder="Phone" required>
                    </div>
                 
                    <h3>Shipping address</h3>
                    <div class="form-group">
                    <input class="form-control" type="text" id="address" placeholder="Address" required>
                    </div>
        
                     <div class="form-group">
                    <input class="form-control" type="text" id="city" placeholder="City/Province" required>
                     <input class="form-control" type="text" id="suburb" placeholder="Suburb" required>
                    </div>
                    
                    <div class="form-group">
                    <input class="form-control" type="number" id="postcode" placeholder="Postcode" required> <input class="form-control" type="text" id="country" placeholder="Country" required>
                    </div>
                       <button class="checkout_submit" type="submit">Pay Securely Now</button>    
                </form>
                
                
                
                
                
            </div>
            
            
   @endif
     
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$( ".remove_item_flash" ).delay(3000).slideUp(300);
</script>

@stop