<?php

namespace App\Http\Controllers;
use \Cart as Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class CartController extends Controller
{
    public function addToCart($id){
        $product = Product::find($id);
        Cart::add($product->id, $product->product_title, 1, $product->product_price, ['image' => $product->image_path]);
        \Session::flash('flash_message_added','CHECKOUT');
        return redirect()->back();
    }

    public function showCart(){
        $cart_items = Cart::content();
        return view('show_cart', compact('cart_items'));
    }

    public function RemoveFromCart($id){
        Cart::remove($id); 
        \Session::flash('flash_message','Item Removed');
        return redirect()->back();
    }

    }