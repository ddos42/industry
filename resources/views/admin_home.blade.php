@extends('layouts.app')

@section('content')

<main class="container site_content admin_page">
    <div class="row">
        <div class="col-md-4">      
<h1 class="admin_control_panel_header">Admin Control Panel</h1>  
        </div>
        
        </div>
    <div class="row">
    <div class="col-md-12">
    <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item active">
    <a class="nav-link active" data-toggle="tab" href="#blog" role="tab">Blog feed</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#slides" role="tab">Home slideshow</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#products" role="tab">Store</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#events" role="tab">Events</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="blog" role="tabpanel">
      
      <div class="row">
          <div class="col-md-3">
              <a href="/new_blog_item">
               <div class="item_btn new_blog_btn ">
                New Blog item
               </div>
              </a>
          </div>
      </div>
      
      @foreach($blog_items as $blog_item)
            <div class="row blog_item">
                   <div class="col-md-4">
                    <div class="admin_item_thumbnail"><img src="{{ $blog_item->image_path }}" alt="{{$blog_item->title}} icon image"></div></div>
                    <div class="col-md-5">
                        <div class="admin_item_title"><h4>{{ $blog_item->title }}</h4></div>
                        <div class="blog_item_subtitle">{{  $blog_item->subtitle }}</div>
                        <div class="blog_item_date">{{$blog_item->created_at->format('d-m-Y')}}</div>
                    </div>
                    <div class="col-md-3">
                    <a href="{{$blog_item->id}}/update_blog_item">
                        <div class="item_btn admin_item_edit">Edit</div>
                    </a>
                    <a href="{{$blog_item->id}}/delete_blog_item">
                       <div class="item_btn admin_item_delete delete_button">Delete</div>
                    </a>
        </div>
             </div>
          
@endforeach
          </div>    
 
  <div class="tab-pane" id="slides" role="tabpanel"> 
           @foreach($slider_items as $slider_item)
            <div class="row blog_item">
                   <div class="col-md-4">
                    <div class="admin_item_thumbnail"><img src="{{ $slider_item->image_path }}" alt="{{$slider_item->slide_title}}"></div></div>
                    <div class="col-md-5">
                        <div class="admin_item_title"><h4>{{ $slider_item->slide_title }}</h4></div>
                        <div class="blog_item_subtitle">{{  $slider_item->slide_subtitle }}</div>
                        <div class="blog_item_date">{{ $slider_item->created_at->format('d-m-Y') }}</div>
                    </div>
                    <div class="col-md-3">
                     <a href="{{ $slider_item->id}}/update_slider_item">
                    <div class="item_btn admin_item_edit">Edit</div>
                    </a>
                   </div>
             </div>
@endforeach
 
 
 </div>
  <div class="tab-pane" id="products" role="tabpanel"> 
         <div class="row">
             <div class="col-md-3">
                 <a href="/new_product">
                     <div class="item_btn new_blog_btn ">New Product</div>
                 </a>
             </div>
         </div>
        
           @foreach($products as $product)
            <div class="row blog_item">
                <div class="col-xs-6">
                    <div class="admin_item_thumbnail"><img src="{{ $product->image_path }}" alt="{{$product->product_title}}"></div>
                </div>
                <div class="col-xs-6">
                    <div class="blog_item_title"><h4>{{ $product->product_title }}</h4></div>
                    <div class="blog_item_subtitle">{{  $product->product_subtitle }}</div>
                    <div class="blog_item_date">{{ $product->created_at->format('d-m-Y') }}</div>
                </div>
                <div class="col-xs-6">
                    <a href="{{ $product->id}}/update_product">
                        <div class="item_btn admin_item_edit">Edit</div>
                    </a>
                    <a href="{{$product->id}}/delete_product">
                        <div class="item_btn admin_item_delete delete_button">Delete</div>
                    </a>
                </div>
            </div>
@endforeach
 </div>
 <div class="tab-pane" id="events" role="tabpanel">
         
           @foreach($event_items as $event_item)
            <div class="row blog_item"> 
                   <div class=" col-xs-6">
                    <div class="admin_item_thumbnail"><img src="{{ $event_item->image_path }}" alt="{{$event_item->title}}"></div></div>
                    <div class="col-xs-6">
                    <div class="admin_item_title"><h4>{{ $event_item->title }}</h4></div>
                    </div>
                    <div class="col-xs-6">
                     <a href="{{ $event_item->id}}/update_event">
                    <div class="item_btn admin_item_edit">Edit</div>
                    </a>
                   </div>
             </div>
@endforeach
</div>
</div>
    
            </div>
        </div>
</main>


@endsection



