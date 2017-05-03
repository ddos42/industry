<?php

namespace App\Http\Controllers;


use App\Blog_item;
use App\Product;
use App\Slider_item;
use App\Artist;
use Illuminate\Http\Request;
use App\Event;

use App\Http\Requests;

class PagesController extends Controller
{

    public function welcome()
    {
        $slider_items = Slider_item::all();
        $blog_items = Blog_item::orderBy('created_at','desc')->get();
        $events = Event::orderBy('updated_at','desc')->get();
        return view('welcome', compact('blog_items','slider_items','events'));
    }
    public function about(){
        $items = Artist::all();
        return view ('about', compact('items'));
    }
    public function contact(){
        return view ('contact');
    }
    public function shop()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }
    public function show($id){
        $item = Blog_item::find($id);
        return view('blog_item_show', compact('item'));
    }
    public function show_artist($id){
        $item = Artist::find($id);
        return view('view_artist', compact('item'));
    }
        
    public function show_slide_post($id){
        $item = Slider_item::find($id);
        return view('show_slide_post', compact('item'));
    }
    public function shop_show_product($id){
        $products = Product::find($id);
        return view('shop_show_product', compact('products'));
    }
    public function new_blog_item(){
        return view ('admin_new_blog_item');
        
    }
    public function new_product(){
        return view ('admin_new_product');
        
    } 
    public function update_blog_item($id){
        $item = Blog_item::find($id);
        return view ('admin_update_blog_item', compact('item'));
        
    }
    public function update_slider_item($id){
        $item = Slider_item::find($id);
        return view ('update_slider_item', compact('item'));
    
    }
    public function update_event_item($id){
        $item = Event::find($id);
        return view ('update_event', compact('item'));
    
    }
    public function update_product($id){
        $item = Product::find($id);
        return view ('update_product', compact('item'));
        
    }
    

    public function admin_home(){
        $products = Product::all();
        $slider_items = Slider_item::all();
        $blog_items = Blog_item::orderBy('created_at','desc')->get();
        $event_items = Event::orderBy('updated_at','asc')->get();
        return view('admin_home', compact('blog_items','slider_items','products','event_items'));
    }
}
