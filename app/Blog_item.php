<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_item extends Model
{
  protected $fillable = ['title', 'subtitle', 'description', 'youtube_embed', 'created_at', 'updated_at'];
}
