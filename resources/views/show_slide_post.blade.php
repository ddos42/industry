@extends('layouts.app')

@section('content')         
 <div class="container site_content show_blog_item_page">
   <div class="row">
       <div class="col-md-12">
                 <h1 class="show_item_header">{{ $item->slide_title }}</h1>
                 <h4 class="show_item_subtitle">{{$item->slide_subtitle}}</h4>
                 <h5 class="post_date">{{$item->created_at->format('d-m-Y') }}</h5>
                 <img src="/{{$item->image_path}}" alt="show image">
   </div>
    </div>
    
      <div class="row">
       <div class="col-md-9">
          <div class="show_item_text"><p>{{ $item->slide_text }}</p></div>
       </div>
    </div>
    
</div>

@stop