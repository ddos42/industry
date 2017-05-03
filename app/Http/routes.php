<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




//pagess
Route::auth();
Route::get('/','PagesController@welcome');
Route::get('/{id}/blog_post','PagesController@show');
Route::get('/{id}/slide_post','PagesController@show_slide_post');
Route::get('/{id}/artist','PagesController@show_artist');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/shop', 'PagesController@shop');
Route::get('/cart', 'CartController@showCart');
Route::get('{id}/view_product','PagesController@shop_show_product');
Route::get('/admin', 'PagesController@admin_home');
Route::get('/new_blog_item', 'PagesController@new_blog_item');
Route::get('/new_product', 'PagesController@new_product');

//getting update pages for updating but not updating
Route::get('/{id}/update_blog_item', 'PagesController@update_blog_item');
Route::get('/{id}/update_slider_item', 'PagesController@update_slider_item');
Route::get('/{id}/update_product', 'PagesController@update_product');
Route::get('/{id}/update_event', 'PagesController@update_event_item');

//cart functions
Route::get('/{id}/add_to_cart', 'CartController@addToCart');
Route::get('/{id}/remove_from_cart', 'CartController@RemoveFromCart');

//creating new items
Route::post('/admin_create_new_blog_post','AdminController@new_blog_item');
Route::post('/admin_create_new_product','AdminController@new_product');

//deleteing items
Route::get('/{id}/delete_blog_item', 'AdminController@delete_blog_item');
Route::get('/{id}/delete_product', 'AdminController@delete_product');

//updating  databbase  function
Route::patch('/{id}/update_blog_post', 'AdminController@update_blog_item');
Route::patch('/{id}/update_slider_item', 'AdminController@update_slider_item');
Route::patch('/{id}/admin_update_product', 'AdminController@update_product');
Route::patch('/{id}/update_event', 'AdminController@update_event');