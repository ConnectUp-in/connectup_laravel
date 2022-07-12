<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    // If id is not present while creating a new user, then generate a random id.
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (! $post->id) {
                $post->id = Str::uuid();
            }
        });
    }

            // json fields - images, tags, options, shares, likes, dislikes
            protected $casts = [
                'images' => 'array',
                'tags' => 'array',
                'options' => 'array',
                'shares' => 'array',
                'likes' => 'array',
                'dislikes' => 'array',
            ];
            
            



}
