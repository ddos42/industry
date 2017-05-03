<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['product_title','product_subtitle','product_price', 'product_description','created_at', 'updated_at'];
}
