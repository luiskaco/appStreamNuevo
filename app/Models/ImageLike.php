<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageLike extends Model
{
    protected $fillable = [
        'image_id','user_id'
    ];
}
