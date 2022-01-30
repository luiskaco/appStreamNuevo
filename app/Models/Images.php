<?php

namespace App\Models;

use App\User;
use App\Models\Image_comment;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'url', 'status', 'like','user_id','group'
    ];

    public function user_link(){
        return $this->belongsTo(User::class, 'user_id'); // lleva FK
    }

    public function comment_link(){
        return $this->belongsToMany(Comment::class, 'image_comment');  // Pasamos la tabla pivote
    }

    public function comment_link2(){
        return $this->belongsToMany(Image_comment::class, 'image_comment');  // Pasamos la tabla pivote
    }
}
