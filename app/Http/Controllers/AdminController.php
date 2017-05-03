<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog_item;
use App\Slider_item;
use App\Product;
use App\Event;

use App\Http\Requests;

class AdminController extends Controller{
    
public function new_blog_item(Request $request)
{
        $file = $request->imgUpload;
        $fileName = date('U') . '_' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $blog_item = new Blog_item;
        $blog_item->title = $request->title;
        $blog_item->subtitle = $request->subtitle;
        $blog_item->description = $request->description;
        $blog_item->youtube_embed = $request->embed;
        $blog_item->image_path = 'images/'.$fileName;
        $blog_item->save();   
        return redirect('/admin');
}
    public function new_product(Request $request){
        $file = $request->imgUpload;
        $fileName = date('U') . '_' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $product = new Product;
        $product->product_title = $request->product_title;
        $product->product_subtitle = $request->product_subtitle;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->image_path = 'images/'.$fileName;      
        $product->save();  
        return redirect('/admin');
}
    
    public function update_blog_item(Request $request, $id){ 
        $item = Blog_item::find($id);
        $item->update($request->all());
        
        if ($request->hasFile('imgUpload')){
        $file = $request->imgUpload;
        $fileName = date('U') . '_' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $item->image_path = 'images/'.$fileName;
        }
        $item->save();
        return redirect('/admin');
}
    public function update_event(Request $request, $id){  
        
        $item = Event::find($id);
        $item->update($request->all());
         
        if ($request->hasFile('imgUpload')){
        $file = $request->imgUpload;
        $fileName = date('U') . '_' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $item->image_path = 'images/'.$fileName;
        }
        $item->save();
        return redirect('/admin');
}
    
    public function update_slider_item(Request $request, $id){

        $item = Slider_item::find($id);
        $item->update($request->all());
         if ($request->hasFile('imgUpload')){
        $file = $request->imgUpload;
        $fileName = date('U') . '_' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $item->image_path = 'images/'.$fileName;
        }
        $item->save();
        return redirect('/admin');
}
    
    public function update_product(Request $request, $id){
        $item = Product::find($id);    
        $item->update($request->all());
        
         if ($request->hasFile('imgUpload')){
        $file = $request->imgUpload;
        $fileName = date('U') . '_' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $item->image_path = 'images/'.$fileName;
        }
        $item->save();
        return redirect('/admin');
     }
    
    public function delete_blog_item($id){
        $item = Blog_item::find($id);
        $item->delete();
         \Session::flash('flash_message','deleted');
        return redirect()->back();
    }
    
    public function delete_product($id){
        $item = Product::find($id);
        $item->delete();
         \Session::flash('flash_message','deleted');
        return redirect()->back();
    }

}