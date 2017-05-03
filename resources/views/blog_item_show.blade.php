
@extends('layouts.app')

@section('content')         
 <div class="container site_content show_blog_item_page">
   <div class="row">
       <div class="col-md-12">
                 <h1 class="show_item_header">{{ $item->title }}</h1>
                 <h4 class="show_item_subtitle">{{$item->subtitle}}</h4>
                 <h5 class="post_date">{{$item->created_at->format('d-m-Y') }}</h5>
<div id="myCarousel" class="carousel slide" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <img id="carousel_img"src="/{{$item->image_path}}" alt="show image">
    </div>

    <div class="item">
    <div class="iframe_wrap">{!! $item->youtube_embed !!}</div>

    </div>



  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   </div>
    </div>
    
      <div class="row">
       <div class="col-md-9">
          <div class="show_item_text"><p>{{ $item->description }}</p></div>
       </div>
    </div>
    
</div>

@stop
