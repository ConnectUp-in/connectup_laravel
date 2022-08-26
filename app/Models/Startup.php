<?php

namespace App\Models;

use App\Models\Startup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

function getUniqueStartupUsername($username)
{
    $startup = Startup::where('username', $username)->first();
    if ($startup) {
        $username = $username . rand(1, 9);
        return getUniqueUsername($username);
    } else {
        return $username;
    }
}

class Startup extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $casts = [
        'id' => 'string',
        'socials' => 'array',
        'interests' => 'array',
        'objectives' => 'array',
    ];
    // id, name, bio, about, logo, cover,website, socials, founded_at, contact_email, hiring_email, founder, category, stage, contact, funded, interests, active, lookingfor, created_at, updated_at

    // Add _token to fillable array
    protected $fillable = [
        'id',
        'name',
        'bio',
        'about',
        'website',
        'founded_at',
        'username',
        'contact_email',
        'hiring_email',
        'founder',
        'category',
        'stage',
        'contact',
        'funded',
        'interests',
        'active',
        'objectives',
        'created_at',
        'updated_at',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($startup) {
            $startup->id = (string) Str::uuid();

            if (!$startup->username) {
                $email = explode('@', $startup->contact_email);
                $username = $email[0];

                $startup->username = getUniqueStartupUsername($username);
            }
            if (!$startup->cover) {
                // generater a random cover photo from /assets/defaults/covers
                $startup->cover = '/assets/defaults/covers/' . rand(1, 21) . '.jpg';
            }
            // if (!$startup->logo) {
            //     $startup->logo = '/assets/defaults/startuplogo.jpg';
            // }
        });

    }

    public function getStageAttribute($value)
    {
        return Stage::find($value);
    }

    public function getCategoryAttribute($value)
    {
        return Category::find($value);
    }

    public function getLogoAttribute($image)
    {
        if (!$image) {
            return 'https://ui-avatars.com/api/?name=' .
            urlencode($this->name) .
                '&color=7F9CF5&background=EBF4FF';
        }
        return $image;
    }

}
