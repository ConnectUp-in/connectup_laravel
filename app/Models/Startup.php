<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
        });
    }
}
