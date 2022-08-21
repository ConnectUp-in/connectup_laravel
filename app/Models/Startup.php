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
        'lookingfor' => 'array',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
        });
    }
}