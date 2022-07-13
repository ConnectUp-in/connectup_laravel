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

    protected $appends = [
        'user',
        'meta'
    ];

            // json fields - images, tags, options, shares, likes, dislikes
            protected $casts = [
                'images' => 'array',
                'tags' => 'array',
                'options' => 'array',
                'shares' => 'array',
                'likes' => 'array',
                'dislikes' => 'array',
            ];
            
            
            public function getUserAttribute($value)
            {
                return User::find($this->attributes['user_id'])->select('id', 'name', 'email')->first();
            }


            public function getCaptionAttribute($value)
            {
                return makeHyperText($value);
            }


            public function getMetaAttribute($value)
            {
                if(getURLfromText($this->attributes['caption']) != ""){
                    $url = getURLfromText($this->attributes['caption']);
                    $meta = getMetaData($url);
                    return $meta;           
                }
                return null;
            }
            

}
