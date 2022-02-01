<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'desc', 'user_id'
    ];

    public function user_link(){
        return $this->belongsTo(User::class, 'user_id'); // lleva FK
    }

    public function image_link(){
        return $this->belongsToMany(Images::class, 'image_comment'); // Pasamos la tabla pivote
    }

    public function getCreatedAttribute()
    {
        return $this->attributes['created_at'] = $this->created_at->format('Y-m-d');
    }
}

