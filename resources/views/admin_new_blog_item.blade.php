@extends('layouts.app')

@section('content')
<div class="container site_content new_blog_item_page admin_cms_page">
   <div class="row">
       <div class="col-md-6 col-md-offset-3">
       <h3>Create a new blog post</h3>
       <form action="/admin_create_new_blog_post"  method="POST" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         
          <div class="form-wrapper">
                 <div class="form-item">
                     <label>Title</label>
                     <input type="text"  name="title"required /> 
                 </div>
                 <div class="form-item">
                     <label>Subtitle</label>
                     <input type="text" name="subtitle"required /> 
                 </div>
                 <div class="form-item">
                     <label>Body area</label>
                     <textarea  name="description"required></textarea>
                 </div>
                 <div class="form-item">
                     <label>Youtube embed</label>
                     <input type="text" name="embed" required /> 
                 </div>

              <div class="form-item">
                     <label>Image upload <span class="img_size_check">(Use images with size 1000px X 525px)</span></label>
                       <input type="file" name="imgUpload" id="imgUpload" required>
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