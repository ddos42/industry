@extends('layouts.app')

@section('content')
<div class="container blog_feed site_content">
   <div class="row">
       <div class="col-md-12">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">


  @foreach($slider_items as $key => $slider_item)
    <div class="item {{ $key == 0 ? 'active' : '' }}">
     <a href="{{$slider_item->id}}/slide_post"> <img src="{{ $slider_item->image_path }}" alt="Chania"></a>
       <div class="carousel-caption">
        <h2>{{ $slider_item->slide_title }}</h2>
        <p>{{ $slider_item->slide_subtitle}}</p>
      </div>
    </div>
@endforeach

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
    <div class="row"> <div class="col-md-12"><h2 class="upcoming_events">Upcoming events</h2></div></div>
   <div class="row events">
    
        @foreach($events as $event)
       <div class="col-xs-6 col-md-3 event_item">
            <div class="event_img"><a href="{{ $event->link }}
            }}"  target="_blank"><img src="{{ $event->image_path }}"  alt=""></a></div>
             <div class="event_title"><h4>{{ $event->title }}  <span class="event_date_gray">{{$event->date}}</span></h4></div>
       </div>
        @endforeach  
   </div>
                      
@foreach($blog_items as $blog_item)
            <div class="row blog_item">
                   <div class="col-md-4">
                       <div class="blog_item_thumbnail"><a href="{{ $blog_item->id }}/blog_post"><img src="{{ $blog_item->image_path }}" alt=""></a></div></div>
                    <div class="col-md-4">
                       <a href="{{ $blog_item->id }}/blog_post">
                        <div class="blog_item_title"><h2>{{ $blog_item->title }}</h2></div>
                        <div class="blog_item_subtitle">{{  $blog_item->subtitle }}</div>
                        <div class="blog_item_date">{{$blog_item->created_at->format('d-m-Y') }}</div>
                        </a>
                    </div>
             </div>
@endforeach
           
      
</div>
@endsection
