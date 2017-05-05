@extends('layouts.app') @section('content')
<main class="container site_content all_artist_page">

<div class="row">    
@foreach($items as $item)
        <div class="col-sm-4 col-xs-6 artist_item">
               
                <div class="product_thumbnail">
                    <a href="{{$item->id}}/artist">
                    <img src="{{ $item->image_path }}" alt="{{$item->name}} icon image">
                    </a>
 <a href="{{$item->id}}/artist"><div id="img_hover_overlay"></div></a>
               
                </div>
                <div class="artist_name"><h3>{{$item->name}}</h3></div>
    
            </div>
            @endforeach
</div>  

</main>
@stop