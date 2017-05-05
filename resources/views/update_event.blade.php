@extends('layouts.app')

@section('content')
<main class="container site_content update_slider_page admin_cms_page">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h3>Update Event</h3>
            <form action="/{{$item->id}}/update_event"  method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-wrapper">
                <div class="form-item">
                    <label>Title</label>
                    <input type="text"   name="title" value="{{ $item->title}}" required /> 
                </div>
                  <div class="form-item">
                    <label>Date</label>
                    <input type="text"   name="date" value="{{ $item->date}}" required /> 
                </div>
                 <div class="form-item">
                    <label>Link</label>
                    <input type="text"   name="link" value="{{ $item->link}}" required /> 
                </div>
           
                <div class="update_blog_img"><img src="/{{$item->image_path }}" alt=" {{ $item->title}} image"></div>
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