<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image_comment extends Model
{
    protected $fillable = [
        'image_id', 'comment_id'
    ];

}
