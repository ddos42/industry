@extends('layouts.app')

@section('content')
<div class="container site_content update_slider_page admin_cms_page">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h3>Update slider post</h3>
            <form action="/{{$item->id}}/update_slider_item"  method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-wrapper">
                <div class="form-item">
                    <label>Title</label>
                    <input type="text"   name="slide_title" value="{{ $item->slide_title}}" required /> 
                </div>
                <div class="form-item">
                    <label>Subtitle</label>
                    <input type="text" name="slide_subtitle" value="{{ $item->slide_subtitle}}"><br>
                </div>
                <div class="form-item">
                    <label>Body text</label>
                     <textarea  name="slide_text"  required>{{ $item->slide_text}}</textarea>
                 </div>
                <div class="update_blog_img"><img src="/{{$item->image_path }}" alt=""></div>
                <div class="form-item">
                    <label>Image upload<span class="img_size_check"> (Use images with size 1170px X 490px)</span></label>
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