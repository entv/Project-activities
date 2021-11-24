<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = 
    [
        'title', 'description', 'content'
    ];

    protected $hidden = 
    [
        'created_at', 'updated_at'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
