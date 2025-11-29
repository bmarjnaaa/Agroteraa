<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = ['title', 'content', 'tag', 'date', 'image', 'link', 'is_featured'];
}
