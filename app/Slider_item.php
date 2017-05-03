<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider_item extends Model
{
    protected $fillable = ['slide_title', 'slide_subtitle','slide_text', 'created_at', 'updated_at'];
}
