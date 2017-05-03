@extends('layouts.app')

@section('content')
<div class="container site_content update_blog_item_page admin_cms_page">
   <div class="row">
       <div class="col-md-6 col-md-offset-3">
       <h3>Update blog post</h3>
       <form action="/{{$item->id}}/update_blog_post"  method="POST" enctype="multipart/form-data" >
        {{ method_field('PATCH') }}
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
           
            <div class="form-wrapper">
                 <div class="form-item">
                     <label>Title</label>
                     <input type="text" name="title"  value="{{ $item->title}}" required /> 
                 </div>
                 <div class="form-item">
                     <label>Subtitle</label>
                     <input type="text" value="{{ $item->subtitle}}" name="subtitle"required /> 
                 </div>
                 <div class="form-item">
                     <label>Body text</label>
                     <textarea  name="description"  required>{{ $item->description}}</textarea>
                 </div>
                 <div class="form-item">
                     <label>Youtube embed</label>
                     <input type="text" name="embed"  value="{{ $item->youtube_embed}}" required /> 
                 </div>
            <div class="update_blog_img"><img src="/{{$item->image_path }}" alt=""></div>
              <div class="form-item">
                     <label>Image upload <span class="img_size_check">(Use images with size 1000px X 525px)</span></label>
                       <input type="file" name="imgUpload" id="imgUpload">
                 </div>
            
           
           </div>
           <div class="form-group">
               <button type="submit" class="checkout_submit">Submit</button>
           </div>
        
       </form>
     
       
       </div>
    </div>
</div>

@stop