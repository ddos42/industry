@extends('layouts.app')

@section('content')
<main class="container site_content update_product_page admin_cms_page">
   <div class="row">
       <div class="col-md-6 col-md-offset-3">
       <h3>Update Product</h3>
       
       <form action="/{{$item->id}}/admin_update_product"  method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        
        <div class="form-wrapper">
                    <div class="form-item">
                        <label>Title</label>
                        <input type="text"  name="product_title" value="{{ $item->product_title}}" required /> 
                    </div>
                      <div class="form-item">
                        <label>Subtitle</label>
                        <input type="text"  name="product_subtitle"  value="{{ $item->product_subtitle}}" required /> 
                    </div>
                    <div class="form-item">
                        <label>Product description</label>
                        <textarea type="text" name="product_description"  required>{{ $item->product_description}}</textarea> 
                    </div>
                    <div class="form-item">
                        <label>Price</label>
                        <input type="number" name="product_price"  value="{{ $item->product_price}}" required /> 
                    </div>
                    <div class="update_blog_img"><img src="/{{$item->image_path }}" alt="{{ $item->product_title}} image"></div>
                    <div class="form-item">
                        <label>Image upload</label>
                        <input type="file" name="imgUpload" id="imgUpload">
                    </div>
            
           </div>
           <div class="form-group">
               <button type="submit" class="checkout_submit">Submit</button>
           </div>
        
        
        
       </form>
       
       </div>
    </div>
</main>

@stop