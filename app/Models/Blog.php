<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
        'attachments' => 'array',
        'tags' => 'array',
    ];

    protected $fillable = [
        'title',
        'type',
        'content',
        'creator',
        'creator_type',
        'category',
        'attachments',
        'slug',
        'tags',
        'readtime',
        'image',
        'active',
        'suspended',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            if (!$event->id) {
                $event->id = Str::uuid();
            }
        });
    }
}
