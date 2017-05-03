<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $fillable = ['title', 'date','link', 'created_at', 'updated_at'];
}
