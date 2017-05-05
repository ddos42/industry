@extends('layouts.app') @section('content')
<main class="container site_content single_artist_page">

<div class="row artist_content">
    <div class="col-sm-3"><img src="/{{$item->image_path}}" alt="{{$item->name}} image"> <h2 class="artist_name">{{$item->name}}</h2>
    </div>
    <div class="col-sm-8">
        <div class="row">
             <div class="col-sm-12"><h2 class="latest_content">Lastest Content</h2></div></div>
        <div class="row"> 
            <div class="col-sm-6 first_video"><div class="iframe_wrap">{!!$item->song1!!}</div></div>
            <div class="col-sm-6"><div class="iframe_wrap">{!!$item->song2!!}</div></div>
        </div>
        <div class="row">
            <div class="col-sm-12"><p class="artist_text">{{ $item->text}}</p></div>
        </div>
    </div>
</div>

</main>

@stop
